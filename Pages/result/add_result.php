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
$count=0;
}

else
{
  header("location:filter_add_result.php");
}


include '../design/header.php';

?>

<script src="../../assest/js/jquery.js"></script>

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
            <a href="filter_add_result.php">
            Filter Result</a>
          </li>
          <li class="breadcrumb-item active">Add Result</li>
        </ol>



        <?php
if($attempt=="attempt1") { ?>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-envelope-open-text"></i>
            Result Details</div>
          <div class="card-body">

<!-- filter detail in header row  -->
            <div class="row" style="font-weight: bold;">
       <div class="col-md-3"><label>Course</label>&nbsp;:- <?php echo $course ?></div>
      <div class="col-md-3"><label>Year</label>&nbsp;:- <div class="tooltip1"> <?php echo $year ?><span class="tooltiptext"><?php echo $year ?>-Year</span></div></div>
       <div class="col-md-3"><label>Semister</label>&nbsp;:- <div class="tooltip1"><?php echo $semi ?><span class="tooltiptext"><?php echo $semi ?>-Semister</span></div></div>
       <div class="col-md-3"><label>Attempt</label>&nbsp;:- <?php echo $attempt ?></div>
</div>
<hr style="margin-top: 8px; margin-bottom: 26px;">


            <div class="table-responsive" >
              <form method="post" id="form" >   

              <table class="table table-bordered  " id="table"  width="100%" cellspacing="0">
                        <thead>
                    <tr>
                       
                   
                    <th width="150px">Stu_Id</th>  

                    <?php
                  
                     if (mysqli_num_rows($result)> 0) {
                            while ($row=mysqli_fetch_assoc($result)) {                            
                               echo '<th><div class="tooltip1">' .$row['sub_sname'].'<span class="tooltiptext"  style="width:150px;">' .$row['sub_fname']. '</span></div></th>';  
                               $count++;

                        }
                      } 

                    ?>
                    <th width="80px"><div class="tooltip1">year<span class="tooltiptext"  style="width:150px;">Attempt Year</span></div></th>
                     <th width="70px">GPA</th>  
                     <th width="70px">action</th>
                  </tr>

                </thead>

                 <tbody>

          <tr align="center">
                  
                  <td><input  name="sid[]" style="width: 100%" placeholder="VAV/IT/2018/F/0000"  pattern="[A-Z]{3}[/]{1}[A-Z]{1,3}[/]{1}[0-9]{4}[/]{1}[A-Z]{1}[/]{1}[0-9]{4}" title="Follow This Format VAV/IT/2018/F/0000" id="sidrequre"  required="required"  ></td>

                  <?php
                  
                  for($a=0 ;$a<$count; $a++)
                  {  

              echo  '<td >
                   <select name="result[]" id="resultrequre"  required="required" >
                <option VALUE="">-</option>
                    <option VALUE="A+">A+</option>
                    <option VALUE="A">A</option>
                    <option VALUE="A-">A-</option>
                    <option VALUE="B+">B+</option>
                    <option VALUE="B">B</option>
                    <option VALUE="B-">B-</option>
                    <option VALUE="C+">C+</option>
                    <option VALUE="C">C</option>
                    <option VALUE="C-">C-</option>
                    <option VALUE="D+">D+</option>
                    <option VALUE="D">D</option>
                    <option VALUE="E">E</option>
                    </select>
               </td>';

                  } ?>
                  <td ><input type="number" name="attyear[]" id="attyearrequre" style="width: 100%" placeholder="att_year" required="required"></td>
                  <td ><input type="text" name="gpa[]" id="gparequre" style="width: 100%"></td>
                  <td><center><div class="tooltip2"><a class="btn btn-info mx-1 btn-sm" id="add"><i class="fas fa-fw fa-plus-square"></i></a><span class="tooltiptext">Add More</span></div></center></td>
                  
          </tr>
            </tbody>

    </table>

    <div class="col-md-2 offset-md-10" >
                <input type="reset" name=""> &nbsp;<input type="button"  value="submit" id="submit" class="btn-success">

    </div>
    <b><p></p></b>
    <!--   get Course , year , semi and attempt values to Db_result.php file-->
    <input type="hidden" name="course" value="<?php echo $course; ?>">
    <input type="hidden" name="year" value="<?php echo $year; ?>">
    <input type="hidden" name="semi" value="<?php echo $semi; ?>">
    <input type="hidden" name="attempt" value="<?php echo $attempt; ?>">
    </form>
    </div>
</div>
</div>
         <!--   START add more row in jquery code --->  
<script>
  $(document).ready(function(){
      $("#add").click(function(){
        $("#table").append('<tr align="center"><td><input  name="sid[]" id="sidrequre" style="width: 100%"  placeholder="VAV/IT/2018/F/0000"  pattern="[A-Z0-9/]+$"></td><?php for($a=0 ; $a<$count; $a++){  echo  '<td><select name="result[]" id="resultrequre"  required="required" ><option VALUE="">-</option><option VALUE="A+">A+</option><option VALUE="A">A</option><option VALUE="A-">A-</option><option VALUE="B+">B+</option><option VALUE="B">B</option><option VALUE="B-">B-</option><option VALUE="C+">C+</option><option VALUE="C">C</option><option VALUE="C-">C-</option><option VALUE="D+">D+</option><option VALUE="D">D</option><option VALUE="E">E</option></select></td>';}?><td ><input type="number" name="attyear[]" id="attyearrequre" style="width: 100%" placeholder="att_year"></td><td><input type="text" name="gpa[]" id="gparequre" style="width: 100%"  ></td> <td> <center><div class="tooltip2"><a class="btn btn-danger mx-1 btn-sm" id="del"><i class="far fa-trash-alt"></i></a><span class="tooltiptext">Delete</span></div></center> </td> </tr>'); 
         });

      $(document).on('click','#del',function(){
        $(this).closest("tr").remove() ;
      });

$("#submit").click(function(){
  $.ajax({
    url:"Db_result.php",
    type:"post",
    data:$("#form").serialize(),
    success:function(data)
    {
      $("p").html(data);
      }
  }); });

  });
</script>
         <!--   END add more row in jquery code --->  

<?php }

