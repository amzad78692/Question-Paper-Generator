<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Examdeptchngpass.css">
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