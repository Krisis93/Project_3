<?php

       $conn = mysqli_connect("localhost", "root", "", "soundelicious");

       if(!$conn){
        die("Connection Failed: ".mysqli_connect_error());
       }

?>