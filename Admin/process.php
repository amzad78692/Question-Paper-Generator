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
    if(isset($_GET['deletecourse']))
    {
        $connect = mysqli_connect("localhost", "root", "");
        $connect->select_db("questionpaper");
        $course = $_GET["deletecourse"];
        $query = "DELETE FROM course WHERE name = '$course'";
        $result = $connect->query($query);
        $connect->close();
        header("Location:ViewAllCourse.php");
    }
    if(isset($_GET['viewpaper']))
    {
        $scode = $_GET["viewpaper"];
        $file = "$scode.pdf";
        header("Location:../Papers/$file");
    }
    if(isset($_GET['deletepaper']))
    {
        $scode = $_GET["deletepaper"];

        $file = "../Papers/$scode.pdf";
        if(unlink($file)){
            $connect = mysqli_connect("localhost", "root", "");
            $connect->select_db("questionpaper");
            $query = "DELETE FROM paper WHERE scode = '$scode'";
            $connect->query($query);
            $connect->close();
            header("Location:ViewAllPaper.php");
        }
    }

?>