<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Blog extends CI_Controller {
 
	function __construct()
	{
	        parent::__construct();
	 
	/* Standard Libraries of codeigniter are required */
	$this->load->database();
	$this->load->helper('url');
	/* ------------------ */ 
	 
	$this->load->library('Blog_dbController');
	$c = new Blog_dbController();
	$conn = $c->connectDB();
	$this->_view_output($conn);

	}
	 
	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	function _view_output($output = null)
	{
		$this->load->view('blog.php',$output);    
	}

}