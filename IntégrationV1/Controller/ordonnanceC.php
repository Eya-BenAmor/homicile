<?php
 require_once('C:\wamp64\www\PHP\ici\eya\config.php');
 require_once('C:\wamp64\www\PHP\ici\eya\Model\ordonnance.php');
class ordonnanceC
{

	function ajouterordonnance($ordonnance)
	{
        
        $sql = "INSERT INTO `ordonnance` (idr, medicament1, nfj1, avap1, medicament2, nfj2, avap2, medicament3, nfj3, avap3, remarque) 
        VALUES (:idr, :medicament1, :nfj1, :avap1, :medicament2, :nfj2, :avap2, :medicament3, :nfj3, :avap3, :remarque) ";
   	$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				'idr'=> $ordonnance->getidr(),
                'medicament1' => $ordonnance->getmedicament1(),
                'nfj1' => $ordonnance->getnfj1(),
                'avap1' => $ordonnance->getavap1(),
				'medicament2' => $ordonnance->getmedicament2(),
                'nfj2' => $ordonnance->getnfj2(),
                'avap2' => $ordonnance->getavap2(),
                'medicament3' => $ordonnance->getmedicament3(),
                'nfj3' => $ordonnance->getnfj3(),
				
               
                'avap3' => $ordonnance->getavap3(),
				'remarque' => $ordonnance->getremarque()
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
}
function afficherordonnance($id)
	{
        $sql = "SELECT * FROM ordonnance WHERE idr='$id'";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
        
	}
		function supprimerordonnance($id)
		{
			$sql = "DELETE FROM `ordonnance` WHERE idr= '$id'";
			$db = config::getConnexion();
       
      
			try{
				$req=$db->query($sql);
		  
		}
			catch (Exception $e)
			{
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierordonnance($id,$med1,$n1,$av1,$med2,$n2,$av2,$med3,$n3,$av3,$remarque)
      {
          
          $sql="UPDATE `ordonnance` SET idr= '$id',
		   medicament1= '$med1' ,
		   nfj1= '$n1' , 
		   avap1= '$av1',
		   medicament1= '$med2' ,
		   nfj1= '$n2' , 
		   avap1= '$av2',
		   medicament1= '$med3' ,
		   nfj1= '$n3' , 
		   avap1= '$av3',
		   remarque= '$remarque'
		    WHERE idr ='$id'";
          $db = config::getConnexion();
         
          try
          {
              $db->query($sql);
          }
          catch (Exception $e)
          {
              die('Erreur: '.$e->getMessage());
          }
              
    }

}
?>