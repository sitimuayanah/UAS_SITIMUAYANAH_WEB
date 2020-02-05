<?php
class Loginmhs extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_login');
        $this->load->model('M_admin');
    }

    public function index() {
        $title['title'] = 'Login Mahasiswa';
        $this->load->view('modul/head', $title);
        $this->load->view('materialize/style');
        $this->load->view('mahasiswa/login');
        $this->load->view("materialize/script");
    }

    public function login()
    {
        $npm = $this->input->post("npm");
        $pass = $this->input->post("password");

        $where = array (
            'npm' => $npm,
            'password' => md5($pass)
        );

        $cek = $this->M_login->ceklogin('login_mhs', $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'npm' => $npm,
                'status_mhs' => 'login'
            );

            $this->session->set_userdata($data_session);
            redirect("mahasiswa");
        } else {
            $this->session->set_flashdata('pesan_salahmhs', '<div class="materialert blue">
		    <div class="material-icons"></div>
		    Username atau Password salah
		</div>');
            redirect('loginmhs');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginmhs');
    }

    public function daftar()
    {
        $title['title'] = 'Daftar Mahasiswa';
        $this->load->view('modul/head', $title);
        $this->load->view('materialize/style');
        $this->load->view('mahasiswa/daftar');
        $this->load->view("materialize/script");
    }

    public function submitDaftar()
    {
        $npm = $this->input->post("npm");
        $pass1 = $this->input->post("password1");
        $pass2 = $this->input->post("password2");

        $data = array(
            'npm' => $npm,
            'password' => md5($pass2)
        );
        $where = array('npm' => $npm);
        $cek = $this->M_login->ceklogin('mahasiswa', $where)->num_rows();
        if($pass1 == $pass2) {
            if($cek > 0){
                $this->M_admin->tambah_data('login_mhs', $data);
                $this->session->set_flashdata('pesan_salahmhs', '<div class="materialert blue">
                <div class="material-icons"></div>
                Akun Berhasil dibuat, silahkan login
            </div>');
                redirect("loginmhs/daftar");
            } else {
                $this->session->set_flashdata('pesan_salahmhs', '<div class="materialert blue">
                <div class="material-icons"></div>
                NPM anda tidak ditemukan
            </div>');
                redirect('loginmhs/daftar');
            }
        } else {
            $this->session->set_flashdata('pesan_salahmhs', '<div class="materialert blue">
                <div class="material-icons"></div>
                Password tidak sama
            </div>');
            redirect('loginmhs/daftar');
        }
    }
}