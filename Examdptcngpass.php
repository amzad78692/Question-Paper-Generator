<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Examdeptchngpass.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>import swal from 'sweetalert';</script>
        <title>Exam Dept Change Password</title>
</head>
<body>
    <div class="container">
    <img src="Images/passimg.jpg" alt="Background Image">
        <div class="changepass">
            <h1 id="heading">Change Password</h1>
               <form method="post" id="form">
               <p id="first">Old password</p>
                <input type="text" id="old-password-textbox" placeholder="Old password" name="oldpass" required>
                
                <p id="second">New password</p>
                <input type="text" id="new-password-textbox" placeholder="New password" name="newpass" required>
                
               
                <br><br>
                <div id="button">
                <input type="submit" value="Submit"  name="submit">
                </div>
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
        $query = " select password from examdept where password = '".$oldpass."'";
        $result = $connect->query($query);

        if($result->num_rows > 0)
        {
            $query = "update examdept set password = '".$newpass."' where password = '".$oldpass."'"; 
            $connect->query($query);
            ?>
            <script>
                swal("Password update successfull !", "", "success")
                .then((value) => {
                    window.location.replace("Examdpt.php");
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
                    window.location.replace("Examdpt.php");
                });
            </script>
            <?php
        }
        $connect->close();
    }
?>