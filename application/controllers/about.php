<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


	public function index()
	{
		$data['title'] = 'About Page';
		$data['page'] = 'about';
		$this->load->view('templates/main', $data);	
	}

		public function moreAbout() {

		$data['title'] = 'More about us...';
		$data['page'] = 'moreAbout';
		$this->load->view('templates/main', $data);	

		}
}
