<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'exam_mis');

    if(isset($_POST['deletedata'])){
        $id = $_POST['delete_id'];

        $query = "DELETE FROM admin  WHERE AID='$id'";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header('Location:adminlist.php');
        }
        else
        {
            echo '<script> alert("Data not Deleted"); </script>';
        }
    }

?>