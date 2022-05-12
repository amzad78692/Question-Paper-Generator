<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="examdept.css">
       <title>Exam Dept Page</title>
</head>
<body>
    <div class="container">
        <h1 id="heading">Question Paper Generator</h1>
        <p id="paragraph">(Welcome <?php session_start();echo $_SESSION["name"]; ?>)</p>
        <div class="mainexam">
            <a href="Facultyregister.php">Id for Faculty</a>
            <a href="#">View Ques</a>
            <a href="#">Delete Ques</a>
            <a href="#">Print Ques</a>
            <a href="Examdptcngpass.php">Change Password</a>
            <a href="Examdptviewpass.php">View Id & Pass</a>
            <a href="index.php">Log Out</a>
        </div>

    </div>

    <div class="box">

    </div>

                  
</body>
</html>
