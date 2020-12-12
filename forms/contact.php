<?php
 
?>
<script>
 if(confirm('Votre message a été bien envoyé!')){
     
 }
</script>

<?php

 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "contact@phone-flore.fr";
    $to =   "contact@phone-flore.fr";
    
    

    $subject = $_POST['subject'];
    $message = "Bonjour Phone-Flore \n Le client ".$_POST['name']." , il vous envoye ce message \n ( ".$_POST['message']." ). \n\n Voici le mail de votre client ".$_POST['email']." \n cdt.";
    
     $msg =  "<div style='border: 1pt solid green; padding: 10pt;'>
        <h3 style='color: green;'>Bonjour Phone&flore</h3>
        <hr>
        <h5> ".$_POST['name']." vous a contacté via phone-flore.fr .</h5>
        <h6 style='color: blue;'>".$_POST['name']." vous a envoyé le message suivant :</h6>
        <h3 style='color: red;'>Message :</h3>
        <p>".$_POST['message']."
        </p>
        <p>Pour répondre à ce message cliquer sur <a href='mailto:".$_POST['email']."' > ".$_POST['email']."
        </p>

    </div>";
    
    # données de l'entête : format du msg
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    # données de l'entête : expediteur et recepteur
    $headers .= 'From: <'.$from.'>' . "\r\n";
    $headers .= 'Cc: '.$to . "\r\n";
    
    mail( $to,$subject,$msg, $headers);
    echo "L'email a été envoyé.";

?>
