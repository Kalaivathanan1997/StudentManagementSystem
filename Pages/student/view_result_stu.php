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


if(isset($_GET['s_id']))
{
$s_id=$_GET['s_id'];

$sql="SELECT * FROM register WHERE s_ino='$s_id'";

	if(mysqli_query($db,$sql))
	{
		$row=mysqli_fetch_assoc(mysqli_query($db,$sql));
		
		$course=$row['course'];
		$iname=$row['s_iname'];
		$fname=$row['s_fname'];
		$dob=$row['dob'];
		$nic=$row['nic'];
		$gender=$row['gender'];
		$mobile=$row['mobile'];
		$email=$row['email'];
		$state=$row['state'];
		$padd=$row['p_add'];
		$cadd=$row['c_add'];

	}

}
else
{
	header("location:view_stu.php");
}


include '../design/header.php';

?>
<title>ATI_SMS-View_Course</title>
<style type="text/css">
	label{
		font-size: 16px;
	}
	label1{
		font-size: 16px;
		font-weight: bold;
		color:  #3B3B3B;
		text-transform: uppercase;
	}
	table, th, td {
		border: 1px solid black;
	}
  #img_div{
    width: 45%;
    padding: 5px;
    margin: 15px auto;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   img{
    float: left;
    margin: 5px;
    width: 150px;
    height: 170px;
   } 



</style>
</head>
<body id="page-top">

<?php include '../design/topside.php' ;?>

<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a >
              <i class="fas fa-users"></i>
            Student</a>
          </li>
           <li class="breadcrumb-item "><a href="view_stu.php">View_Students</a></li>
          <li class="breadcrumb-item active">student results overview</li>
        </ol>


<div class="row  ">
            <div class="col-12 ">         
                <div class="card">
                    <div class="card-header"><i class="fas fa-book-reader" ></i> Student Results Detail</div>
                    <div class="card-body">

            <form >

                <div class="form-group row">

                    <div class="col-md-5" >
                    <div id="img_div" class="mt-1">
        <?php      echo '<img src="data:image/png;base64,'.base64_encode($row['image']).'">';?>
                    </div>
                    </div>


                    						
			       	<div class="col-md-7">

			     <label class="col-md-4">NAME WITH INITIAL</label>
	       		<label1 >:-&nbsp;&nbsp;<?php echo $iname; ?></label1>

	       		<br>
	       		<label class="col-md-4" >FULL NAME</label>
	       		<label1> :-&nbsp;&nbsp;<?php echo $fname; ?></label1>
	       	       	
	       	       	<br>
			     <label class="col-md-4">STUDENT ID</label>
	       		<label1 >:-&nbsp;&nbsp;<?php echo $s_id; ?></label1>

	       		<br>
			     <label class="col-md-4">NATIONAL IC NO</label>
	       		<label1 >:-&nbsp;&nbsp;<?php echo $nic; ?></label1>

	       		<br>
			     <label class="col-md-4">DATE OF BIRTH</label>
	       		<label1 >:-&nbsp;&nbsp;<?php echo $dob; ?></label1>

	       		<br>
			     <label class="col-md-4">GENDER</label>
	       		<label1 >:-&nbsp;&nbsp;<?php echo $gender; ?></label1>
	       		<br>
            <label class="col-md-4">FOLLOW COURSE</label>
            <label1 >:-&nbsp;&nbsp; <?php echo $course; ?></label1>  		       	       		      		
	       		
			       </div>

                  </div></form>
<hr><br>

<div id="result">
<?php
if(isset($_POST['filter']))
{
	$Ryear=$_POST['year'];
	$Rsemi=$_POST['semi'];
}

else
{
	$Ryear="1st";
	$Rsemi="1st";
}

$Rsql="SELECT * FROM subject WHERE  sub_course='$course'AND  sub_year='$Ryear' AND sub_semi='$Rsemi'";

$Rresult=mysqli_query($db,$Rsql);



for($att=0; $att<=3; $att++)
{
	$attempt[$att]="attempt".($att+1);

	$Rsql1="SELECT * FROM $attempt[$att]  WHERE s_id='$s_id' AND r_year='$Ryear' AND  r_semi='$Rsemi' ";
	$Rresult1[$att]=mysqli_query($db,$Rsql1);



}

?>

			 <form action="#result" method="post">
                <div class="form-group row">
                	
                	<div class="row col-12">

                		<div class="col-md-2 " required="required">
                                 <select class="form-control"  name="year" id=""  required="required"  >
                                      <option value="">Year</option>
                                      <option value="1st">1st Year</option>
                                      <option value="2nd">2nd Year</option>
                                      <option value="3rd">3rd Year</option>
                                      <option value="4th">4th Year</option>

                                    </select>   
                                </div>

                		<div class="col-md-2"  required="required" >
                                    <select class="form-control" name="semi" id="" required="required" >
                                      <option value="">Semister</option>
                                      <option value="1st">1st Semi</option>
                                      <option value="2nd">2nd Semi</option>
                                    </select> 
                                </div>
                                <div class="col-md-2" >
                                	
                                	 <input class="btn btn-info " type="submit" name="filter" value="Select" >
                                    
                                </div>

                		 
                	</div>

                	<div class="table-responsive"><br>
                <table class="table table-bordered table-striped " id="table" width="100%" cellspacing="0">
                	<thead>
                		<tr>
                			<th width="80">Attempt</th>
                			<th>year</th>

  						<?php  	$Rcount=0;
  						while($row=mysqli_fetch_assoc($Rresult)){

  							echo'<th><div class="tooltip1">'.$row['sub_sname'].'<span class="tooltiptext"  style="width:150px;">' .$row['sub_fname']. '</span></div></th>';
  								$Rcount++;

  						}?>
  						<th>gpa</th>

                		</tr>
                	</thead>

                	<tbody>
                		<?php
                		for($a=0;$a<4; $a++){
                			if(mysqli_num_rows($Rresult1[$a])>0){

                				echo '<tr><td><b>'.$attempt[$a].'</b></td>';
                				echo '<td>'.$row['b_year'].'</td>';
                				$row=mysqli_fetch_assoc($Rresult1[$a]);

                				for($b=1; $b<=$Rcount; $b++){
                					

                					$sub="r_sub$b";

                					echo '<td>'.$row[$sub].'</td>';


                				}

                				echo '<td>'.$row['r_gpa'].'</td></tr>';

                			}
                		}

                		?>
                	</tbody>


                </table>
                	</div>
     		   </div></form>
     		   </div>        	

</div>
</div>
</div>
</div>

<br>
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
$sql1="SELECT * FROM subject WHERE sub_course='$course' AND  sub_year='$Ryear' AND sub_semi='$Rsemi' ";
      $result=mysqli_query($db,$sql1);
        $no=0;
     if (mysqli_num_rows($result)> 0)
      {

            while ($row=mysqli_fetch_assoc($result))
            {  
              $subsname[$no]=$row['sub_sname'];

              $subfname[$no]=$row['sub_fname'];

              $no++;
            }} 



                                        //subject short and full name in array
              for($a=0 ; $a<$no;$a++)
              {
                echo '<tr><td><b>'.$subsname[$a].'</b></td>';
                echo '<td>'.$subfname[$a++].'</td>';
                
                if($a<$no){
                echo '<td><b>'.$subsname[$a].'</b></td>';
                echo '<td>'.$subfname[$a].'</td></tr>';}

                else{echo '<td></td> <td></td>';}
              }
    ?>
</tbody>

</table>
</div>
</div>
<!-- END Subject short and Full name table-->










<?php include '../design/footer.php';?>