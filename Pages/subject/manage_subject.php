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
<body id="page-top">

<?php include '../design/topside.php' ;?>

  <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a >
              <i class="fas fa-book"></i>
            Subject</a>
          </li>
          <li class="breadcrumb-item active">Manage Subject</li>
        </ol>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-book"></i>
            All Subject Detail<a class="btn btn-sm offset-md-8 btn-info" type="submit"  name="filter" href='filter_sub.php<?php  echo "?subid=2"; ?>' ><i class="fas fa-filter"></i>  Filter</a>

            <a class="btn btn-sm btn-default ml-3"  type="submit" href='manage_subject.php' ><i class="fas fa-redo"></i> Reset</a>

          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered  " id="dataTable" width="100%" cellspacing="0">
                    
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Sub_ID</th>
                        <th>Sub_Name</th>
                        <th>Credit</th>
                        <th>Course</th>
                        <th>Year</th>
                        <th>semister</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>                 
                   <tr>
                        <th>No</th>
                        <th>Sub_ID</th>
                        <th>Sub_Name</th>
                        <th>Credit</th>
                        <th>Course</th>
                        <th>Year</th>
                        <th>semister</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot>
                 <tbody>

                  <?php

                   if(isset($_POST['filter']))
                  {
                     $sub_course=$_POST['course'];
                     $sub_year=$_POST['sub_year'];
                     $sub_semi=$_POST['sub_semi'];
                     $sub_cre=$_POST['sub_cre'];
                     $where=array("", "", "", "");

                          if($sub_course!="") {
                            $where[0]="sub_course='$sub_course'";
                           }
                            
                           if($sub_year!=""){
                            $where[1]=" AND sub_year='$sub_year'";

                            }
                            if($sub_semi!=""){
                            $where[2]=" AND sub_semi='$sub_semi'";

                            }
                            if($sub_cre!=""){
                            $where[3]=" AND sub_cre='$sub_cre'";

                            }

                      
                            $sql = "SELECT * FROM subject WHERE $where[0]  $where[1]  $where[2] $where[3]";
                          }


                          else{
                      $sql = "SELECT * FROM subject";

                             }

              $result = $db->query($sql);
              if ($result->num_rows > 0) 
              { $sbid=1;
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {
                   
                    echo "<tr>";
                    echo '<td>'.$sbid.'</td>';
                    echo '<td>'. $row['sub_id'] .'</td>';
                    echo '<td><div class="tooltip1">'. $row['sub_sname'] .'<span class="tooltiptext" style="width: 140px;">'. $row['sub_fname'] .'</span></div></td>';
                     echo '<td>'. $row['sub_cre'] .'</td>';
                    echo '<td>'. $row['sub_course'] .'</td>';
                    echo '<td>'. $row['sub_year'] .'</td>';
                    echo '<td>'. $row['sub_semi'] .'</td>';
                  
                    echo '<td >';
                    echo '<center>';

                    echo '<a class="btn btn-success mx-1 btn-sm" href="update_subject.php?sb_id='.$row['sub_id'].'">Edit Sub</a> &nbsp;';

                    
                    
                    echo '<a class="btn btn-danger mx-1 btn-sm" href="delete_subject.php?sb_id='.$row['sub_id'].'">Delete</a>&nbsp;';

                    echo '</center>';
                  
                    
                     echo "</td>";

                  echo "</tr>";
                 $sbid++;
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
