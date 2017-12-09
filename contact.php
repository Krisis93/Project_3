<?php
    session_start();
    include 'connect.php';
    
    $from = "soundelicious1@gmail.com";
    $to = "soundelicious1@gmail.com";
    $name = $_SESSION['username'];
    $email = $_SESSION['email'];
    $subject = Trim(stripcslashes($_POST['subject']));
    $message = Trim(stripcslashes($_POST['message']));

    $body = "";
    $body .= "Vārds: ";
    $body .= $name;
    $body .= "\n";
    $body .= "E-pasts: ";
    $body .= $email;
    $body .= "\n";
    $body .= "Tēma: ";
    $body .= $subject;
    $body .= "\n";
    $body .= "Vēstule: ";
    $body .= $message;

    $go = mail($to, $subject, $body);

    if($go){
        echo "<script>alert('Ziņa tika nosūtīta!');window.location.href='loggedin.php';
</script>";
    }else{
        echo "<script>alert('Neizdevās nosūtīt ziņu!');window.location.href='loggedin.php';
</script>";
    }


?>