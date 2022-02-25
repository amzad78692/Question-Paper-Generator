<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="AdminLogin.css">
</head>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <form method="post">
                        <h2>Admin Login</h2>
                        <form>
                            <div class="inputbox">
                                <input type="text" placeholder="Username" name="username">
                            </div>
                            <div class="inputbox">
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="inputbox">
                                <input type="submit" value="Login" name="Submit">
                            </div>
                            <?php 
                                if(isset($_POST['Submit']))
                                {
                                    $username = $_POST['username'];
                                    $password = $_POST['password'];

                                    if($username == "amzad786" and $password == "Amzad@123")
                                    {
                                        header("Location:Admin.php");
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
        </div>
    </section>
</body>
</html>

