<?php
  session_start();
  if(!isset($_SESSION['AdminLogin']))
    header('Location: AdminLogin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <script src="../dist/js/pages/dashboard.js"></script>
    <link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="sidebar.css">
    <title>Generate Paper</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <?php include "sidebar.php"; ?>
    
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Generate Question Paper</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Admin.php">Home</a></li>
              <li class="breadcrumb-item active">Question Paper</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php
        $connect = mysqli_connect("localhost", "root", "");
        $connect->select_db("questionpaper");
    ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Generate Question Paper</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="Paper.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="college">Select College</label>
                    <?php
                        $query = "select ccode, cname from examdept";
                        $result = $connect->query($query);
                    ?>
                    <select class="form-select" aria-label="Default select example" id="college" name="college" onchange="GetCourse(this.value)">
                    <option selected>Select</option>
                    <?php while ($row = $result->fetch_assoc()):?>
                            <option value=<?php echo $row['ccode'];?>><?php echo $row['cname'];?></option>
                    <?php endwhile?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="course">Select Course</label>
                    <select class="form-select" aria-label="Default select example" id="course" name="course" onchange="GetDept(this.value),GetSem(this.value)">
                    <option selected>Select</option>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="dept">Select Department</label>
                    <select class="form-select" aria-label="Default select example" id="dept" name="dept">
                    <option selected>Select</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="sem">Select Semester</label>
                    <select class="form-select" aria-label="Default select example" id="sem" name="sem" onchange="GetSubject(this.value)">
                    <option selected>Select</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="subject">Select Subject</label>
                    <select class="form-select" aria-label="Default select example" id="subject" name="subject">
                    <option selected>Select</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="difficulty">Select Difficulty</label>
                    <select class="form-select" aria-label="Default select example" id="difficulty" name="difficulty">
                    <option selected>Select</option>
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="module">No. of Modules</label>
                    <select class="form-select" aria-label="Default select example" id="module" name="module" onchange="GetModule(this.value)">
                    <option selected>Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    </select>
                  </div>
                  <div class="form-group" id="qpm">
                  </div>
                  <div class="form-group">
                    <label for="time">Select Total Time (Hours)</label>
                    <select class="form-select" aria-label="Default select example" id="time" name="time">
                    <option selected>Select</option>
                    <option value="1/2">1/2</option>
                    <option value="1">1</option>
                    <option value="3/2">3/2</option>
                    <option value="2">2</option>
                    <option value="5/2">5/2</option>
                    <option value="3">3</option>
                    <option value="7/2">7/2</option>
                    <option value="4">4</option>
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Generate" name="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>

<script>
    function GetCourse(data) {
        const req = new XMLHttpRequest();
        req.open('GET', 'http://localhost/Question-Paper-Generator/Admin/LoadData.php?ccode='+data, 'true');
        req.send();

        req.onreadystatechange = function(){
            if(req.readyState == 4 && req.status == 200){
                document.getElementById('course').innerHTML = req.responseText;
            }
        }
    }
    function GetDept(data) {
        const req = new XMLHttpRequest();
        req.open('GET', 'http://localhost/Question-Paper-Generator/Admin/LoadData.php?cid='+data, 'true');
        req.send();

        req.onreadystatechange = function(){
            if(req.readyState == 4 && req.status == 200){
                document.getElementById('dept').innerHTML = req.responseText;
            }
        }
    }
    function GetSem(data) {
        const req = new XMLHttpRequest();
        req.open('GET', 'http://localhost/Question-Paper-Generator/Admin/LoadData.php?sid='+data, 'true');
        req.send();

        req.onreadystatechange = function(){
            if(req.readyState == 4 && req.status == 200){
                document.getElementById('sem').innerHTML = req.responseText;
            }
        }
    }
    function GetSubject(data) {
        const req = new XMLHttpRequest();
        req.open('GET', 'http://localhost/Question-Paper-Generator/Admin/LoadData.php?sem='+data, 'true');
        req.send();

        req.onreadystatechange = function(){
            if(req.readyState == 4 && req.status == 200){
                document.getElementById('subject').innerHTML = req.responseText;
            }
        }
    }
    function GetModule(data) {
        const req = new XMLHttpRequest();
        req.open('GET', 'http://localhost/Question-Paper-Generator/Admin/LoadData.php?module='+data, 'true');
        req.send();

        req.onreadystatechange = function(){
            if(req.readyState == 4 && req.status == 200){
                document.getElementById('qpm').innerHTML = req.responseText;
            }
        }
    }
</script>