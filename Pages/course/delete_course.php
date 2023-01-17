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
if(isset($_GET['cid']))
{


  $cid=$_GET['cid'];
 



  $sql="DELETE FROM course WHERE c_id='$cid'";

   

   if(mysqli_query($db,$sql) )
   {
     
      header("location:manage_course.php");
   }  
   else
   {   
      echo mysqli_error($db);
   }

}


?>