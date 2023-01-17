
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
$sql1="SELECT * FROM olresult WHERE s_ino='$s_id'";
$sql2="SELECT * FROM alresult WHERE s_ino='$s_id'";

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
    $image_name = $row['image_name'];

	
	}

	if(mysqli_query($db,$sql1))
	{
		$row1=mysqli_fetch_assoc(mysqli_query($db,$sql1));

		$o_ino=$row1['o_ino'];
		$o_year=$row1['o_year'];
		$o_medi=$row1['o_medi'];
		$o_mar1=$row1['o_mar1'];
		$o_mar2=$row1['o_mar2'];
		$o_mar3=$row1['o_mar3'];
		$o_mar4=$row1['o_mar4'];
		$o_mar5=$row1['o_mar5'];
		$o_mar6=$row1['o_mar6'];
		$o_sub7=$row1['o_sub7'];
		$o_mar7=$row1['o_mar7'];
		$o_sub8=$row1['o_sub8'];
		$o_mar8=$row1['o_mar8'];
		$o_sub9=$row1['o_sub9'];
		$o_mar9=$row1['o_mar9'];
	}

	if(mysqli_query($db,$sql2))
	{
		$row2=mysqli_fetch_assoc(mysqli_query($db,$sql2));

		$a_ino=$row2['a_ino'];
		$a_year=$row2['a_year'];
		$a_aggregate=$row2['a_aggregate'];
		$a_medi=$row2['a_medi'];
		$a_sub1=$row2['a_sub1'];		
		$a_mar1=$row2['a_mar1'];
		$a_sub2=$row2['a_sub2'];
		$a_mar2=$row2['a_mar2'];
		$a_sub3=$row2['a_sub3'];
		$a_mar3=$row2['a_mar3'];
		$a_mar4=$row2['a_mar4'];
		$a_mar5=$row2['a_mar5'];
		
	}
}
include '../design/header.php';

?>

