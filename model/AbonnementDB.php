<?php 

/**
 * 
 */
class AbonnementDB extends Model
{
	
	function __construct()
	{
		parent::__construct();

	}
	public function getAbonnement()
	{
		$sql = "SELECT * FROM abonnement";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
	}
}


 ?>