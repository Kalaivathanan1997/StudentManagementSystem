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
$check=mysqli_query($db,$sql);

	if (mysqli_num_rows($check)>0)
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
else
{
  header("location:manage_stu.php");
}
}

else
{
	header("location:manage_stu.php");
}


include '../design/header.php';

?>
<title>ATI_SMS</title>
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
	table{
  text-align: center;

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
           <li class="breadcrumb-item "><a href="manage_stu.php">Manage Students</a></li>
          <li class="breadcrumb-item active">Edit result</li>
        </ol>


<div class="row  ">
            <div class="col-12 ">         
                <div class="card">
                    <div class="card-header"><i class="fas fa-book-reader" ></i> Student Results Detail</div>
                    <div class="card-body">

            <form>


                <div class="form-group row">

                    <div class="col-md-5" >
                     <div id="img_div" class="mt-1">
        <?php      echo '<img src="../../assest/image/StudentProfile/'.$row['image_name'].'">';?>
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

                  </div>
                </form>

<hr ><br>

<div id="result">

<?php


if(isset($_POST['update']))
{
$total=count($_POST['result']);
$row=$attempt2=$_POST['attempt2'];
$col=$Rcount=$_POST['Rcount'];

if($row>=1){
$countresult=0;
for($i=0; $i<$row; $i++)
{

$a=$col*$i;             //loop start num
$b=$col*($i+1);         //loop End num
$c=1;
$sqlres='';

$atte="attempt".($i+1);
   

if($atte=="attempt1")
  {
    $resultcou=0;
        for($j=$a; $j<$b;$j++)
          {
          if(trim($_POST['result'][$j])!='')
            {
              $sub="r_sub$c='{$_POST["result"][$j]}',";
              $sqlres=$sqlres.$sub;
        }
        else
        {
          $rescou[$resultcou]= $c." " ;
          $resultcou++;
      
        }

       $c++;}

       if($resultcou==0)
       {

  $sql="UPDATE attempt1 SET b_year={$_POST["attyear"][$i]},r_course='$course',r_year='{$_POST["Ryear"]}',r_semi='{$_POST["Rsemi"]}', $sqlres r_gpa={$_POST["gpa"][$i]} WHERE s_id='$s_id'";
    mysqli_query($db,$sql);
      $countresult++;

      //echo $sql;
        }
        else
        {
          $coun=count($rescou);
          echo "please fill the number of columns";
          for($q=0;$q<$coun;$q++)
          {
            echo $rescou[$q];

          }
          echo "in subject <br><br>";

        }
        

  }

  else
  {
    $sqlatt="SELECT * FROM attempt1  WHERE s_id='$s_id'";
    $resultatt=mysqli_query($db,$sqlatt);

    if(mysqli_num_rows($resultatt)>0)
    {
      $rescou=0;

      for($j=$a; $j<$b;$j++)
                  {

                  if(trim($_POST['result'][$j])!='')
                {
                  $sub="r_sub$c='{$_POST["result"][$j]}',";
                  $sqlres=$sqlres.$sub;

                  $rescou++;
              }

               $c++;}
    
        if($rescou>0){

    $sql="UPDATE $atte SET  r_course='$course',r_year='{$_POST["Ryear"]}', $sqlres r_semi='{$_POST["Rsemi"]}' WHERE s_id='$s_id'";

      mysqli_query($db,$sql);
        $countresult++;
        //echo $sql;
      }
      else
      {
        echo "<span style='color:#FF7706; font-size:16px;'>Please enter the at lease one subject result to this ".$s_id." student </span><br><br> ";

      }
      }
      else{
        echo "<span style='color:#FF7706; font-size:16px;'>this Student not attemp the First attemp Exam So can not saved this ".$s_id." student </span><br><br> ";


      }

  }

    


}



}

echo "<span style='color:blue;'>".$countresult." No Of Students Result saved </span>";

}


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

if(isset($_POST['update']))
{
$Ryear=$_POST['Ryear'];
  $Rsemi=$_POST['Rsemi'];
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

			 
               
                
                    <form  action="#result" method="post">
                	<div class="row form-group col-12">
                    

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
                                	
                                	 <input class="btn btn-info " type="submit" id="filter"  name="filter" value="Select" >
                                    
                                </div>
                                <div class="col-md-6" >
                                    
                                </div>

                		  
                	</div>
            </form> 
 

<form  action="#result" method="post">
                	<div class=" table-responsive" ><br>
                <table class="table table-bordered "  cellspacing="0">
                	<thead>
                		<tr>
                			<th>Attempt</th>
                			<th style="width:50px;" >year</th>

  						<?php  	$Rcount=0;
  						while($row=mysqli_fetch_assoc($Rresult)){

  							echo'<th><div class="tooltip1">'.$row['sub_sname'].'<span class="tooltiptext"  style="width:150px;">' .$row['sub_fname']. '</span></div></th>';
  								$Rcount++;

  						}?>
  						<th >gpa</th>
              

                		</tr>
                	</thead>

                	<tbody>
                		<?php $attempt2=0;
                		for($a=0;$a<4; $a++){
                			if(mysqli_num_rows($Rresult1[$a])>0){

                				echo '<tr><td><b>'.$attempt[$a].'</b></td>';

                        $attempt2++;$row=mysqli_fetch_assoc($Rresult1[$a]);

                				echo '<td width="50%" ><input type="number" name="attyear[]" width="10px" value="'.$row['b_year'].'"></td>';
                				

                				for($e=1; $e<=$Rcount; $e++){
                					

                					$sub="r_sub$e";

                          ?>
                        

              <td  >
                   <select name="result[]" <?php if($attempt[$a]=="attempt1") { echo 'required="required"';} ?> >
                <option VALUE="">-</option>
                    <option <?php if($row[$sub]=="A+"){echo " selected ";} ?> VALUE="A+" >A+</option>
                    <option <?php if($row[$sub]=="A"){echo " selected ";} ?> VALUE="A" >A</option>
                    <option <?php if($row[$sub]=="A-"){echo " selected ";} ?> VALUE="A-" >A-</option>
                    <option <?php if($row[$sub]=="B+"){echo " selected ";} ?> VALUE="B+" >B+</option>
                    <option <?php if($row[$sub]=="B"){echo " selected ";} ?> VALUE="B" >B</option>
                    <option <?php if($row[$sub]=="B-"){echo " selected ";} ?> VALUE="B-" >B-</option>
                    <option <?php if($row[$sub]=="C+"){echo " selected ";} ?> VALUE="C+" >C+</option>
                    <option <?php if($row[$sub]=="C"){echo " selected ";} ?> VALUE="C" >C</option>
                    <option <?php if($row[$sub]=="C-"){echo " selected ";} ?> VALUE="C-" >C-</option>
                    <option <?php if($row[$sub]=="D+"){echo " selected ";} ?> VALUE="D+" >D+</option>
                    <option <?php if($row[$sub]=="D"){echo " selected ";} ?> VALUE="D" >D</option>
                    <option <?php if($row[$sub]=="E"){echo " selected ";} ?> VALUE="E" >E</option>
                    </select>
               </td>

                					
<?php

                				}
                        if ($attempt[$a]=="attempt1")
                        {

                         echo '<td ><input type="number" name="gpa" width="10px" value="'.$row['r_gpa'].'"></td>';
                        }
                        else{

                				echo '<td >'.$row['r_gpa'].'</td>';
                       }
                			}
                		}

                		?>
                	</tbody>


                </table>
                	</div>  
                                 
                   <input type="hidden" name="attempt2" value="<?php echo $attempt2 ?>">
                   <input type="hidden" name="Rcount" value="<?php echo $Rcount ?>">
                   <input type="hidden" name="Rsemi" value="<?php echo $Rsemi ?>">
                   <input type="hidden" name="Ryear" value="<?php echo $Ryear ?>">
<input class="btn btn-success offset-md-11" type="submit"    name="update" value="Update" >
                  <br> 
                 
<p></p>
         </form> 
      	
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
      $result1=mysqli_query($db,$sql1);
        $no=0;
     if (mysqli_num_rows($result1)> 0)
      {

            while ($row=mysqli_fetch_assoc($result1))
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