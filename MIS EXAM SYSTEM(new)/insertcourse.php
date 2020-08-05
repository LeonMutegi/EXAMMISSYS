<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'exam_mis');

    if(isset($_POST['insertdata'])){
        $Cname = $_POST['Cname'];
        $Lid = $_POST['Lid'];
        $CDate = $_POST['CDate'];
        $CTime = $_POST['CTime'];

        $query = "INSERT INTO course (`CName`,`LID`,`CDate`,`CTime`) VALUES ('$Cname','$Lid','$CDate','$CTime') ";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
            header('Location:courselist.php');
        }
        else
        {
            echo '<script> alert("Data not Saved"); </script>';
        }
    }

?>