<title>ATI_SMS-View_Course</title>
<style type="text/css">
	label{
		font-size: 16px;
	}
  .label-b{
font-size: 16px;
    font-weight: bold;
    color:  #3B3B3B;
    text-transform: uppercase;

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
    width: 80%;
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

          <li class="breadcrumb-item active">View full Details</li>
        </ol>


<div class="row  ">
            <div class="col-12 ">         
                <div class="card">
                    <div class="card-header"><i class="fas fa-user-alt"></i> Student full Detail</div>
                    <div class="card-body">
            <form action="" method="">

                <div class="form-group row">

                    <div class="col-md-5 offset-md-1" >
                    <div id="img_div" class="mt-1">
        <?php      echo '<img src="../../assest/image/StudentProfile/'.$row['image_name'].'">';?>
                    </div>
                    </div>


                    						
			       	<div class="col-md-6" style="margin-left: -15px" >

			     <label class="col-md-5">INITIAL WITH NAME</label>
	       		<label class="label-b">:-&nbsp;&nbsp;<?php echo $iname; ?></label>

	       		<br>
	       		<label class="col-md-5" >Full NAME</label>
	       		<label class="label-b"> :-&nbsp;&nbsp;<?php echo $fname; ?></label >
	       	       	
	       	       	<br>
			     <label class="col-md-5">STUDENT ID</label>
	       		<label class="label-b" >:-&nbsp;&nbsp;<?php echo $s_id; ?></label >

	       		<br>
			     <label class="col-md-5">NATIONAL IC NO</label>
	       		<label class="label-b" >:-&nbsp;&nbsp;<?php echo $nic; ?></label >

	       		<br>
			     <label class="col-md-5">DATE OF BIRTH</label>
	       		<label class="label-b" >:-&nbsp;&nbsp;<?php echo $dob; ?></label >

	       		<br>
			     <label class="col-md-5">GENDER</label>
	       		<label class="label-b" >:-&nbsp;&nbsp;<?php echo $gender; ?></label >
	       		  		       	       		      		
	       		
			       </div>

                  </div>
<hr>

<br>

<div class="form-group row">

                       <div class="col-md-5 offset-md-1 "><div class="row">
                         <label class="col-md-5">FOLLOW COURSE</label>
                         <label class="label-b" >:-&nbsp;&nbsp; <?php echo $course; ?></label></div>   
                         <br>
                         <div class="row">
                        <label class="col-md-5">MOBILE NO</label>                     
                         <label class="label-b">:-&nbsp;&nbsp; <?php echo $mobile; ?></label> </div> 
                         <br>
                         <div class="row">
                         <label class="col-md-5">PER_ADDRESS</label>           
                         <label class="label-b col-md-6">:-&nbsp;&nbsp;vavuniya omanthai <?php echo $padd; ?></label ></div>
                         
                       </div>

                       <div class="col-md-6">
                        <div class="row">
                         <label class="col-md-5">DISTRIC</label>                
                          <label class="label-b" >:-&nbsp;&nbsp; <?php echo $state; ?></label></div>   
                      <br>
                        <div class="row">
                         <label class="col-md-5">EMAIL ADDRESS</label>
                          <label class="label-b" >:-&nbsp;&nbsp; <?php echo $email; ?></label></div>   
                       <br>
                       <div class="row">
                       <label class="col-md-5" >COR_ADDRESS</label>
                          <label class="label-b col-md-6 " >:-&nbsp;&nbsp;vavuniya omanthai  srhsy tye <?php echo $cadd; ?></label ></div>
                        
                           
                        </div> 
            </div>

                      
                       
                         

    
  

<br><hr><br>
<div class="form-group row">
	<div class="col-6">
		<div class="card">
			<div class="card-header"> <b>O/l Result</b></div>
		<div class="card-body">
			<div class="row">
	<div class="col-md-3">
		 <label>Year:-&nbsp;<?php echo $o_year; ?></label> 
		</div>
		<div class="col-md-4">
		<label>Medium:-&nbsp;<?php echo $o_medi; ?></label>
		</div>
		<div class="col-md-4">
		 <label>Index_No:-&nbsp;<?php echo $o_ino; ?></label>
		</div>	
</div><br>
<div class="table-responsive ">
            <table class="table ">

                 <thead>
                    <tr>                     
			      <th>No</th>
			        
			      
			      <th>Subject Name</th>
			       
			              
			       <th>Result</th>
      					                                
                                        
            </tr>
        </thead>
        <tbody>
        	<tr>
        	<td>1</td>
        	<td>Religion</td>
        	<td><?php echo $o_mar1; ?></td>
        	</tr>
        	<tr>
        	<td>2</td>
        	<td>Language &Literaure</td>
        	<td><?php echo $o_mar2; ?></td>
        	</tr>
        	
        	<tr>
        	<td>3</td>
        	<td>English</td>
        	<td><?php echo $o_mar3; ?></td>
        	</tr>
        	<tr>
        	<td>4</td>
        	<td>Mathematics</td>
        	<td><?php echo $o_mar4; ?></td>
        	</tr>
        	<tr>
        	<td>5</td>
        	<td>History</td>
        	<td><?php echo $o_mar5; ?></td>
        	</tr>
        	<tr>
        	<td>6</td>
        	<td>Science</td>
        	<td><?php echo $o_mar6; ?></td>
        	</tr>
        	<tr>
        	<td>7</td>
        	<td><?php echo $o_sub7; ?></td>
        	<td><?php echo $o_mar7; ?></td>
        	</tr>
        	<tr>
        	<td>8</td>
        	<td><?php echo $o_sub8; ?></td>
        	<td><?php echo $o_mar8; ?></td>
        	</tr>
        	<tr>
        	<td>9</td>
        	<td><?php echo $o_sub9; ?></td>
        	<td><?php echo $o_mar9; ?></td>
        	</tr>
        </tbody>


</table>
</div>
   </div>
  </div> 
</div>

<div class="col-6">
	<div class="card">
		<div class="card-header"> <b>A/l Result</b></div>
		<div class="card-body">
			<div class="row">
	<div class="col-md-3">
		 <label>Year:-&nbsp;<?php echo $a_year; ?></label> 
		</div>
		<div class="col-md-4">
		<label>Medium:-&nbsp;<?php echo $a_medi; ?></label>
		</div>
		<div class="col-md-4">
		 <label>Index_No:-&nbsp;<?php echo $a_ino; ?></label>
		</div>	
</div><br>
<div class="table-responsive ">
            <table class="table ">

                 <thead>
                    <tr>                     
			      <th>No</th>
			        
			      
			      <th>Subject Name</th>
			       
			              
			       <th>Result</th>
      					                                
                                        
            </tr>
        </thead>
        <tbody>
        	<tr>
        	<td>1</td>
        	<td><?php echo $a_sub1; ?></td>
        	<td><?php echo $a_mar1; ?></td></td>
        	</tr>
        	<tr>
        	<td>2</td>
        	<td><?php echo $a_sub2; ?></td></td>
        	<td><?php echo $a_mar2; ?></td></td>
        	</tr>
        	<tr>
        	<td>3</td>
        	<td><?php echo $a_sub3; ?></td></td>
        	<td><?php echo $a_mar3; ?></td></td>
        	</tr>
        	<tr>
        	<td>4</td>
        	<td>General English</td>
        	<td><?php echo $a_mar4; ?></td>
        	</tr>
        	<tr>
        	<td>5</td>
        	<td>Common General Test</td>
        	<td><?php echo $a_mar5; ?></td>
        	</tr>
        	
        </tbody>
</table>
<br>
<div>
	<label class="offset-md-3">Average Z_Score</label> <label1>:-&emsp;<?php echo $a_aggregate; ?></label1>

</div>

</div>
   </div>
  </div> 
</div>

</div>






    </form>
                </div>
            </div>
        </div></div>
        <?php include '../design/footer.php';?>
