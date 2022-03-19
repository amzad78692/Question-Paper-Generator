<!DOCTYPE html>
<html lang="en">
<head>
                  <meta charset="UTF-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <link rel="stylesheet" href="FacultyLogin.css" class="">
                  <title>Faculty Registration</title>
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
                            <!-- <?php 
                                if(isset($_POST['Submit']))
                                {
                                    $username = $_POST['username'];
                                    $password = $_POST['password'];

                                    if($username == "niraj001" and $password == "Niraj&72")
                                    {
                                        header("Location:faculty.php");
                                        exit();
                                    }
                                    else
                                    {
                                        echo "<p>Invalid Username or Password</p>";
                                    }
                                }

                            ?> -->
                            
                        </form>
                </form>       
            </div>
        </div>
    </section>
                  
</body>
</html>