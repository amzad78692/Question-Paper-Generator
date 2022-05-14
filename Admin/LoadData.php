<?php
    $connect = mysqli_connect("localhost", "root", "");
    $connect->select_db("questionpaper");

    if(isset($_GET["ccode"])){
        $ccode = $_GET["ccode"];
        $query = "SELECT cname FROM examdept WHERE ccode = $ccode";
        $result = $connect->query($query) or die($connect->error);

        $row = $result->fetch_assoc();
        $cname = $row["cname"];

        $query = "SELECT id, name FROM course WHERE cname = '$cname'";
        $result = $connect->query($query) or die($connect->error);
        
        $str =  '<option value="select" selected>Select</option>';
        while ($row = $result->fetch_assoc())
        {
            $str .= "<option value=".$row['id'].">".$row['name']."</option>";
        }
        echo $str;
    }
    if(isset($_GET["cid"])){
        $id = $_GET["cid"];
        $query = "SELECT name FROM course WHERE id = $id";
        $result = $connect->query($query) or die($connect->error);

        $row = $result->fetch_assoc();
        $course_name = $row["name"];

        $query = "SELECT id, name FROM coursedept WHERE cname = '$course_name'";
        $result = $connect->query($query) or die($connect->error);
        
        $str =  '<option value="select" selected>Select</option>';
        while ($row = $result->fetch_assoc())
        {
            $str .= "<option value=".$row['id'].">".$row['name']."</option>";
        }
        echo $str;
    }
    if(isset($_GET["sid"])){
        $id = $_GET["sid"];
        $query = "SELECT duration FROM course WHERE id = $id";
        $result = $connect->query($query) or die($connect->error);
        $row = $result->fetch_assoc();
        $duration = $row['duration'];

        $str =  '<option value="select" selected>Select</option>';
        for ($i=1; $i <= $duration*2; $i++) { 
            $str .= "<option value=".$i.">".$i."</option>";
        }
        echo $str;
    }
    if(isset($_GET["sem"])){
        $sem = $_GET["sem"];
        $query = "SELECT id, sname FROM registerfaculty WHERE sem = $sem";
        $result = $connect->query($query) or die($connect->error);
        
        $str =  '<option value="select" selected>Select</option>';
        while ($row = $result->fetch_assoc())
        {
            $str .= "<option value=".$row['id'].">".$row['sname']."</option>";
        }
        echo $str;
    }
    
?>