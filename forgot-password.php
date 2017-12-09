<?php
    include 'connect.php';

    
    $from = "soundelicious1@gmail.com";
    $putemail = $_POST['email2'];

    $result = mysqli_query($conn, "SELECT * FROM users"); 
    
    while($row = mysqli_fetch_assoc($result)){
        $dbemail = $row['email'];
        $pw = $row['password'];
        
        if($putemail == $dbemail){
            $body = "";
            $body .= "Tava parole ir : ";
            $body .= $pw;
            
            $send = mail($putemail, $from, $body);
        }else{
            header("Location: index.php");
        }
                         
    }
?>