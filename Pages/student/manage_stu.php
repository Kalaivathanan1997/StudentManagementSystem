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

<title>ATI-SMS</title>
</head>
<body id="page-top" >

<?php include '../design/topside.php' ;?>

 <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a ><i class="fas fa-users"></i>
            Student</a></li>
             <li class="breadcrumb-item active">
            <a >Manage Student</a></li>
        </ol>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            All Student Detail
             <a class="btn btn-sm offset-md-8 btn-info"  type="submit" name="filter" href='filter_stu.php<?php  echo "?id=2"; ?>' ><i class="fas fa-filter"></i> Filter</a>

             <a class="btn btn-sm btn-default  ml-3"  type="submit" href='manage_stu.php' ><i class="fas fa-redo"></i> Reset</a>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Stu_Id</th>
                    <th>Stu_Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>District</th>
                    <th>Ph_No</th>
                    <th width="150px">Action</th>

                  </tr>
                </thead>
             

                <tbody>
                   <?php


                   $scourse=0;
                      if(isset($_POST['Ssubmit'])) 
                      {
                        $scourse=$_POST['Ssubmit'];

                       $link=" WHERE course= '$scourse'";

                       $sql = "SELECT * FROM register $link";
                      }
                       elseif (isset($_POST['filter'])) {
                         
                        $byear=$_POST['byear'];
                        $scourse=$_POST['course'];
                          if($byear=="" && $scourse!=""){
                            $sql="SELECT * FROM register WHERE course= '$scourse'";}
                            
                            elseif($scourse=="" && $byear!="" ){
                             $sql="SELECT * FROM register WHERE byear= '$byear'";}

                      
                        elseif($scourse!="" && $byear!="" ){
                          $sql="SELECT * FROM register WHERE course='$scourse' AND byear='$byear'";}

                            else   

                          {
                            $sql = "SELECT * FROM register ";
                          }

                             }

                          else   

                          {
                            $sql = "SELECT * FROM register ";
                          }

              $sid=1;
              $result = $db->query($sql);
              if ($result->num_rows > 0) 
              {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {
                   
                    echo "<tr>";
                    echo '<td >'.$sid.'</td>';
                    echo '<td >'. $row['s_ino'] .'</td>';
                    echo '<td >'. $row['s_iname'] .'</td>';
                    echo '<td >'. $row['gender'] .'</td>';
                    echo '<td >'. $row['course'] .'</td>';
                    echo '<td >'. $row['state'] .'</td>';
                    echo '<td >'. $row['mobile'] .'</td>';
                  
                    echo '<td >';
                    echo '<center>';

                    echo '<div class="tooltip2"><a class="btn btn-warning mx-1 btn-sm" href="view_full_stu.php?s_id='.$row['s_ino'].'"><i class="fas fa-fw fa-eye"></i></a> &nbsp;<span class="tooltiptext">View</span></div>';

                    echo '<div class="tooltip2"><a class="btn btn-success mx-1 btn-sm" href="update_result.php?s_id='.$row['s_ino'].'"><i class="fas fa-fw fa-edit"></i></a><span class="tooltiptext">Edit Result</span></div>';

                    echo '<div class="tooltip2"><a class="btn btn-info mx-1 btn-sm" href="update_stu.php?s_id='.$row['s_ino'].'"><i class="fas fa-fw fa-user-edit"></i></a><span class="tooltiptext">Edit-Stu</span></div>';               
                    

                    echo '</center>';
                  
                    
                     echo "</td>";

                  echo "</tr>";
                 $sid++;
                  }
              } 
              else 
              {
                  
              }


            ?>



                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Stu_Id</th>
                    <th>Stu_Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>District</th>
                    <th>Ph_No</th>
                    <th width="150px">Action</th>

                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
 </div>



<?php include '../design/footer.php';?>
