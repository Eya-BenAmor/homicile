<?PHP
  include "../config.php";
  class connectC
{

	function connect($email)
	{
        $sql = "SELECT * FROM patient WHERE email='$email'";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
        
        }
/*if (isset($_POST['login-submit'])) {
   

    $email = $_POST["email"];
    $psw = $_POST["password"];
    $G = $_POST["Genre"];

    if (empty($email) || empty($psw) || empty($G) ) {
        header("Location: ../connecter.php?error=emtyfields&email=".$email);
        exit();
    }
    else{
        if($G == "Patient"){
       
        }
        elseif ($G == "Médecin") {
            $sql = "SELECT * FROM medecin WHERE email=?;";
            $db = config::getConnexion();
        $liste = $db->query($sql);
        foreach ($liste as $row) {

                    if ($psw !== $row['mdpM']) {//if the password is wrong
                        header("Location: ../connecter.php?error=wrongpassword");
                        exit();
                    }elseif($psw == $row['mdpM']){
                        session_start();
                        $_SESSION['DId'] = $row['id'];
                        $_SESSION['DLastname'] = $row['nom'];
                        $_SESSION['DFirstname'] = $row['prenom'];
                        $_SESSION['DEmail'] = $row['email'];
                        $_SESSION['Dspecialite'] = $row['specialite'];
                        $_SESSION['Dtel'] = $row['tel'];

                        header("Location: ../ajouter_ordonnance.php?login=success");
                        exit();

                    }else{//if the password is wrong
                        header("Location: ../connecter.php?error=wrongpassword2");
                        exit();
                    }
                }
        }
    }
    
    
}else {
    header("Location: ../connecter.php");
    exit();*/
}
?>