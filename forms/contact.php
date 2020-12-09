<?php
 
?>
<script>
 if(confirm('are u sure !')){
     
 }
</script>

<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $to = "contact@phone-flore.fr";
           
    $subject = $_POST['subject'];
    $message = "Bonjour Phone-Flore \n Le client ".$_POST['name']." , il vous envoye ce message \n ( ".$_POST['message']." ). \n\n Voici le mail de votre client ".$_POST['email']." \n cdt.";
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo "L'email a été envoyé.";

?>
