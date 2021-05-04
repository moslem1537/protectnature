<?php

class config
{
    private static $instance = NULL;

    public static function getConnexion()
    {
        //self fonction/ variable static:self::$
        // public private ... $this->
        if (!isset(self::$instance)) {
            try {
                //Php Data Object:relation avec objet et bd
                self::$instance = new PDO('mysql:host=127.0.0.1;dbname=users',
                    'root', '123456');
                //pour afficher les erreurs
                self::$instance->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
        return self::$instance;
    }
}

class userc
{
    function recupereruser($id)
    {
        $sql = "SELECT * from users where id=$id";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }


    }
}

$user = new userc();
$liste = $user->recupereruser($_GET['id']);
foreach ($liste as $row) {


    $email = $row['email'];

}
$mailto = $email;
$mailSub = 'paiement';
$mailMsg = 'votre paiement a ete effectue avec suces';
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "";
$mail->Password = "";
$mail->SetFrom("");
$mail->Subject = $mailSub;
$mail->Body = $mailMsg;
$mail->AddAddress($mailto);

if (!$mail->Send()) {
    echo "Mail Not Sent";
} else {
    echo "Mail Sent";
}

?>
