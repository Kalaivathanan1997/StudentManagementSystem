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
if(isset($_POST['register'])) 
{


  $s_ino=$_POST['s_ino'];
  $course=$_POST['course'];
  $s_iname=$_POST['s_iname'];
  $s_fname=$_POST['s_fname'];
  $dob=$_POST['dob'];
  $nic=$_POST['nic'];
  $gender=$_POST['gender'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $country=$_POST['country'];
  $state=$_POST['state'];
  $p_add=$_POST['p_add'];
  $c_add=$_POST['c_add'];

 $byear=substr($s_ino,-11,4);

  $o_year=$_POST['o_year'];
  $o_ino=$_POST['o_ino'];
  $o_medi=$_POST['o_medi'];
  $o_mar1=$_POST['o_mar1'];
  $o_mar2=$_POST['o_mar2'];
  $o_mar3=$_POST['o_mar3'];
  $o_mar4=$_POST['o_mar4'];
  $o_mar5=$_POST['o_mar5'];
  $o_mar6=$_POST['o_mar6'];
  $o_sub7=$_POST['o_sub7'];
  $o_mar7=$_POST['o_mar7'];
  $o_sub8=$_POST['o_sub8'];
  $o_mar8=$_POST['o_mar8'];
  $o_sub9=$_POST['o_sub9'];
  $o_mar9=$_POST['o_mar9'];



  $a_aggregate=$_POST['a_aggregate'];
  $a_year=$_POST['a_year'];
  $a_ino=$_POST['a_ino'];
  $a_medi=$_POST['a_medi'];
  $a_sub1=$_POST['a_sub1'];
  $a_mar1=$_POST['a_mar1'];
  $a_sub2=$_POST['a_sub2'];
  $a_mar2=$_POST['a_mar2'];
  $a_sub3=$_POST['a_sub3'];
  $a_mar3=$_POST['a_mar3'];
  $a_mar4=$_POST['a_mar4'];
  $a_mar5=$_POST['a_mar5'];


  if(empty($_FILES['image']['name']))
  {
   $image_name = '63c6548daae2f-1673942157.jpg';
  } 
  else
  {
   $filename   = uniqid() . "-" . time();
   $extension  = pathinfo( $_FILES["image"]["name"], PATHINFO_EXTENSION ); 
   $basename   = $filename . "." . $extension;

   $image_name = $basename;

   $uploaddir = '../../assest/image/StudentProfile/';
   $uploadfile = $uploaddir . basename($basename);
   move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile) ;
 
  

 }


// $sql3 = "INSERT INTO image (image, image_name) VALUES ( '$image', '$image_name')";


$sql="INSERT INTO register (s_ino,image_name,byear,course,s_iname,s_fname,dob,nic,gender,mobile,email,country,state,p_add,c_add) VALUES
('$s_ino', '$image_name','$byear','$course','$s_iname','$s_fname','$dob','$nic','$gender','$mobile','$email','$country','$state','$p_add','$c_add')";


$sql1="INSERT INTO olresult (s_ino,o_ino,o_year,o_medi,o_mar1,o_mar2,o_mar3,o_mar4,o_mar5,o_mar6,o_sub7,o_mar7,o_sub8,o_mar8,o_sub9,o_mar9) VALUES
   ('$s_ino','$o_ino','$o_year','$o_medi','$o_mar1','$o_mar2','$o_mar3','$o_mar4','$o_mar5','$o_mar6','$o_sub7','$o_mar7','$o_sub8','$o_mar8','$o_sub9','$o_mar9')";


$sql2="INSERT INTO alresult (s_ino,a_ino,a_year,a_aggregate,a_medi,a_sub1,a_mar1,a_sub2,a_mar2,a_sub3,a_mar3,a_mar4,a_mar5) VALUES
   ('$s_ino','$a_ino','$a_year','$a_aggregate','$a_medi','$a_sub1','$a_mar1','$a_sub2','$a_mar2','$a_sub3','$a_mar3','$a_mar4','$a_mar5')";


   if(mysqli_query($db,$sql) AND mysqli_query($db,$sql1) AND mysqli_query($db,$sql2) )
   { 
      
         //header("location:view_stu.php");
           
   }  
   else
   {   
      echo mysqli_error($db);
   }

}


 
if(isset($_POST['update_register']))
{
 

  $s_id=$_POST['s_id'];
  $course=$_POST['course'];

  
  $s_iname=$_POST['s_iname'];
  $s_fname=$_POST['s_fname'];
  $dob=$_POST['dob'];
  $nic=$_POST['nic'];
  $gender=$_POST['gender'];



  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $country=$_POST['country'];
  $state=$_POST['state'];
  $p_add=$_POST['p_add'];
  $c_add=$_POST['c_add'];

 

  $o_year=$_POST['o_year'];
  $o_ino=$_POST['o_ino'];
  $o_medi=$_POST['o_medi'];

  $o_mar1=$_POST['o_mar1'];
  $o_mar2=$_POST['o_mar2'];
  $o_mar3=$_POST['o_mar3'];
  $o_mar4=$_POST['o_mar4'];
  $o_mar5=$_POST['o_mar5'];
  $o_mar6=$_POST['o_mar6'];
  $o_sub7=$_POST['o_sub7'];
  $o_mar7=$_POST['o_mar7'];
  $o_sub8=$_POST['o_sub8'];
  $o_mar8=$_POST['o_mar8'];
  $o_sub9=$_POST['o_sub9'];
  $o_mar9=$_POST['o_mar9'];



  $a_aggregate=$_POST['a_aggregate'];
  $a_year=$_POST['a_year'];
  $a_ino=$_POST['a_ino'];
  $a_medi=$_POST['a_medi'];


  $a_sub1=$_POST['a_sub1'];
  $a_mar1=$_POST['a_mar1'];
  $a_sub2=$_POST['a_sub2'];
  $a_mar2=$_POST['a_mar2'];
  $a_sub3=$_POST['a_sub3'];
  $a_mar3=$_POST['a_mar3'];
  $a_mar4=$_POST['a_mar4'];
  $a_mar5=$_POST['a_mar5'];


  if(empty($_FILES['image']['name']))
  {
     
   $sql="UPDATE  register SET s_ino='$s_id', course='$course', s_iname='$s_iname', s_fname='$s_fname', dob='$dob',  nic='$nic',gender='$gender',mobile= $mobile, email='$email', country='$country', state='$state', p_add='$p_add', c_add='$c_add'    WHERE s_ino='$s_id' ";

  } 
  else
  {
   $filename   = uniqid() . "-" . time();
   $extension  = pathinfo( $_FILES["image"]["name"], PATHINFO_EXTENSION ); 
   $basename   = $filename . "." . $extension;

   $uploaddir = '../../assest/image/StudentProfile/';
   $uploadfile = $uploaddir . basename($basename);

 
   move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile) ;
   
   $sql="UPDATE  register SET s_ino='$s_id',image_name='{$basename}', course='$course', s_iname='$s_iname', s_fname='$s_fname', dob='$dob',  nic='$nic',gender='$gender',mobile= $mobile, email='$email', country='$country', state='$state', p_add='$p_add', c_add='$c_add'    WHERE s_ino='$s_id' ";

 }
 
  


