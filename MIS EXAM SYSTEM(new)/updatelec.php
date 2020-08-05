<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'exam_mis');

    if(isset($_POST['updatedata'])){
        $id = $_POST['update_id'];
        $Lname = $_POST['Lname'];
        $LEmail = $_POST['LEmail'];
        $LPassword = $_POST['LPassword'];
        $LContact = $_POST['LContact'];

        $query = "UPDATE lecturer SET LName='$Lname',LEmail='$LEmail',LPass='$LPassword',Contact='$LContact' WHERE LID='$id'";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:lecturer.php');
        }
        else
        {
            echo '<script> alert("Data not Updated"); </script>';
        }
    }

?>