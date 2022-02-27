<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Examination Department</title>
    <link rel="stylesheet" href="IdExamDept.css">
</head>

<?php 
    function register(){
        if(isset($_POST['submit'])){
            $ccode = $_POST['ccode'];
            $cname = $_POST['cname'];
            $hname = $_POST['hname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];

            // Generating the username and password.
            $username = $ccode."@".rand(100, 999);
            $password = uniqid();

            $connect = mysqli_connect('localhost', 'amzad786', 'Amzad@123');
            mysqli_select_db($connect, 'questionpaper');

            $query = "insert into examdept (ccode, cname, hname, email, mobile, username, password) values('".$ccode."',
            '".$cname."', '".$hname."', '".$email."', '".$mobile."', '".$username."', '".$password."')";

            mysqli_query($connect, $query);
            mysqli_close($connect);
            echo "<p>Registration Successfull.</p>";
        }
    }
?>
<body>
    <div class="container">
        <img src="./Images/bg2.gif" alt="Background Image">
        <div class="regform">
            <h2 id="heading">Register Examination Department</h2>
            <form method="post" id="form">
            <?php 
                if(isset($_POST['submit']))
                    register();
            ?>
                <p id="label1">College Code</p>
                <input type="number" id="college-code-textbox" placeholder="College Code" name="ccode" required>
                
                <p id="label2">College Name</p>
                <input type="text" id="college-name-textbox" placeholder="College Name" name="cname" required>
                
                <p id="label3">Exam Dept Head Name</p>
                <input type="text" id="head-name-textbox" placeholder="Head Name" name="hname" required>
                
                <p id="label4">Email</p>
                <input type="text" id="email-textbox" placeholder="Email" name="email" required>
                
                <p id="label5">Mobile</p>
                <input type="number" id="mobile-textbox" placeholder="Mobile Number" name="mobile" required>
                <br><br>
                <input type="submit" value="Register" id="regbtn" name="submit">
            </form>
        </div>
    </div>
    
</body>
</html>

