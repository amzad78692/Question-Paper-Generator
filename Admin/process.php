<?php
    

    if(isset($_GET["delete"])){
        $connect = mysqli_connect("localhost", "root", "");
        $connect->select_db("questionpaper");
        $ccode = $_GET["delete"];
        $query = "DELETE FROM examdept WHERE ccode = " . $ccode;
        $connect->query($query);
        $connect->close();
        header("Location:ViewAllDept.php");
    }
    if(isset($_GET['deletefaculty']))
    {
        $connect = mysqli_connect("localhost", "root", "");
        $connect->select_db("questionpaper");
        $fname = $_GET["deletefaculty"];
        $query = "DELETE FROM registerfaculty WHERE fname = '$fname'";
        $result = $connect->query($query);
        $connect->close();
        header("Location:ViewAllFaculty.php");
    }


?>