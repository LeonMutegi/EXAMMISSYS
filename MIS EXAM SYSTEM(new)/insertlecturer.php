<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'exam_mis');

    if(isset($_POST['insertdata'])){
        $Lname = $_POST['Lname'];
        $LEmail = $_POST['LEmail'];
        $LPassword = $_POST['LPassword'];
        $LContact = $_POST['LContact'];

        $query = "INSERT INTO lecturer (`LName`,`LEmail`,`LPass`,`Contact`) VALUES ('$Lname','$LEmail','$LPassword','$LContact') ";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
            header('Location:lecturerlist.php');
        }
        else
        {
            echo '<script> alert("Data not Saved"); </script>';
        }
    }

?>