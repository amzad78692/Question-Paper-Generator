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
            <a href="#" id="Edlogin">Examination Department Login</a>
            <a href="#" id="Flogin">Faculty Login</a>
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
    $check = $connect->select_db("questionpaper");

    if(empty($check))
    {
        $query = "create database questionpaper";
        $connect->query($query);
    }
    
    $query = "select * from examdept";
    $check = $connect->query($query);
    if(!$check)
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
    }
    $connect->close();
?>