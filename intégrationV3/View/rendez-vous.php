
<?php
include_once '../Model/rdv.php';
include_once '../Controller/rdvC.php';
include_once '../Controller/medecinC.php';
include_once '../Controller/patientC.php';
require_once '../PHP/class.phpmailer.php';
require_once '../PHP/PHPMailerAutoload.php';
session_start();



$rdv = null;
$medecinC = new medecinC();
$rdvC = new rdvC();
$patientC = new patientC();
if(empty($_POST['etat']))
{
    header("Location:liste_RDV.php?error=etatmanquant");
}

if (isset($_POST['submit-rdv'])) {
    
    
            $listem = $medecinC->afficherM($_POST['medecin']);
            $listep = $patientC->afficherP($_SESSION['unserId']);
           
                 
           
            foreach ($listem as $rowm) {
                foreach ($listep as $rowp) {

			$mail = new PHPMailer;

			                          

			$mail->isSMTP();                                     
			$mail->Host = 'smtp.gmail.com';  
			$mail->SMTPAuth = true;                              
			$mail->Username = 'youtaayouta40@gmail.com';                
			$mail->Password = 'rouhimamatinmoutalik40';                         
			$mail->SMTPSecure = 'tls';                           
			$mail->Port = 587;                                  

			$mail->setFrom('eya.benamor@esprit.tn', 'Admin');
			$mail->addAddress('youtaayouta40@gmail.com');  

			$mail->addReplyTo('admin@gmail.com');
			
			$mail->isHTML(true);                              

			$mail->Subject = 'Nouveau rendez-vous';
			$mail->Body    = '<div style="border:2px solid red;"> <h1>Bonjour Docteur  '.$rowm["prenom"].' '.$rowm["nom"].' 

            </h1>    
            <a>
            Vous avez un nouveau rendez-vous de la part de '.$rowp["prenom"].' '.$rowp["nom"].' ('.$rowp["email"].' )</a> 
            <br>
            Pour la date:  <b>'.$_POST['time'].' </b></div>';
			$mail->AltBody = 'll';

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}
        }
    }
$rdv = new rdv(
    $_POST['time'],$_POST['medecin'],$_SESSION['unserId'],$_POST['etat']
    
);
$rdvC->ajouterrdv($rdv);


header("Location:liste_RDV.php");

}
    ?>
    