<!DOCTYPE html>
<html lang="en">
<head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" href="faculty.css">
           <title>Faculty Login</title>
</head>
<body>
         <div class="container">                             
             <h1 id="heading"> Question Paper Generator</h1>
             <p id="paragraph">(Welcome 
                 <?php 
                    session_start();
                    echo $_SESSION["name"]; 
                    $sname = $_SESSION["sname"]; 
                    $scode = $_SESSION["scode"]; 
                    
                ?>)</p>
             <div class="facultymain">
                 <form method="post">
                     <button name="createbtn">Create Question</button>
                    <!-- <a href="Insertquestion.php" name="createbtn" type="submit">Create Question</a> -->
                    <a href="">Edit Question</a>
                    <a href="">View Question</a>
                    <a href="">Delete Question</a>
                    <a href="index.php">Log Out</a>
                 </form>
             </div>
        </div>
        <div class="box">
            
        </div>
                  
</body>
</html>

<?php
    function senddata()
    {
        session_start();
        $_SESSION["sname"] = $GLOBALS['sname'];
        $_SESSION["scode"] = $GLOBALS['scode'];
        header("Location:Insertquestion.php");
        exit();
    }
    if(isset($_POST['createbtn']))
        senddata();

?>