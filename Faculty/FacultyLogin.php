<!DOCTYPE html>
<html lang="en">
<head>
                  <meta charset="UTF-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <link rel="stylesheet" href="FacultyLogin.css" class="">
                  <title>Faculty Login</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="box">
                <form method="post">
                    <h1>Faculty Login</h1>
                      <form>
                            <div class="inputbox">
                                <input type="text" placeholder="Username" name="username">
                            </div>
                            <div class="inputbox">
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="inputbox">
                                <input type="submit"  id="submit" value="Login" name="Submit">
                            </div>
                             <?php 
                                if(isset($_POST['Submit']))
                                {
                                    $username = $_POST['username'];
                                    $password = $_POST['password'];

                                    $connect = mysqli_connect("localhost", "root", "");
                                    //$connect->open();
                                    mysqli_select_db($connect, "questionpaper");
                    
                                    $query = "select fname, sname, scode from registerfaculty where username = '".$username."' and password = '".$password."'";
                                    $result=mysqli_query($connect, $query);
                                    $row = $result->fetch_assoc();
                                    if($result->num_rows == 1)
                                    {
                                        
                                        session_start();
                                        $_SESSION['FacultyLogin'] = true;
                                        $_SESSION["fname"] = $row['fname'];
                                        $_SESSION["sname"] = $row['sname'];
                                        $_SESSION["scode"] = $row['scode'];
                                        $connect->close();
                                        header("Location:faculty.php");
                                        exit();
                                    }
                                    else
                                    {
                                        echo "<p>Invalid Username or Password</p>";
                                    }
                                }    

                            ?> 
                            
                        </form>
                </form>       
            </div>
        </div>
    </section>
                  
</body>
</html>