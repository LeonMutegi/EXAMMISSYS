<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'exam_mis');

    if(isset($_POST['insertdata'])){
        $Aname = $_POST['Aname'];
        $AEmail = $_POST['AEmail'];
        $APassword = $_POST['APassword'];

        $query = "INSERT INTO admin (`AName`,`APass`,`AEmail`) VALUES ('$Aname','$APassword','$AEmail') ";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
            header('Location:adminlist.php');
        }
        else
        {
            echo '<script> alert("Data not Saved"); </script>';
        }
    }

?>