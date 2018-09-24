<?php 


/**
 * 
 */
class Compteur extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		return $this->view->load("compteur/index");
	}

	public function add()
	{
		return $this->view->load("compteur/add");
	}
}


 ?>