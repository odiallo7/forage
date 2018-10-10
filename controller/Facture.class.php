<?php 

/**
 * 
 */
class Facture extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		require 'model/FactureDB.php';
	}


	public function index()
	{
		return $this->view->load("facture/index");
	}

	public function payer()
	{
		$tdb = new FactureDB();
		if (isset($_POST['valider'])) 
		{			
			extract($_POST);
			$data['ok'] = 0;
			if (!empty($idFacture)) {
				$ok = $tdb->payerFacture($idFacture);
				$data['ok'] = $ok;
			}
			return $this->view->load("facture/caisse", $data);

		} else {
			return $this->view->load("facture/caisse");
		}
		
	}
}

 ?>