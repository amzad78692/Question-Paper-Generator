<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Examdptviewpas.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>import swal from 'sweetalert';</script>
        <title>Exam Dept View Id Password</title>
</head>
<body>
    <div class="container">
        <div class="dptviewpass">
            <h1 id="heading">View Id Password</h1>
            <form method="post" id="form">
                <p class="first"> Enter Subject Code</p>
                <input type="text" placeholder="Subject Code" name="code" required>
                <div id="button">
                <input type="submit" value="View"  name="submit">
                <?php
                    if(isset($_POST['submit']))
                        getIdPass();
                ?>
                </div>
            </form>        
        </div>
    </div>
</body>


<?php
    function getIdPass()
    {
        $code = $_POST['code'];
        $connect = mysqli_connect("localhost", "root", "");
        $connect->select_db("questionpaper");

        $query = "select fname, username, password from registerfaculty where scode = '".$code."'";
        $result = $connect->query($query);

        if($result->num_rows >0)
        {
            $data = $result->fetch_assoc();
            echo "<br>";
            echo "<p class='first'> Faculty Name</p> = ".$data['fname'];
            echo "<br>";
            echo "<p class='first'> Username</p> = ".$data['username'];
            echo "<br>";
            echo "<p class='first'> Password</p> = ".$data['password'];
        }
        else
        {
            ?>
            <script>
                swal("Invalid Subject Code !", "", "error");
            </script>
            <?php
        }
        $connect->close();
    }
?>