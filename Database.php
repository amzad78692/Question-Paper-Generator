<?php 
    $connect = mysqli_connect("localhost", "root", "");

    // Creating Database.
    $query = "create database questionpaper";
    $connect->query($query);

    // Selecting Database.
    $connect->select_db("questionpaper");
    
    // Creating Admin Credentials.
    try {
        //code...
        $query = "select * from admin";
        $result = $connect->query($query);
    } 
    finally
    {
        $query = "create table admin (
            username varchar(20),
            password varchar(20)
        )";
        $connect->query($query);
        $query = "select username, password from admin";
        $result = $connect->query($query);
        if($result->num_rows == 0)
        {
            $query = "insert into admin (username, password) values ('amzad786', 'Amzad@123')";
            $connect->query($query);
        }
        
    }

    // Creating examdept table
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

    // Creating registerfaculty table
    $query = "create table registerfaculty (
        cname varchar(50),
        dname varchar(50),
        fname varchar(50),
        sname varchar(50),
        scode varchar(10), 
        email varchar(30),
        mobile varchar(10),
        username varchar(20),
        password varchar(20)
    )";
    $connect->query($query);
    
    // Creating question table
    $query = "create table question (
        question varchar(500),
        marks int,
        level varchar(10),
        sname varchar(50),
        scode varchar(10), 
        sem varchar(5),
        year varchar(5)
    )";
    $connect->query($query);

    // Creating course table
    $query = "create table course(
        id int NOT NULL AUTO_INCREMENT,
        name varchar(50),
        cname varchar(50),
        duration int,
        PRIMARY KEY (id)
    )";
    $connect->query($query);

    // Creating coursedept table
    $query = "create table coursedept(
        id int NOT NULL AUTO_INCREMENT,
        name varchar(50),
        cname varchar(50),
        college varchar(50),
        PRIMARY KEY (id)
    )";
    $connect->query($query);
    
    // Creating paper table
    $query = "create table paper(
        sname varchar(50),
        scode varchar(10),
        course varchar(50),
        cname varchar(50),
        year int,
        sem int
    )";
    $connect->query($query);

    // Closing the connection
    $connect->close();
?>