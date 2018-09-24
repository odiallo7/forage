<?php 

/**
 * 
 */
class VillageDB extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function addVillage($idVillage, $nomVillage, $nomChef, $prenomChef, $telephoneChef)
	{
		$sql = "INSERT INTO village VALUES($idVillage, '$nomVillage', '$nomChef', '$prenomChef', $telephoneChef)";
			if($this->db != null)
			{
			//	$this->db->exec($sql);
				//return $this->db->lastInsertId();//Si la clé primaire est auto_increment
				return $this->db->exec($sql);	 //sinon return $this->db->exec($sql);	
									 
			}else{
				return null;
			}
	}

	public function getVillage($id)
	{
		 $sql = "SELECT *
                     FROM village
                     WHERE village.idVillage = ".$id;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
	}

	public function updateVillage($idVillage, $nomVillage, $nomChef, $prenomChef, $telephoneChef)
	{
		$sql = "UPDATE village SET nomVillage = '$nomVillage',
						nomChef = '$nomChef',
						prenomChef = '$prenomChef',
						telephoneChef = '$telephoneChef'
						WHERE  idVillage = $idVillage";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
	}

	public function deleteVillage($id)
	{
		$sql = "DELETE FROM village WHERE idVillage = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
	}

	public function getListe()
	{
		$sql = "SELECT * FROM village";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
	}
}

 ?>