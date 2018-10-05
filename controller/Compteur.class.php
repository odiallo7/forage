<?php 


/**
 * 
 */
class Compteur extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		require_once 'model/CompteurDB.php';
	}

	public function index()
	{
		return $this->view->load("compteur/index");
	}

	public function add()
	{
		$tdb = new CompteurDB();
		if (isset($_POST['valider'])) {
			extract($_POST);
			if(!empty($idCompteur) && !empty($idClient)){
				$ok = $tdb->addCompteur($idCompteur, $compteur,	$etatCompteur, $idClient);
			}
		return $this->view->load("compteur/index");
		}else{
			return $this->view->load("compteur/add");
		} 
	}

	public function liste()
	{
		$tdb = new CompteurDB();
		$data['compteurs'] = $tdb->getCompteur();
		$this->view->load("compteur/liste", $data);
	}

	public function saveconso()
	{
		$tdb = new CompteurDB();
		// $ok = $tdb->saveConsommation(501, 20);
		// echo $ok;
		if (isset($_POST['valider'])) 
		{	
			extract($_POST);
			if(!empty($idCompteur) && !empty($compteur))
			{
				$ok = $tdb->saveConsommation($idCompteur, $compteur);
			}
			return $this->liste();
		} else {
			return $this->view->load("compteur/saveconso");
		}
		
	}
}

?>