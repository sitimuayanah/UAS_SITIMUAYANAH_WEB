<?php
class Loginadm extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_login');
    }

    public function index() {
        $title['title'] = 'Admin';
        $this->load->view('modul/head', $title);
        $this->load->view('materialize/style');
        $this->load->view('admin/login');
        $this->load->view("materialize/script");
    }

    public function login()
    {
        $npm = $this->input->post("username");
        $pass = $this->input->post("password");
        $where = array(
            'username' => $npm,
            'password' => $pass
        );
        

        $cek = $this->M_login->ceklogin('admin', $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama_adm' => $npm,
                'status_adm' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect("admin");
        } else {
            $this->session->set_flashdata('pesan_salah', '<div class="materialert pink">
		    <div class="material-icons">error_outline</div>
		    Username atau Password salah
		</div>');
            redirect('loginadm');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginadm');
    }

}