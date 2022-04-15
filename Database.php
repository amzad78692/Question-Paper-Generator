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

    try {
        //code...
        $query = "select * from registerfaculty";
        $result = $connect->query($query);
    } 
    finally
    {
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
    }
    try {
        //code...
        $query = "select * from question";
        $result = $connect->query($query);
    } 
    finally
    {
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
    }
    $connect->close();
?>