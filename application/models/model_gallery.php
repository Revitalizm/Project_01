<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Model_gallery extends CI_Model{

	public function getCategories(){

		$query = $this->db->query("SELECT * FROM categories");
		$li = '';

			if($query->num_rows()){

				foreach ($query->result() as $row)
				{
				    $li .='<li> <a href="#">'.$row->name.'</a> </li>';
				}
			}

		return $li;	

	}
}
