<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>import swal from 'sweetalert';</script>
    <link rel="stylesheet" href="Insertquestion.css">
    <title>Insert Question</title>
</head>
<body>
    <div class="header">
        <h3>Subject Name : <?php session_start(); echo $_SESSION['sname']; ?></h3>
        <h3>Subject Code : <?php echo $_SESSION['scode']; ?></h3>
    </div>
    <div class="question">
        <form method="POST">
        <p>Marks:</p>
            <input type="number" name="marks">
            <p>Difficulty Level : </p>
            <select name="level" id="level">
                <option value="Select">Select Level</option>
                <option value="Low">Easy</option>
                <option value="Medium">Medium</option>
                <option value="High">Hard</option>
            </select>
            <p>Semester : </p>
            <select name="sem" id="sem">
                <option value="Select">Select Sem</option>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
                <option value="VI">VI</option>
                <option value="VII">VII</option>
                <option value="VIII">VIII</option>
            </select>
            <p>Type Question Here</p>
            <textarea name="question" id="question" cols="50" rows="3"></textarea>
            <br>
            <input type="submit" name="submit" value="Insert">

        </form>
   </div>

    
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $question = $_POST['question'];
        $marks = $_POST['marks'];
        $level = $_POST['level'];
        $sname = $_SESSION['sname'];
        $scode = $_SESSION['scode'];
        $sem   = $_POST['sem'];
        $year = date('Y');
        // $year = $year->format('Y');

        $connect = mysqli_connect("localhost", "root", "");
        mysqli_select_db($connect, "questionpaper");
        $query = "insert into question values('".$question."', '".$marks."', '".$level."', '".$sname."', '".$scode."', '".$sem."', '".$year."')";

        $connect->query($query);

        ?>
            <script>
                swal("Question Inserted Successfully !", "", "success")
                .then((value) => {
                    window.location.replace("faculty.php");
                });
            </script>
        <?php
    }
?>