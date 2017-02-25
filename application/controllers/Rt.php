<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rt extends CI_Controller {
	
	public function index()
	{
		$this->load->view('Rt/header');
		$this->load->view('Rt/menu');
		$this->load->view('Rt/main');
		$this->load->view('Rt/footer');
	}
	
	
	public function bitacorafertilizar()
	{
		$this->load->view('Rt/header');
		$this->load->view('Rt/menu');
		$this->load->view('Rt/fertilizar');
		$this->load->view('Rt/footer');
	}
	
}