<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'exam_mis');

    if(isset($_POST['updatedata'])){
        $id = $_POST['update_id'];
        $Aname = $_POST['Aname'];
        $AEmail = $_POST['AEmail'];
        $APassword = $_POST['APassword'];
        
        
      
        $query = "UPDATE admin SET AName='$Aname',APass='$APassword',AEmail='$AEmail' WHERE AID='$id'";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:admin.php');
        }
        else
        {
            echo '<script> alert("Data not Updated"); </script>';
        }
    }

?>