else
{         //for one more  Exam Attempt people  
  ?>
  <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-envelope-open-text"></i>
            Result Details</div>
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
              <form method="post" id="form" >   

              <table class="table table-bordered  " id="table"  width="100%" cellspacing="0">
                        <thead>
                    <tr>
                       
                   
                    <th width="120px">Stu_Id</th>  

                    <?php
                  
                     if (mysqli_num_rows($result)> 0) {
                            while ($row=mysqli_fetch_assoc($result)) 
                            {                            
                               echo '<th><div class="tooltip1">' .$row['sub_sname'].'<span class="tooltiptext"  style="width:150px;">' .$row['sub_fname']. '</span></div></th>';  
                               $count++;

                        }
                      } 

                    ?>

                   <!--  <th width="70px">GPA</th>  -->
                   <th width="80px"><div class="tooltip1">year<span class="tooltiptext"  style="width:150px;">Attempt Year</span></div></th>
                     <th width="70px">action</th>
                  </tr>

                </thead>

                 <tbody>

          <tr align="center">
                  
                  <td><input  name="sid[]" style="width: 100%" placeholder="VAV/IT/2018/F/0000"  pattern="[A-Z]{3}[/]{1}[A-Z]{1,3}[/]{1}[0-9]{4}[/]{1}[A-Z]{1}[/]{1}[0-9]{4}" title="Follow This Format VAV/IT/2018/F/0000" id="sidrequre"  required="required" ></td>


                  <?php
                  
                  for($a=0 ;$a<$count; $a++)
                  {  

              echo  '<td style="width: 70px;">
                   <select name="result[]" id=""   >
                <option VALUE="">-</option>
                    <option VALUE="A+">A+</option>
                    <option VALUE="A">A</option>
                    <option VALUE="A-">A-</option>
                    <option VALUE="B+">B+</option>
                    <option VALUE="B">B</option>
                    <option VALUE="B-">B-</option>
                    <option VALUE="C+">C+</option>
                    <option VALUE="C">C</option>
                    <option VALUE="C-">C-</option>
                    <option VALUE="D+">D+</option>
                    <option VALUE="D">D</option>
                    <option VALUE="E">E</option>
                    </select>
               </td>';

                  } ?>
                 
                 <!-- <td ><input type="text" name="gpa[]" style="width: 100%"></td>-->
                 <td ><input type="number" name="attyear[]" id="attyearrequre" style="width: 100%" placeholder="att_year"></td>
                  <td><center><div class="tooltip2"><a class="btn btn-info mx-1 btn-sm" id="add"><i class="fas fa-fw fa-plus-square"></i></a><span class="tooltiptext">Add More</span></div></center></td>
                  
          </tr>
            </tbody>

    </table>

    <div class="col-md-2 offset-md-10" >
                 <input type="reset" name=""> &nbsp;<input type="button"  value="submit" id="submit" class="btn-success">

    </div>
    <b><p></p></b>
    <!--   get Course , year , semi and attempt values to Db_result.php file-->
    <input type="hidden" name="course" value="<?php echo $course; ?>">
    <input type="hidden" name="year" value="<?php echo $year; ?>">
    <input type="hidden" name="semi" value="<?php echo $semi; ?>">
    <input type="hidden" name="attempt" value="<?php echo $attempt; ?>">
    </form>
    </div>
</div>
</div>
         <!--   START add more row in jquery code --->  
<script>
  $(document).ready(function(){
      $("#add").click(function(){
        $("#table").append('<tr align="center"><td><input  name="sid[]" style="width: 100%"  placeholder="VAV/IT/2018/F/0000"  pattern="[A-Z0-9/]+$"></td><?php for($a=0 ; $a<$count; $a++){  echo  '<td><select name="result[]" id=""  required="required" ><option VALUE="">-</option><option VALUE="A+">A+</option><option VALUE="A">A</option><option VALUE="A-">A-</option><option VALUE="B+">B+</option><option VALUE="B">B</option><option VALUE="B-">B-</option><option VALUE="C+">C+</option><option VALUE="C">C</option><option VALUE="C-">C-</option><option VALUE="D+">D+</option><option VALUE="D">D</option><option VALUE="E">E</option></select></td>';}?> <td ><input type="number" name="attyear[]" id="attyearrequre" style="width: 100%" placeholder="att_year"></td> <td> <center><div class="tooltip2"><a class="btn btn-danger mx-1 btn-sm" id="del"><i class="far fa-trash-alt"></i></a><span class="tooltiptext">Delete</span></div></center> </td> </tr>'); 
         });

      $(document).on('click','#del',function(){
        $(this).closest("tr").remove() ;
      });


$("#submit").click(function(){
  $.ajax({
    url:"Db_result.php",
    type:"post",
    data:$("#form").serialize(),
    success:function(data)
    {
      $("p").html(data);
      }
  }); });


  });
</script>
         <!--   END add more row in jquery code ---> 

<?php } ?>




  <!-- START Subject short and Full name table-->
         <div class="card " >
          <div class="card-header " align="center" >Subject Details</div>

          <div class="card-body">
