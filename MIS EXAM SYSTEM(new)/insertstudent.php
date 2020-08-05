<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'exam_mis');

    if(isset($_POST['insertdata'])){
        $Sname = $_POST['Sname'];
        $SEmail = $_POST['SEmail'];
        $SPassword = $_POST['SPassword'];
        $SNumber = $_POST['SNumber'];
        $CID = $_POST['CID'];

        $query = "INSERT INTO students_view (`SName`,`SEmail`,`SPass`,`SNumber`,`CID`) VALUES ('$Sname','$SEmail','$SPassword','$SNumber','$CID') ";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
            header('Location:studentlist.php');
        }
        else
        {
            echo '<script> alert("Data not Saved"); </script>';
        }
    }

?>