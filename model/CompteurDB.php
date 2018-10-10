<?php 

/**
 * 
 */
class CompteurDB extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function addCompteur($idCompteur, $etatCompteur, $idClient)
	{
		$sql = "INSERT INTO compteur VALUES($idCompteur, 0, 0, $etatCompteur, $idClient)";
		if ($this->db != null) {
			return $this->db->exec($sql);
		}
		else {
			return null;
		} 
	}

	public function getCompteur()
	{
		$sql = "SELECT * FROM compteur";
		if ($this->db != null) {
			return $this->db->query($sql)->fetchAll();
		} else {
			return null;
		}
		
	}

	public function saveConsommation($idCompteur, $indexCompteur)
	{
		$sql = "UPDATE compteur SET conso = $indexCompteur - indexCompteur,
                  	   indexCompteur = $indexCompteur
                WHERE idCompteur = $idCompteur";

        $sql2 = "INSERT INTO consommation VALUES(null, $idCompteur, (SELECT conso FROM compteur WHERE idCompteur = $idCompteur), 15, NOW())";        

		if($this->db != null)
			{
				if($this->db->exec($sql));
				{
					$this->db->exec($sql2);
					return $this->db->lastInsertId();
				}
		}else
		{
			return null;
		}
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