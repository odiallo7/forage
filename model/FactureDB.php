<?php 

/**
 * 
 */
class FactureDB extends model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function payerFacture($idFacture)
	{
		$sql = "UPDATE facture SET datePaiement = NOW()
				 WHERE idFacture = $idFacture";
		if($this->db != null) {
			return $this->db->exec($sql);
		} else {
			return null;
		}
	}
}

 ?>