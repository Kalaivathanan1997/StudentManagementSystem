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

if(isset($_POST['filter']))
{
$course=$_POST['course'];
$year=$_POST['year'];
$semi=$_POST['semi'];
$attempt=$_POST['attempt'];

$sql="SELECT * FROM subject WHERE sub_course='$course' AND  sub_year='$year' AND sub_semi='$semi' ";
        $result=mysqli_query($db,$sql);


if($attempt){

 $sql1="SELECT * FROM $attempt WHERE r_course='$course' AND  r_year='$year' AND r_semi='$semi' ";
        $result1=mysqli_query($db,$sql1);

}


$count=0;

}
else
{
  header("location:filter_view_result.php");
}


include '../design/header.php';

?>


<title>ATI-SMS</title>
</head>
<body id="page-top">

<?php include '../design/topside.php' ;?>

 <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a >
              <i class="fas fa-file-alt"></i>
            Result</a>
          </li>
          <li class="breadcrumb-item">
            <a href="filter_view_result.php">
            Filter Result</a>
          </li>
          <li class="breadcrumb-item active">View Result</li>
        </ol>



 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-envelope-open-text"></i>
            All Student Result</div>
          <div class="card-body">

            <!-- filter detail in header row  -->
           <div class="row" style="font-weight: bold;">
       <div class="col-md-3"><label>Course</label>&nbsp;:- <?php echo $course ?></div>
      <div class="col-md-3"><label>Year</label>&nbsp;:- <div class="tooltip1"> <?php echo $year ?><span class="tooltiptext"><?php echo $year ?>-Year</span></div></div>
       <div class="col-md-3"><label>Semister</label>&nbsp;:- <div class="tooltip1"><?php echo $semi ?><span class="tooltiptext"><?php echo $semi ?>-Semister</span></div></div>
       <div class="col-md-3"><label>Attempt</label>&nbsp;:- <?php echo $attempt ?></div>
</div> 
<hr style="margin-top: 8px; margin-bottom: 26px;">

            <div class="table-responsive">
              <table class="table table-bordered table-striped " id="dataTable" width="100%" cellspacing="0">

                 <thead>
             <tr>
                       
                   <th>No</th>
                    <th width="150px">Stu_Id</th>  
                    <?php

                     if (mysqli_num_rows($result)> 0) {
                            while ($row=mysqli_fetch_assoc($result)) {                            
                               echo '<th ><div class="tooltip1">' .$row['sub_sname']. '<span class="tooltiptext" style="width:150px;">' .$row['sub_fname']. '</span></div></th>';  
                               $count++;

                        }
                      } 

                    ?>

                     <th width="70px">GPA</th>  
            </tr>

                </thead>
                <tbody>

                   <?php

                     if (mysqli_num_rows($result1)> 0) {
                        $no=1;
                            while ($row=mysqli_fetch_assoc($result1)) {  
                            echo '<tr><td >' .$no. '</td>';
                            echo '<td >' .$row['s_id']. '</td>';

                            for($i=1; $i<=$count;$i++)
                            {
                                $sub="r_sub$i";

                                echo '<td align="center">' .$row[$sub]. '</td>'; 
                            }

                            echo '<td >' .$row['r_gpa']. '</td></tr>';  
                              $no++;
                        }
                      } 

                    ?>
                   </tbody>
                   <tfoot>
                        <tr>
                       
                   <th>No</th>
                    <th width="150px">Stu_Id</th>  

                    <?php

$sql="SELECT * FROM subject WHERE sub_course='$course' AND  sub_year='$year' AND sub_semi='$semi' ";
      $resultf=mysqli_query($db,$sql);

                     if (mysqli_num_rows($resultf)> 0) {
                            while ($row=mysqli_fetch_assoc($resultf)) {                            
                               echo '<th >' .$row['sub_sname']. '</th>';  
                              

                        }
                      } 

                    ?>

                     <th width="70px">GPA</th>  
            </tr>
                   </tfoot>
              </table>
            </div>
          </div>
        </div>

      





<?php include '../design/footer.php';?>
