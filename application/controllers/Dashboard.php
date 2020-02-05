<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$title['title'] = 'Siti Muayanah';
		$this->load->view('modul/head', $title);
		$this->load->view('materialize/style');
		$this->load->view('dashboard');
		$this->load->view("materialize/script");
	}

	
}
