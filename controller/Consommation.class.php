<?php 


/**
 * 
 */
class Consommation extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		require 'model/ConsommationDB.php';
	}

	public function index()
	{
		return $this->view->load("consommation/index");
	}

	public function facture()
	{
		$tdb = new ConsommationDB();
		$tdb1 = new ConsommationDB();
		$datas = $tdb->getConsoId();
		// print_r($datas);
		// echo "<br />";
		// echo "<br />";
		// foreach ($datas as $data) {
		//     echo $data['idConsom'];
		//     echo "<==>";
		//     echo $data['idCompteur'];
		//     echo "<br />";
		//}
		$data2['ok'] = 0;
		$ok = 0;
		foreach ($datas as $data) {
			$i1 = $data['idConsom'];
			$i2	= $data['idCompteur'];
			$ok = $tdb1->generateFacture($i1, $i2);
		}
		
		$data2['ok'] = $ok;
		return $this->view->load("compteur/index", $data2);

	}
}

 ?>