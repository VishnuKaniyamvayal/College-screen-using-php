<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brochure extends CI_Controller {

	public function index()	
	{
		$pdf['pdf'] = $_GET['name'];
		$this->load->view('downloadform');
	}
	
	public function upload()	
	{
		
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$pdf = $this->input->post('pdf');
		$this->db->insert('download', array('name' => $name, 'email' => $email, 'mobile' => $mobile));

		$file = base_url('assets/pdf/'.$pdf);

		header("Content-Description: File Transfer");
		header("Content-Type: application/octet-stream");
		header("Content-Disposition: attachment; filename=\"" . basename($file) . "\"");

		readfile ($file);
		header("Location: " . base_url());

		
	}
}
