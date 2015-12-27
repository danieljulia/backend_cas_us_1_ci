<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rest extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	

	public function index()
	{
		print "silence is poetry";
	}

	public function items(){

			$query = $this->db->query("SELECT * FROM item");
			header('Content-Type: application/json');
			print json_encode($query->result_array());

	}

	public function category(){

			$query = $this->db->query("SELECT * FROM tag");
			header('Content-Type: application/json');
			print json_encode($query->result_array());

	}

	public function tag(){

			$query = $this->db->query("SELECT * FROM category");
			header('Content-Type: application/json');
			print json_encode($query->result_array());

	}


	




}