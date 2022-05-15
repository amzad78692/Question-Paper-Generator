<?php

    $connect = mysqli_connect("localhost", "root", "");
    $connect->select_db("questionpaper");
    if(isset($_GET['scode'])){
        $scode = $_GET['scode'];

        echo "<option value=".$scode." selected>".$scode."</option>";
    }

    if(isset($_GET["delete"])){
        $question = $_GET["delete"];
        $query = "DELETE FROM question WHERE question = '".$question."'";
        $connect->query($query) or die($connect->error);
        $connect->close();
        header("Location:ViewAllQues.php");
    }
    
?>