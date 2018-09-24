<?php 
	
	/**
	 * 
	 */
	class Village extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			require_once 'model/VillageDB.php';
		}

		public function index()
		{
			return $this->view->load("village/index");
		}


		public function add()
		{
			$tdb = new VillageDb();
			//$ok = $tdb->addVillage(3, 'Ndiaffat','Ousmane', 'Diallo', 778002211);
		//echo $ok;
			 if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($idVillage) && !empty($nomVillage)) {
                    $ok = $tdb->addVillage($idVillage, $nomVillage, $nomChef, $prenomChef, $telephoneChef);
                    $data['ok'] = $ok;
                    //return $this->view->load("village/liste");
                    return $this->liste();
             }
            }else{
                return $this->view->load("village/add");
            }
		}

		public function edit($id)
		{
			$tdb = new VillageDB();

			$data['village'] = $tdb->getVillage($id);

			return $this->view->load("village/edit", $data);
		}

		public function update()
		{
			 $tdb = new VillageDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($idVillage) && !empty($nomVillage) && !empty($nomChef) && !empty($prenomChef) && !empty($telephoneChef)) {
                    $ok = $tdb->updateVillage($idVillage, $nomVillage, $nomChef, $prenomChef, $telephoneChef);
                }
            }
            return $this->liste();
		}

		public function delete($id)
		{
			 //Instanciation du model
            $tdb = new VillageDB();
			//Supression
			$tdb->deleteVillage($id);
			//Retour vers la liste
            return $this->liste();
		}


		public function liste()
		{
			$tdb = new VillageDB();
			$data['villages'] = $tdb->getListe();
			return $this->view->load("village/liste", $data);
		}
	}

 ?>