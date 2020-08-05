<?php
    $conn = mysqli_connect("localhost", "root", "", "exam_mis");

    if ($conn){
        echo "Connection Successful";
    }
    else {
        echo "Connection is not successful";
    }
?>