<?php



if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];


    $mailTo = "name@email.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$mailFrom.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsent");
}

?>
  
