<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MainPage.css">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <title>Question Paper Generator</title>
</head>
<body>
    <div class="Heading">
        <div id="Logo">
            <img src="./Images/logo.png" alt="Subharti">
        </div>
        <h1>Subharti Institute of Technology &
             Engineering</h1>
        <p id="Est">Established...2008 </p>
        <div id="Naac-logo">
            <img src="./Images/logo2.png" alt="NAAC-A">

        </div>
        <div id="MainMenu">
            <a href="AdminLogin.php" id="Alogin">Admin Login</a>
            <a href="iddept.php" id="Edlogin">Examination Department Login</a>
            <a href="FacultyLogin.php" id="Flogin">Faculty Login</a>
            <a href="About.php" id="About">About</a>
        </div>
    </div>
    <div class="Content">
        <img src="./Images/img1.png" alt="Image">
    </div>
</body>
</html>

<?php 
    $connect = mysqli_connect("localhost", "root", "");
    $result;
    try {
        //code...
        $result=$connect->select_db("questionpaper");
         //echo $connect->error;
    }
    finally
    {
        $query = "create database questionpaper";
        $result=$connect->query($query);
        $connect->select_db("questionpaper");
    }
    
    try {
        //code...
        $query = "select * from examdept";
        $result = $connect->query($query);
    } 
    finally
    {
        $query = "create table examdept (
            ccode int,
            cname varchar(50),
            hname varchar(50),
            email varchar(50),
            mobile varchar(10),
            username varchar(20),
            password varchar(20)
        )";
        $connect->query($query);
    }
    $connect->close();
?>