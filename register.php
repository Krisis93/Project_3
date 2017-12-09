<?php
    session_start();
    include 'connect.php';

       
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='".$email."'"); 
    
    if(mysqli_num_rows($query) > 0) 
    { 
        echo "<script>alert('There email already exists!');window.location.href='index.php';
</script>"; 
    }else{
        $sql = "INSERT INTO users (email, username, password, password2)
             VALUES('$email', '$username', '$password', '$password2')"; 
             $result = mysqli_query($conn, $sql);    
        
             header("Location: index.php");
    }
    
    
    ?>