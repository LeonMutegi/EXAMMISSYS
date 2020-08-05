<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'exam_mis');

    if(isset($_POST['insertdata'])){
        $Sname = $_POST['Sname'];
        $SNumber = $_POST['SNumber'];
        $CID = $_POST['CID'];
        $SAttendance = $_POST['SAttendance'];
        $SGrade = $_POST['SGrade'];
        $SAverage = $_POST['SAverage'];

        $query = "INSERT INTO students_view1 (`SName`,`SNumber`,`CID`,`Attendance`,`Grade`,`Average`) VALUES ('$Sname','$SNumber','$CID', $SAttendance, $SGrade, $SAverage) ";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
            header('Location:tables.php');
        }
        else
        {
            echo '<script> alert("Data not Saved"); </script>';
        }
    }

?>