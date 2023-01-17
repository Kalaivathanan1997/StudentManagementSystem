
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">ATI Vavuniya</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
     
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <!--<a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>-->
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul></nav>

 


  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../design/Home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a> </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-user"></i>
          <span>Student</span></a>   
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="../student/view_stu.php" ><i class="fas fa-fw fa-eye"></i>
         <span>View_Student</span></a>
          <a class="dropdown-item" <?php if(1==$_SESSION['id']) { echo 'href="../student/manage_stu.php"';  } else { echo 'href="#" data-toggle="modal"  data-target="#check"'; } ?>><i class="fas fa-fw fa-user-cog"></i>
         <span>Manage_student</span></a>
          
          </div>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-book"></i>
         <span>Subject</span></a>      
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="../subject/view_subject.php"><i class="fas fa-fw fa-eye"></i>
         <span>View_Subject</span></a>
          <a class="dropdown-item" <?php if(1==$_SESSION['id']) { echo 'href="../subject/manage_subject.php"';  } else { echo 'href="#" data-toggle="modal"  data-target="#check"'; } ?> ><i class="fas fa-fw fa-cog"></i>
         <span>Manage_Subject</span></a>
          </div>
      </li>      
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-database"></i>
         <span>Coure</span></a>      
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="../course/view_course.php"><i class="fas fa-fw fa-eye"></i>
         <span>View_Course</span></a>
          <a class="dropdown-item" <?php if(1==$_SESSION['id']) { echo 'href="../course/manage_course.php"';  } else { echo 'href="#" data-toggle="modal"  data-target="#check"'; } ?> ><i class="fas fa-fw fa-cog"></i>
         <span>Manage_Course</span></a>
          </div>
      </li>
         
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas  fa-file-alt"></i>
         <span>Result</span></a>      
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="../result/filter_add_result.php"><i class="fas fa-fw fa-file-alt"></i>
         <span>Add_Result</span></a>
          <a class="dropdown-item" href="../result/filter_view_result.php"><i class="fas fa-fw fa-eye"></i>
         <span>View_Result</span></a>
          </div>
      </li> 
    </ul> 
    
 <div id="content-wrapper">

      <div class="container-fluid">
    
