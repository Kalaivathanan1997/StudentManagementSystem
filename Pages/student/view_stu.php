<?php

session_start();

if(! isset($_SESSION['admin']))
{

if(! isset($_SESSION['user']))
{

  header('location:../../index.php');
  
}
}


 include '../../config/config.php';

 include '../design/header.php';?>

<style type="text/css">
  
.m{

  margin-right: 15px;

}


</style>
<title>ATI-SMS</title>
</head>
<body id="page-top" >

<?php include '../design/topside.php' ;?>
 

  <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a >
              <i class="fas fa-users"></i>
            Student</a>
          </li>
          <li class="breadcrumb-item active">View Student</li>
        </ol>
       

        <div class="card mb-3">

          <div class="card-header" >

            <i class="fas fa-users"></i>
            All Student Detail
            <a class="btn btn-sm offset-md-7 btn-info"  type="submit" name="filter" href='filter_stu.php<?php  echo "?id=1"; ?>' ><i class="fas fa-filter"></i> Filter</a>

             <a class="btn btn-sm btn-default "  type="submit" href='view_stu.php' > <i class="fas fa-redo"></i> Reset</a>

            <a class="btn btn-primary btn-sm "   href="add_stu.php" >+Add New Student</a></div>
          <div class="card-body">

            <div class="table-responsive" >

              <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0" >
                  <thead >
                  <tr>
                    <th>No</th>
                    <th>Stu_Id</th>
                    <th>Stu_Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>District</th>
                    <th>Ph_No</th>
                    <th width="80px">Action</th>

                  </tr>
                </thead>
             

                <tbody >
                   <?php


                   $scourse="";
                      if(isset($_POST['Ssubmit'])) 
                      {
                        $scourse=$_POST['Ssubmit'];

                     
                       $sql = "SELECT * FROM register WHERE course= '$scourse'";
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

                          elseif(isset($_POST['search']))  
                          {
                            $search=$_POST['name'];
                            $cource=$_POST['course'];

                          if(! $cource)
                          {
                            $sql="SELECT * FROM register WHERE  s_ino LIKE '%$search%'  OR  s_iname  LIKE '%$search%'  OR   s_fname  LIKE '%$search%'  OR   nic  LIKE '%$search%'  OR country LIKE '%$search%' ";
                            
                          }
                          else
                          {
                            $sql="SELECT * FROM register WHERE course ='$cource' AND ( s_ino LIKE '%$search%'  OR  s_iname  LIKE '%$search%'  OR   s_fname  LIKE '%$search%'  OR   nic  LIKE '%$search%'  OR country LIKE '%$search%') ";
                            
                          }
                           }


                            else
                          {
                            $sql = "SELECT * FROM register ";
                          }

              $sid=1;
              $result = $db->query($sql);
            
              if (mysqli_num_rows($result)>0) 
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

                    echo '<div class="tooltip2"><a class="btn btn-success mx-1 btn-sm" href="view_result_stu.php?s_id='.$row['s_ino'].'"><i class="fas fa-fw fa-book"></i></a><span class="tooltiptext">Result</span></div>';
                                              
                    echo '</center>';
                  
                    
                     echo "</td>";

                  echo "</tr>";
                 $sid++;
                  }
              } 

             


            ?>



                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
 </div>



<?php include '../design/footer.php';?>
