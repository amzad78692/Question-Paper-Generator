<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="GenerateQues.css">
    <script src="jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Question Paper</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row" id="header">
            <div class="col-12 d-flex justify-content-center">
                <h3>Question Paper</h3>
            </div>
        </div>
        <div class="row" id="head2">
            <div class="col-12 d-flex justify-content-center">
                <form method="POST">
                    <h3>Select College</h3>
                    <?php 
                        $connect = mysqli_connect("localhost", "root", "");
                        $connect->select_db("questionpaper");
                
                        $query = "SELECT cname FROM examdept";
                        $result = $connect->query($query);
                    ?>
                    <select name="subject" class="subject">
                        <option value="Select Subject">Select College</option>
                        <?php
                            while ($row = $result->fetch_assoc())
                            { ?>
                                <option value=<?php echo $row['cname'] ?>><?php echo $row['cname'] ?></option> <?php
                            }
                        ?>
                    </select>
                    <button type="submit" name="submit" id="viewbtn">View</button>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>
