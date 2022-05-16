<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="ExamDept.php" class="nav-link">QUERY WRAPPING CREATOR</a>
      </li>
    </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="ExamDept.php" class="brand-link">
      <img src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/000000/external-department-university-flaticons-flat-flat-icons-3.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Welcome Department</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../Images/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          
          <a href="ExamDept.php" class="d-block"><?php echo $_SESSION['hname'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="ExamDept.php" class="nav-link active">
              <i class="nav-icon"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/32/000000/external-dashboard-computer-programming-flaticons-lineal-color-flat-icons.png"/></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="RegFaculty.php" class="nav-link active">
              <i class="nav-icon"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/32/000000/external-faculty-university-flaticons-lineal-color-flat-icons.png"/></i>
              <p>
                Register Faculty
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="ViewAllFaculty.php" class="nav-link active">
              <i class="nav-icon"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/32/000000/external-faculty-university-flaticons-flat-flat-icons-2.png"/></i>
              <p>
                View All Faculty
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="AddCourse.php" class="nav-link active">
              <i class="nav-icon"><img src="https://img.icons8.com/external-dualtone-zulfa-mahendra/32/000000/external-course-online-study-dualtone-zulfa-mahendra.png"/></i>
              <p>
                Add Course
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="ViewAllCourse.php" class="nav-link active">
              <i class="nav-icon"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/32/000000/external-course-resume-flaticons-lineal-color-flat-icons.png"/></i>
              <p>
                View All Course
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="ViewAllPaper.php" class="nav-link active">
              <i class="nav-icon"><img src="https://img.icons8.com/nolan/32/questions.png"/></i>
              <p>
                View Question Paper
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="ChangePwd.php" class="nav-link active">
              <i class="nav-icon"><img src="https://img.icons8.com/external-sbts2018-flat-sbts2018/32/000000/external-change-password-basic-ui-elements-2.3-sbts2018-flat-sbts2018.png"/></i>
              <p>
                Change Password
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="Logout.php" class="nav-link active">
              <i class="nav-icon"><img src="https://img.icons8.com/fluency/32/000000/exit.png"/></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>