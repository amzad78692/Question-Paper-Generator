<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.js"></script>
    <title>View Question</title>
    <?php 
        session_start();
        $fname = $_SESSION["fname"];
        $sname = "Subject Name : ";
        $scode = "Subject Code : ";
    ?>
</head>

<script>
    $(document).ready(function(){
        $("#viewbtn").prop("disabled", true);
        
        $("select.subject").change(function(){
            
            if($(".subject").val() == "Select Subject"){
                $("#viewbtn").prop("disabled", true);
                $("#sname").hide();
                $("#scode").hide();
            }
            else
            {
                $("#viewbtn").prop("disabled", false);
                
            }
        });
    });

    function showdata(){
        $("#sname").show();
        $("#scode").show();
        $("#sname").html('Subject Name : '+$(".subject").find(":selected").text())
    }
</script>
<body>
    <div class="header">
        <form method="POST">
            <h3>Faculty Name : <?php echo $fname ?></h3>
            <?php 
                $connect = mysqli_connect("localhost", "root", "");
                $connect->select_db("questionpaper");
        
                $query = "SELECT sname FROM registerfaculty where fname='".$fname."'";
                $result = $connect->query($query);
            ?>
            <select name="subject" class="subject">
                <option value="Select Subject">Select Subject</option>
                <?php
                    while ($row = $result->fetch_assoc())
                    { ?>
                        <option value=<?php echo $row['sname'] ?>><?php echo $row['sname'] ?></option> <?php
                    }
                ?>
            </select>
            <button type="submit" name="submit" id="viewbtn" onclick="showdata()">View</button>
            <h3 id="sname"></h3>
            <h3 id="scode"></h3>
            
        </form>
    </div>
    <div class="container">
        <iframe src="" frameborder="0" name="frame" height="100vh" width="100vw"></iframe>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    { 
    }
?>