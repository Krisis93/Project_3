<?php
    session_start();
    include 'connect.php';

    if(isset($_GET['id'])){
                $u_id = $_SESSION['id'];
                $m_id = $_GET['id'];
                $sql = "DELETE FROM music WHERE (cat, id) = ('$u_id', '$m_id')"; 
                $result = mysqli_query($conn, $sql);
                header("Location: upload-song.php");
    }

?>


