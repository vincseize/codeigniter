<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
	function __construct()
	{
	        parent::__construct();
	 
	/* Standard Libraries of codeigniter are required */
	$this->load->database();
	$this->load->helper('url');
	/* ------------------ */ 
	 
	$this->load->library('grocery_CRUD');
	 
	}
	 
	public function index()
	{
	echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
	die();
	}
	 
	public function employees()
	{
		$crud = new grocery_CRUD();
		$table_crud = 'employees';
		// $crud->set_theme('flexigrid');
		// $crud->set_theme('bootstrap');
		$crud->set_table($table_crud);
		$output = $crud->render($table_crud);
		 
		$this->_view_output($output);       
	}

	public function articles()
	{
		$crud = new grocery_CRUD();
		$table_crud = 'articles';
		// $crud->set_theme('flexigrid');
		// $crud->set_theme('bootstrap');
		$crud->set_table($table_crud);
		$output = $crud->render($table_crud);
		 
		$this->_view_output($output);        
	}

	 
	function _view_output($output = null)
	{
		$this->load->view('main.php',$output);    
	}
}
 
/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
 