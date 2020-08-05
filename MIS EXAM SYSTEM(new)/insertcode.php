<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'multiuser_login');

    if(isset($_POST['insertdata'])){
        $Cname = $_POST['Cname'];
        $Sname = $_POST['Sname'];
        $semail = $_POST['semail'];
        $grade = $_POST['grade'];
        $Average = $_POST['Average'];
        $Attendance = $_POST['Attendance'];

        $query = "INSERT INTO net4030 (`CLASS`,`SName`,`Email`,`Grade`,`Average`,`Attendance`) VALUES ('$Cname','$Sname','$semail','$grade','$Average','$Attendance') ";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
            header('Location:index.php');
        }
        else
        {
            echo '<script> alert("Data not Saved"); </script>';
        }
    }

?>