<table class="table table-bordered  "  width="100%" cellspacing="0">
                        <thead>
                    <tr>
  <th >subject short Name</th>
  <th>subject Full Name</th>
  <th>subject short Name</th>
  <th>subject Full Name</th>
</tr>
</thead>
<tbody>
     <?php
                                                // subject names get from database
$sql1="SELECT * FROM subject WHERE sub_course='$course' AND  sub_year='$year' AND sub_semi='$semi' ";
      $result1=mysqli_query($db,$sql);
        $no=0;
     if (mysqli_num_rows($result1)> 0) {
            while ($row=mysqli_fetch_assoc($result1)) 
            {  
              $sname[$no]=$row['sub_sname'];
              $fname[$no]=$row['sub_fname'];
              $no++;
            }} 
                                        //subject short and full name in array
              for($a=0 ; $a<$no;$a++)
              {
                echo '<tr><td><b>'.$sname[$a].'</b></td>';
                echo '<td>'.$fname[$a++].'</td>';
                if($a<$no){
                echo '<td><b>'.$sname[$a].'</b></td>';
                echo '<td>'.$fname[$a].'</td></tr>';}

                else{echo '<td></td> <td></td>';}
              }
    ?>
</tbody>

</table>
</div>
</div>
<!-- END Subject short and Full name table-->

<?php include '../design/footer.php';?>