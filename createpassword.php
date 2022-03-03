<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <link rel="stylesheet" href="createpassword.css">
</head>


<body>
    <div class="container">
        <img src="passimg.jpg" alt="Background Image">
        <div class="newpasswordform">
            <h2 id="heading">Update Password</h2>
            <form method="post" id="form">
            <?php 
                if(isset($_POST['submit']))
                    register();
            ?>
                <p id="label1">old password</p>
                <input type="text" id="old-password-textbox" placeholder="old password" name="oldpass" required>
                
                <p id="label2">New password</p>
                <input type="text" id="new-password-textbox" placeholder="New password" name="newpass" required>
                
               
                <br><br>
                <input type="submit" value="Submit" id="newpassbtn" name="submit">
            </form>
        </div>
    </div>
    
</body>
</html>
