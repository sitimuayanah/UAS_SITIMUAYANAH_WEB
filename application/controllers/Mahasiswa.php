<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('M_admin');
        if($this->session->userdata('status_mhs') != 'login') {
			redirect("loginmhs");
		}
    }

    public function index()
    {
        $title['title'] = 'Andri';
        $data['datamhs'] = $this->M_admin->data_mhs_fetch($this->session->userdata('npm'));
        $this->load->view('modul/head', $title);
        $this->load->view('materialize/style');
        $this->load->view('mahasiswa/navs', $data);
        $this->load->view('mahasiswa/dashboard', $data);
        $this->load->view("materialize/script");
    }

    public function daftar_view()
    {
        $title['title'] = 'Daftar Mahasiswa';
        $this->load->view('modul/head', $title);
        $this->load->view('materialize/style');
        $this->load->view('mahasiswa/daftar');
        $this->load->view("materialize/script");
    }

    public function setting()
    {
        $title['title'] = 'Profil Mahasiswa';
        $data['datamhs'] = $this->M_admin->data_mhs_fetch($this->session->userdata('npm'));
        $this->load->view('modul/head', $title);
        $this->load->view('mahasiswa/navs', $data);
        $this->load->view('materialize/style');
        $this->load->view('mahasiswa/setting');
        $this->load->view("materialize/script");
    }

    public function nilai()
    {
        $title['title'] = 'Nilai Mahasiswa';
        $data['datamhs'] = $this->M_admin->data_mhs_fetch($this->session->userdata('npm'));
        $this->load->view('modul/head', $title);
        $this->load->view('mahasiswa/navs', $data);
        $this->load->view('materialize/style');
        $this->load->view('mahasiswa/nilai');
        $this->load->view("materialize/script");
    }

    public function absen()
    {
        $title['title'] = 'Absen Mahasiswa';
        $data['datamhs'] = $this->M_admin->data_mhs_fetch($this->session->userdata('npm'));
        $this->load->view('modul/head', $title);
        $this->load->view('mahasiswa/navs', $data);
        $this->load->view('materialize/style');
        $this->load->view('mahasiswa/absen');
        $this->load->view("materialize/script");
    }

}   