<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="AdminViewidpass.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>import swal from 'sweetalert';</script>
        <title>Admin View Id Password</title>
</head>
<body>
    <div class="container">
        <img src="Images/church.jpg" alt="Background Image">
        <div class="viewpass">
            <h1 id="heading">View Id Password</h1>
            <form method="post" id="form">
                <p class="para"> Enter College Code</p>
                <input type="text" placeholder="College Code" name="ccode" required>
                <div id="button">
                <input type="submit" value="View"  name="submit">
                 <?php
                    if(isset($_POST['submit']))
                    header("Location:showpass.php");
                    //   adminviewpass();
                 ?>
                </div>
            </form>        
        </div>
    </div>

                  
</body>
</html>

<!-- <?php
   function adminviewpass()
   {
    $code = $_POST['ccode'];
    $connect = mysqli_connect("localhost", "root", "");
    $connect->select_db("questionpaper");

    $query = "select ccode, username, password from examdept where ccode = '".$code."'";
    $result = $connect->query($query);

    if($result->num_rows >0)
    {
        $data = $result->fetch_assoc();
        echo "<br>";
        echo "<p class='third'>College Code</p> =".$data['ccode'];
        echo "<br>";
        echo "<p class='third'> Username</p> =".$data['username'];
        echo "<br>";
        echo "<p class='third'> Password</p> = ".$data['password'];
    } 
    else
    {
        ?>
        <script>
            swal("Invalid College Code !", "", "error");
        </script>
        <?php
    }
    $connect->close();

   }
?> -->