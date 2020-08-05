<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'exam_mis');

    if(isset($_POST['updatedata'])){
        $id = $_POST['update_id'];
        $Sname = $_POST['Sname'];
        $SEmail = $_POST['SEmail'];
        $SPassword = $_POST['SPassword'];
        $SNumber = $_POST['SNumber'];
        $CID = $_POST['CID'];
        
        
      
        $query = "UPDATE students_view SET SName='$Sname',SEmail='$SEmail',SPass='$SPassword',SNumber='$SNumber' WHERE SID='$id'";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:studentlist.php');
        }
        else
        {
            echo '<script> alert("Data not Updated"); </script>';
        }
    }

?>