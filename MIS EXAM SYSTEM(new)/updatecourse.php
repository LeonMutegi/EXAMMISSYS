<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'exam_mis');

    if(isset($_POST['updatedata'])){
        $id = $_POST['update_id'];
        $Cname = $_POST['Cname'];
        $Lid = $_POST['Lid'];
        $CDate = $_POST['CDate'];
        $CTime = $_POST['CTime'];
        
        
      
        $query = "UPDATE course SET CName='$Cname',LID='$Lid',CDate='$CDate',CTime='$CTime' WHERE CID='$id'";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:courselist.php');
        }
        else
        {
            echo '<script> alert("Data not Updated"); </script>';
        }
    }

?>