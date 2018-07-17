<?php
class Login extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('login_m'));   
    }

    function index() {
    	$this->load->view('login/login_v');
		
    }

    function proses() {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/login_v');
        } else {

            $usr = $this->input->post('username');
            $psw = $this->input->post('password');
            $u = mysql_real_escape_string($usr);
            $p = md5(mysql_real_escape_string($psw));
            $cek = $this->login_m->cek($u, $p);
            if ($cek->num_rows() > 0) {
                //login berhasil, buat session
                foreach ($cek->result() as $qad) {
                    $sess_data['u_id'] = $qad->u_id;
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['u_name'] = $qad->u_name;
                    $sess_data['role'] = $qad->role;
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

            } else {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
                redirect('login');
            }
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
