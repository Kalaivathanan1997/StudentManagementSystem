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
if(isset($_POST['add_subject']))
{


  $sub_id=$_POST['sub_id'];
  $sub_fname=$_POST['sub_fname'];
  $sub_sname=$_POST['sub_sname'];
  $sub_cre=$_POST['sub_cre'];
  $sub_course=$_POST['sub_course'];
  $sub_year=$_POST['sub_year'];
  $sub_semi=$_POST['sub_semi'];




  $sql="INSERT INTO subject(sub_id,sub_fname,sub_sname,sub_cre,sub_course,sub_year,sub_semi) VALUES
   ('$sub_id','$sub_fname','$sub_sname',$sub_cre,'$sub_course','$sub_year','$sub_semi')";



   if(mysqli_query($db,$sql) )
   {
     
      header("location:view_subject.php");
   }  
   else
   {   
      echo mysqli_error($db);
   }

}
 
if(isset($_POST['update_subject']))
{


  $sb_id=$_POST['sb_id'];
  $sub_fname=$_POST['sub_fname'];
  $sub_sname=$_POST['sub_sname'];
  $sub_cre=$_POST['sub_cre'];
  $sub_course=$_POST['sub_course'];
  $sub_year=$_POST['sub_year'];
  $sub_semi=$_POST['sub_semi'];



  $sql="UPDATE  subject SET sub_id='$sb_id',sub_fname='$sub_fname',sub_sname='$sub_sname',sub_cre=$sub_cre,sub_course='$sub_course',sub_year='$sub_year',sub_semi='$sub_semi' WHERE sub_id='$sb_id' ";



   if(mysqli_query($db,$sql) )
   {
     
      header("location:manage_subject.php");
   }  
   else
   {   
      echo mysqli_error($db);
   }

}
?>