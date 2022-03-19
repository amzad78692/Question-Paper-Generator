<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Facultyregister.css">
        <title>Register Faculty</title>
</head>

 <?php
    function Facultyregister (){
        if(isset($_POST['submit'])){
            $cname=$_POST ['cname'];
            $dname=$_POST ['dname'];
            $fname=$_POST ['fname'];
            $sname=$_POST ['sname'];
            $scode=$_POST ['scode'];
            $email=$_POST ['email'];
            $mobile=$_POST['mobile'];

            $username = $scode."@&".rand(500, 999);
            $password = uniqid();

            $connect = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($connect, 'questionpaper');
            if($connect->connect_error)
              echo('Connection faild :'.$connect->connect_error)

            $query = "insert into registerfaculty (cname,dname,fname,sname,scode, 
                      email, mobile, username, password)
                      values('".$cname."', '".$dname."', '".$fname."','".$sname."','".$scode."',
                      '".$email."', '".$mobile."', '".$username."', '".$password."')";

            mysqli_query($connect, $query);
            mysqli_close($connect);
            
            
        }
    } 
?> 
<body>
    <div class="container">
        <img src="./Images/Roman Forum.jpg" alt="background">
        <div class="facultyform">
            <h1 id="heading">Faculty Register</h1>
            <form action="post" id="form">
               <p id="first">College Name</p>
                   <input type="text" placeholder="College Name" name="cname" required>
                    
                <p id="second">Department Name</p>
                   <input type="text" placeholder="Department Name" name="dname" required>

                <p id="third">Faculty Name</p>
                   <input type="text" placeholder="Faculty Name" name="fname" required>
                    
                <p id="fourth">Subject Name</p>
                   <input type="text" placeholder="Subject Name" name="sname" required>
                    
                <p id="fifth">Subject Code</p>   
                   <input type="text" placeholder="Subjecr Code" name="scode" required>
                   
                <p id="sixth">Email</p>          
                   <input type="text" placeholder="Email" name="email" required>
                
                <p id="seventh">Mobile</p>   
                   <input type="number" placeholder="Mobile" name="mobile" required>
                <br><br>        
                   <input type="submit" value="Register" id="Button" name="Submit">
                   <?php 
                if(isset($_POST['submit']))
                    Facultyregister();
            ?>
            </form>
        </div>
    </div>                 
</body>
</html>