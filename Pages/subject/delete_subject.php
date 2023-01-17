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
if(isset($_GET['sb_id']))
{


  $sb_id=$_GET['sb_id'];




  $sql="DELETE FROM subject WHERE sub_id='$sb_id'";



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