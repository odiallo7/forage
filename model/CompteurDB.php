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

	public function addCompteur($idCompteur, $compteur,	$etatCompteur, $idClient)
	{
		$sql = "INSERT INTO compteur VALUES($idCompteur, $compteur,	$etatCompteur, $idClient)";
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

	public function saveConsommation($idCompteur, $compteur)
	{
		$sql = "UPDATE compteur SET compteur = compteur + $compteur
				WHERE idCompteur = $idCompteur";
		if($this->db != null)
			{
				return $this->db->exec($sql);
		}else
		{
			return null;
		}
	}
}

 ?>