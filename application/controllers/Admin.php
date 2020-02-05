<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('M_admin');

        if($this->session->userdata('status_adm') != 'login') {
			redirect("loginadm");
		}
    }

    public function index()
    {
        $title['title'] = 'Admin';
        $this->load->view('modul/head', $title);
        $this->load->view('materialize/style');
        $this->load->view('admin/dashboard');
        $this->load->view("materialize/script");
    }

    public function datamhs()
    {
        $title['title'] = 'Admin';
        $data['datamhs'] = $this->M_admin->tampil_data("mahasiswa");
        $this->load->view('modul/head', $title);
        $this->load->view('materialize/style');
        $this->load->view('admin/data_mahasiswa', $data);
        $this->load->view("materialize/script");
    }

    public function modal1()
    {
        $this->load->view('modul/head');
        $this->load->view('materialize/style');
        $this->load->view('admin/modal1');
        $this->load->view("materialize/script");
    }

    public function editdatamhs($id = null)
    {
        if(is_null($id)){
            $this->session->set_flashdata('message_id', '<div class="materialert pink">
		    <div class="material-icons">egetByIdrror_outline</div>
		    Data tidak ada
		</div>');
            redirect("admin/datamhs");
        } else {
            $where = array('npm' => $id);
            $data['title'] = 'Admin';
            $data['datamhs'] = $this->M_admin->edit_data("mahasiswa",$where)->row_array();
            $this->session->set_userdata($where);

            $this->load->view('modul/head', $data);
            $this->load->view('materialize/style');
            $this->load->view('admin/edit_data', $id);
            $this->load->view("materialize/script");
        }
    }

    public function updateDatamhs()
    {
        // $npm = $this->input->post("npm");
        $npm = $this->session->userdata("npm");
        $nama = $this->input->post("nama");
        $jurusan = $this->input->post("prodi");
        $kelas = $this->input->post("kelas");
        if(!empty($_FILES["foto"]["name"])){
            $foto = $this->_uploadImage();
        } else {
            $foto = $this->input->post("old_image");
        }

        $data = array(
            'nama' => $nama,
            'jurusan' => $jurusan,
            'kelas' => $kelas,
            'image' => $foto
        );

        $where = array(
            'npm' => $npm
        );
        $this->M_admin->update('mahasiswa', $data, $where);
        redirect("admin/datamhs");
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->npm;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    public function tambahMahasiswa()
    {
        $npm = $this->input->post("npm");
        $nama = $this->input->post("nama");
        $jurusan = $this->input->post("prodi");
        $kelas = $this->input->post("kelas");
        $foto = $this->_uploadImage();
        $data = array(
            'npm' => $npm,
            'nama' => $nama,
            'jurusan' => $jurusan,
            'kelas' => $kelas,
            'image' => $foto
        );

        $this->M_admin->tambah_data("mahasiswa", $data);
        $this->session->set_flashdata('message_hapus', '<div class="materialert teal accent-3" style="height:50px;">
                <div class="material-icons">check</div>
                Data berhasil diunggah
            </div>');
        redirect("admin");
    }


    private function _deleteImage($id)
    {
        if ($id->image != "default.jpg") {
            $filename = explode(".", $id->image)[0];
            return array_map('unlink', glob(FCPATH . "upload/$filename.*"));
        }
    }


    public function hapus($id)
    {
        $where = array('npm' => $id);
        $this->_deleteImage($id);
        $this->M_admin->delete_data('mahasiswa', $where);
        $this->M_admin->delete_data('login_mhs', $where);
        $this->session->set_flashdata("message_hapus", '<div class="alert alert-succes" role="alert">Data berhasil dihapus</div>');
        redirect("admin/datamhs");
    }
}
