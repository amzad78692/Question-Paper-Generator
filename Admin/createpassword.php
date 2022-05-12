<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <link rel="stylesheet" href="createpassword.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>import swal from 'sweetalert';</script>
</head>


<body>
    <div class="container">
        <img src="Images/passimg.jpg" alt="Background Image">
        <div class="newpasswordform">
            <h2 id="heading">Update Password</h2>
            <form method="post" id="form">
                <p id="label1">Old password</p>
                <input type="text" id="old-password-textbox" placeholder="Old password" name="oldpass" required>
                
                <p id="label2">New password</p>
                <input type="text" id="new-password-textbox" placeholder="New password" name="newpass" required>
                
               
                <br><br>
                <input type="submit" value="Submit" id="newpassbtn" name="submit">
            </form>
        </div>
    </div>
    
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];
        $connect = mysqli_connect("localhost", "root", "");
        $connect->select_db("questionpaper");
        $query = " select password from admin where password = '".$oldpass."'";
        $result = $connect->query($query);

        if($result->num_rows > 0)
        {
            $query = "update admin set password = '".$newpass."' where password = '".$oldpass."'"; 
            $connect->query($query);
            ?>
            <script>
                swal("Password update successfull !", "", "success")
                .then((value) => {
                    window.location.replace("Admin.php");
                });
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                swal("Invalid old password !", "", "error")
                .then((value) => {
                    window.location.replace("Admin.php");
                });
            </script>
            <?php
        }
        $connect->close();
    }
?>