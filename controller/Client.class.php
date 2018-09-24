<?php 

/**
 * 
 */
class Client extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		require_once 'model/VillageDB.php';
		require_once 'model/AbonnementDB.php';
		require_once 'model/ClientDB.php';
	}

	public function index()
	{
		return $this->view->load("client/index");
	}

	public function add()
	{	
		
	
		$tdb = new VillageDB();
		$tdb2 = new AbonnementDB();
		if (!isset($_POST['valider'])) {
			$data['villages'] = $tdb->getListe();
			$data['abonnements'] = $tdb2->getAbonnement();
			return $this->view->load("client/add", $data);

		} else {
			$tdb3 = new ClientDB();
			extract($_POST);
			$data['ok'] = 0;
			if (!empty($idClient)) {
				$ok = $tdb3->addClient($idClient, $nomClient, $prenomClient, $telephoneClient, $idVillage, $numero, $dateAb);
				$data['ok'] = $ok;
				return $this->view->load("client/index");
			} else {
				return $this->view->load("client/add");
			}
				
		}

	}
}

 ?>