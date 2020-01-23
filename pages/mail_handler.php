<?php
include 'header.html';
if(isset($_POST['submit'])){
    $to = "info@kronos.lt"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['fname'];
    $phoneNr = $_POST['phone'];
    $subject = "Kronos puslapio žinutė";
    $message = $first_name . " atsiuntė žinutę:" . "\n\n" . $_POST['message'] . " Telefono numeris susisiekimui " . $phoneNr;

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
}
    echo "<h1>El. laiškas išsiųstas, netrukus su Jumis susisieksime.</h1>";
include 'footer.html';
?>
