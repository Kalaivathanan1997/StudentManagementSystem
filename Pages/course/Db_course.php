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
if(isset($_POST['add_course']))
{


 
  $c_fname=$_POST['c_fname'];
  $c_sname=$_POST['c_sname'];



  $sql="INSERT INTO course(c_id,c_fname,c_sname) VALUES
   ('','$c_fname','$c_sname')";



   if(mysqli_query($db,$sql) )
   {
     
      header("location:view_course.php");
   }  
   else
   {   
      echo mysqli_error($db);
   }

}
 
if(isset($_POST['update_course']))
{


  $cid=$_POST['cid'];
  $c_fname=$_POST['c_fname'];
  $c_sname=$_POST['c_sname'];



  $sql="UPDATE  course SET c_fname='$c_fname',c_sname='$c_sname' WHERE c_id='$cid' ";



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