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
                       adminviewpass();
                 ?>
                </div>
            </form>        
        </div>
    </div>

                  
</body>
</html>

 <?php
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
        echo "<p class='third'>College Code =".$data['ccode']."</p>";
        echo "<br>";
        echo "<p class='third'> Username =".$data['username']."</p>";
        echo "<br>";
        echo "<p class='third'> Password = ".$data['password']."</p>";
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
?> 