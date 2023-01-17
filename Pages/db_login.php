<?php 

session_start();

$db=mysqli_connect('localhost','root','','atisms');

if(isset($_POST['login']))
{

	if(empty($_POST['name']) || empty($_POST['password']))
	{

		header('location: login.php?empty= Plesae Fill In The Blank ');

	}
	else
	{

		$sql="SELECT * FROM login WHERE user='".$_POST['name']."' AND password='".$_POST['password']."'";

			$result=mysqli_query($db,$sql);
			if($row=mysqli_fetch_assoc($result))
			{
				if(1==$row['id'])
				{

				$_SESSION['admin']=$_POST['name'];
				$_SESSION['id']=$row['id'];   // ithuku enra project kku use panrathukku you don't need this
				header('location: design/Home.php');

				}
				elseif (2==$row['id']) 				
				{

				$_SESSION['user']=$_POST['name'];
				$_SESSION['id']=$row['id'];  // ithuku enra project kku use panrathukku you don't need this
				header('location: design/Home.php');

				}

			}
			else
			{

				header('location: login.php?invalit= Please Enter Correct Values');

			}


	}




}


?>