$sql1="UPDATE   olresult SET   s_ino='$s_id',o_ino='$o_ino',o_year='$o_year',o_medi='$o_medi',o_mar1='$o_mar1',o_mar2='$o_mar2',o_mar3='$o_mar3',o_mar4='$o_mar4',o_mar5='$o_mar5',o_mar6='$o_mar6',o_sub7='$o_sub7',o_mar7='$o_mar7',o_sub8='$o_sub8',o_mar8='$o_mar8',o_sub9='$o_sub9',o_mar9='o_mar9'    WHERE s_ino='$s_id' ";


$sql2="UPDATE  alresult SET s_ino='$s_id',a_ino='$a_ino',a_year='$a_year',a_aggregate='$a_aggregate',a_medi='$a_medi',a_sub1='$a_sub1',a_mar1='$a_mar1',a_sub2='$a_sub2',a_mar2='$a_mar2',a_sub3='$a_sub3',a_mar3='$a_mar3',a_mar4='$a_mar4',a_mar5='$a_mar5'   WHERE s_ino='$s_id' ";

 if(mysqli_query($db,$sql) AND mysqli_query($db,$sql1) AND mysqli_query($db,$sql2) )
   { 
       
         header("location:manage_stu.php");
           
   }  
   else
   {   
      echo mysqli_error($db);
   }
}
?>