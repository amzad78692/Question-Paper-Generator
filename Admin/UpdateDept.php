<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Examination Department</title>
    <!-- <link rel="stylesheet" href="IdExamDept.css"> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>import swal from 'sweetalert';</script>
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
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
</head>

<?php
    $oldccode = $_GET["update"];
    $connect = mysqli_connect("localhost", "root", "");
    $connect->select_db("questionpaper");
    $query = "SELECT * FROM examdept WHERE ccode = ".$oldccode;
    $result = $connect->query($query);
    $data = $result->fetch_assoc();
    $ccode = $data["ccode"];
    $cname = $data["cname"];
    $hname = $data["hname"];
    $email = $data["email"];
    $mobile = $data["mobile"];
    $connect->close();
    // Updating record
    if(isset($_POST['submit']))
    {
        $cname = $_POST['cname'];
        $ccode = $_POST['ccode'];
        $hname = $_POST['hname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        $connect = mysqli_connect("localhost", "root", "");
        $connect->select_db("questionpaper");
        $query = "UPDATE examdept SET ccode=$ccode, cname='$cname', hname='$hname', email='$email', mobile=$mobile WHERE ccode=$oldccode";
        $connect->query($query);
        header("Location:ViewAllDept.php");
    }
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php include "sidebar.php"; ?>

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Update Examination Department</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Department</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="college-code-textbox">College Code</label>
                    <input class="form-control" type="number" id="college-code-textbox" placeholder="College Code" name="ccode" value="<?php echo $ccode ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="college-name-textbox">College Name</label>
                    <input class="form-control" type="text" id="college-name-textbox" placeholder="College Name" name="cname" value="<?php echo $cname ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="head-name-textbox">Exam Dept Head Name</label>
                    <input class="form-control" type="text" id="head-name-textbox" placeholder="Head Name" name="hname" value="<?php echo $hname ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="email-textbox">Email</label>
                    <input class="form-control" type="text" id="email-textbox" placeholder="Email" name="email" value="<?php echo $email ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="mobile-textbox">Mobile</label>
                    <input class="form-control" type="number" id="mobile-textbox" placeholder="Mobile Number" name="mobile" value="<?php echo $mobile ?>" required>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
                </div>
                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="Update" id="regbtn" name="submit">
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

