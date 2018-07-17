<?php

class Login_m extends CI_Model {

    private $table = "users";

    function cek($username, $password) {
        $this->db->where("u_name", $username);
        $this->db->where("u_password", $password);
        return $this->db->get("users");
    }

    function semua() {
        return $this->db->get("users");
    }

    function cekKode($kode) {
        $this->db->where("u_name", $kode);
        return $this->db->get("users");
    }

    function cekId($kode) {
        $this->db->where("u_id", $kode);
        return $this->db->get("users");
    }
    
    function getLoginData($usr, $psw) {
        $u = mysql_real_escape_string($usr);
        $p = md5(mysql_real_escape_string($psw));
        $q_cek_login = $this->db->get_where('users', array('username' => $u, 'password' => $p));
        if (count($q_cek_login->result()) > 0) {
            foreach ($q_cek_login->result() as $qck) {
                foreach ($q_cek_login->result() as $qad) {
                    $sess_data['logged_in'] = 'aingLoginWebYeuh';
                    $sess_data['u_id'] = $qad->u_id;
                    $sess_data['u_name'] = $qad->u_name;
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['group'] = $qad->group;
                    $sess_data['rid'] = $qad->rid;
                    $this->session->set_userdata($sess_data);
                }
                $role = $this->session->userdata('role');
                if ($role == 'Administrator') {
                	redirect('dashboard');
                }elseif ($role == 'User') {
                	redirect('user');
                }elseif ($role == 'Superadmin') {
                	redirect('superadmin');
                }
                
            }
        } else {
            $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
            header('location:' . base_url() . 'login');
        }
    }

    function update($id, $info) {
        $this->db->where("u_id", $id);
        $this->db->update("users", $info);
    }

    function simpan($info) {
        $this->db->insert("users", $info);
    }

    function hapus($kode) {
        $this->db->where("u_id", $kode);
        $this->db->delete("users");
    }

}
