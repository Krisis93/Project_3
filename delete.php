<?php
    session_start();
    include 'connect.php';

    if(isset($_GET['id'])){
                $u_id = $_SESSION['id'];
                $m_id = $_GET['id'];
                $sql = "DELETE FROM favorites WHERE (user_id, music_id) = ('$u_id', '$m_id')"; 
                $result = mysqli_query($conn, $sql);
                header("Location: user-favorite.php");
    }

?>


