<!DOCTYPE html>
<html lang="en">
<head>
                  <meta charset="UTF-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>View id password</title>
                  <style type="text/css">
                      table {
                        font-size: 20px;
                        display: flex;
                        position: absolute;
                        margin-left: 450px;
                        margin-top: 250px;
                      }

                      th{
                        border-collapse: collapse; 
                      }


                  </style>
</head>
<body>
        <table>
            <tr>
                <th>College code</th>
                <th>Username</th>
                <th>Password</th>
            </tr>  
            <?php 
             $connect = mysqli_connect("localhost", "root", "");
             $connect->select_db("questionpaper");

             $query = "select ccode, username, password from examdept";
             $result = $connect->query($query);

             if($result-> num_rows > 0)
             {
                 while( $row = $result->fetch_assoc())
                 {
                     echo "<tr><td>".$row["ccode"] ."</td><td>".$row["username"] ."</td><td>".$row["password"] ."</td></tr>";  
                 }
                 echo "</table>";
             }
             else
             {
                 echo " 0 Result";
             }

             $connect-> close();
            ?>         
        </table>
                  
</body>
</html>