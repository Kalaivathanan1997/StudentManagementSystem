 <?php 

session_start();

if(! isset($_SESSION['admin']))
{

if(! isset($_SESSION['user']))
{

  header('location:../../index.php');
  
}
}


 include '../../config/config.php';?>

<?php include '../design/header.php';?>

<title>ATI_SMS-View_Course</title>
</head>
<body id="page-top">

<?php include '../design/topside.php' ;?>

  <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a >
              <i class="fas fa-database"></i>
            Course</a>
          </li>
          <li class="breadcrumb-item active">Manage Course</li>
        </ol>

        <div class="card mb-12">
          <div class="card-header">
            <i class="fas fa-database"></i>
            All Course Detail</div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered  " id="dataTable" width="100%" cellspacing="0">
                    
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Course Full Name</th>
                        <th>Course Short NAme</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>                 
                   <tr>
                        <th>No</th>
                        <th>Course Full Name</th>
                        <th>Course Short NAme</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot>
                 <tbody>

                  <?php


              $sql = "SELECT * FROM course";

              $result = $db->query($sql);
              if ($result->num_rows > 0) 
              { $cid=1;
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {
                   
                    echo "<tr>";
                    echo '<td>'.$cid.'</td>';
                    echo '<td >'. $row['c_fname'] .'</td>';
                    echo '<td >'. $row['c_sname'] .'</td>';
                  
                    echo '<td >';
                    echo '<center>';

                    echo '<a class="btn btn-success mx-1 btn-sm" href="update_course.php?cid='.$row['c_id'].'">Edit Course</a> &nbsp;';

                    
                    
                    echo '<a class="btn btn-danger mx-1 btn-sm" href="delete_course.php?cid='.$row['c_id'].'">Delete</a>&nbsp;';

                    echo '</center>';
                  
                    
                     echo "</td>";

                  echo "</tr>";
                 $cid++;
                  }
              } 
              else 
              {
                  
              }


            ?>


            </tbody>
    </table>
    </div>
</div>
            </div>
          </div>
          
        </div>

      </div>
      <!-- /.container-fluid -->

 </div>




<?php include '../design/footer.php';?>
