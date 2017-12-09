<?php
    session_start();
    include 'connect.php';

    $email = $_POST['email3'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'"; 
    $result = mysqli_query($conn, $sql);    
    if (!$row = mysqli_fetch_assoc($result)) {
        echo "<script>alert('Nepareizs e-pasts vai parole!');window.location.href='index.php';
</script>";
    } else {
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        header("Location: loggedin.php");
    }  
    
    ?>