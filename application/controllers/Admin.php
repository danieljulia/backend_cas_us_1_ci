<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	

	public function items()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('item');
		
			$crud
				 ->display_as('category_id','Categoria')
				 ->display_as('tag_id','Etiqueta');

			$crud->set_relation('category_id','category','name');
			$crud->set_relation('tag_id','tag','name');

			$crud->set_field_upload('photo','assets/uploads/files');

			$output = $crud->render();

			$this->_example_output($output);
	}
	public function tag()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('tag');
	
			
			$output = $crud->render();

			$this->_example_output($output);
	}
		public function category()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('category');

			$output = $crud->render();

			$this->_example_output($output);
	}



}