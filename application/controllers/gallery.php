<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {


	public function index()
	{
		$this->load->model('model_gallery');
		$data['title'] = 'Gallery Page';
		$date['li'] = $this->model_gallery->getCategories();
		$data['page'] = 'gallery';
		$this->load->view('templates/main', $data);
	}
}
