<?php 

/**
 * 
 */
class ClientDB extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function addClient($idClient, $nomClient, $prenomClient, $telephoneClient, $idVillage, $numero, $dateAb)
	{
	$sql = "INSERT INTO client VALUES($idClient, '$nomClient', '$prenomClient', $telephoneClient, $idVillage, $numero, $dateAb)";
			if($this->db != null)
			{
				//	$this->db->exec($sql);
				//return $this->db->lastInsertId();//Si la clé primaire est auto_increment
				return $this->db->exec($sql);	 //sinon return $this->db->exec($sql);	
									 
			}else{
				return null;
			}
	}
}

 ?>