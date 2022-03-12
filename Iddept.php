<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="IDdept.css">
        <title>Registration Faculty</title>

        <?php
            function login()
            {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $connect = mysqli_connect("localhost", "root", "");
                //$connect->open();
                mysqli_select_db($connect, "questionpaper");

                $query = "select hname,username,password from examdept where username = '".$username."' and password = '".$password."'";
                $result=mysqli_query($connect, $query);
               $row = $result->fetch_assoc();
                if($row['username'] == $username and $row['password'] == $password)
                {
                    
                    session_start();
                    $_SESSION["name"] = $row['hname'];
                    $connect->close();
                    header("Location:Examdpt.php");
                    exit();
                }
                else
                {
                    echo "<p id='paragraph'>Invalid Username or Password</p>";
                }
            }
        ?>
</head>
<body>
    <section>
        <div class="container">
              <div class="box">
                 <h1>Exam Department Login</h1>
                     <form method="post">
                            <div class="inputbox">
                                <input type="text" placeholder="Username" name="username">
                            </div>
                            <div class="inputbox">
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="inputbox">
                                <input type="submit" id="submit" value="Login" name="Submit">
                            </div>
                            <?php
                                if(isset($_POST['Submit']))
                                    login();
                            ?>
                     </form>
              </div>
        </div> 
</section>
                  
</body>
</html>

