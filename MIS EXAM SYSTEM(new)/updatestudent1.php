<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'exam_mis');

    if(isset($_POST['updatedata'])){
        $id = $_POST['update_id'];
        $Sname = $_POST['Sname'];
        $SNumber = $_POST['SNumber'];
        $CID = $_POST['CID'];
        $SAttendance = $_POST['SAttendance'];
        $SGrade = $_POST['SGrade'];
        $SAverage = $_POST['SAverage'];
        
      
        $query = "UPDATE students_view1 SET SName='$Sname',SNumber='$SNumber',CID='$CID',Attendance='$SAttendance',Grade='$SGrade',Average='$SAverage' WHERE SID='$id'";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:tables.php');
        }
        else
        {
            echo '<script> alert("Data not Updated"); </script>';
        }
    }

?>