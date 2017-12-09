<?php
    session_start();
    include 'connect.php';

    if(isset($_GET['id'], $_GET['name'], $_GET['url'])){
                $u_id = $_SESSION['id'];
                $m_id = $_GET['id'];
                $name = $_GET['name'];
                $url = $_GET['url'];
                $sql = "INSERT INTO favorites (user_id, music_id, name, url) VALUES ('$u_id', '$m_id', '$name', '$url')"; 
                $result = mysqli_query($conn, $sql);
                
                header("Location: user-favorite.php");
    }

?>
