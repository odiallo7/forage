<?php 

/**
 * 
 */
class ConsommationDB extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getConsoId()
	{
		$sql = "SELECT idConsom, idCompteur FROM consommation;";
		if ($this->db != null) {
			return $this->db->query($sql)->fetchAll();
		}else{
			return null;
		}
	}

	public function generateFacture($idConsom, $idCompteur)
	{
		$sql = "INSERT INTO facture VALUES(null, NOW(), DATE_ADD(NOW(), INTERVAL 15 DAY), (SELECT conso FROM compteur WHERE idCompteur = $idCompteur), (SELECT 15 * (SELECT conso FROM compteur WHERE idCompteur = $idCompteur)), null, (SELECT idConsom FROM consommation WHERE idCompteur = $idCompteur))";
		
		if ($this->db != null) {
			$this->db->exec($sql);
			return $this->db->lastInsertId();
		} else {
			return null;
		}
		
	}
}

 ?>