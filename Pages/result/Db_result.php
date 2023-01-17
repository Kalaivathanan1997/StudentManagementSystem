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


$col=count($_POST['result']);
$row=count($_POST['sid']);
$attempt= $_POST['attempt'];

$count=$col/$row;

if($row>=1){

for($i=0; $i<$row; $i++)
{

$a=$count*$i;
$b=$count*($i+1);
$c=1;
$sqlsub='';
$sqlres='';
$countresult=0;

if(trim($_POST['sid'][$i])!='')
{

$stuid=$_POST['sid'][$i];
$year = $_POST['attyear'][$i];

							

		$sqlre="SELECT * FROM register  WHERE s_ino='{$_POST["sid"][$i]}'";
		$resultre=mysqli_query($db,$sqlre);

		if(mysqli_num_rows($resultre)>0)
		{


			$sqlstu="SELECT * FROM $attempt  WHERE s_id='{$_POST["sid"][$i]}' AND r_year='{$_POST["year"]}' AND r_semi='{$_POST["semi"]}' ";
			$stucheck=mysqli_query($db,$sqlstu);
		
		if(mysqli_num_rows($stucheck)==0)
		{
$attyear=0;
if($attempt=="attempt1")
	{

		$resultcou=0;
		
				for($j=$a; $j<$b;$j++)
					{

					if(trim($_POST['result'][$j])!='')
				{
					$sub="r_sub$c,";
			        $res="'{$_POST["result"][$j]}',";
					$sqlres=$sqlres.$res;
					$sqlsub=$sqlsub.$sub;
				}
				else
				{
					$rescou[$resultcou]= $c." " ;
					$resultcou++;
			
				}

			 $c++;}
			 if(trim($_POST['attyear'][$i])!='')
			 {
			 	$attyear=0;
			 }
			 else
			 {
			 	$rescou[$resultcou]= $c." " ;
					
			 	$attyear=1;
			 }


			 if($resultcou==0 && $attyear==0)
			 {

	$sql="INSERT INTO $attempt (s_id,r_course,b_year,r_year,r_semi, $sqlsub r_gpa) VALUES ('{$_POST["sid"][$i]}','{$_POST["course"]}',$year,'{$_POST["year"]}','{$_POST["semi"]}', $sqlres {$_POST["gpa"][$i]})";
		mysqli_query($db,$sql);
			$countresult++;
				}
				else
				{
					$coun=count($rescou);
					echo "please fill the no of columns";
					for($q=0;$q<$coun;$q++)
					{
						echo $rescou[$q];

					}
					echo "in subject <br><br>";

				}
				

	}

	else
	{
		
		$sqlatt="SELECT * FROM attempt1  WHERE s_id='{$_POST["sid"][$i]}'";
		$resultatt=mysqli_query($db,$sqlatt);

		if(mysqli_num_rows($resultatt)>0)
		{
			$rescou=0;

			for($j=$a; $j<$b;$j++)
									{

									if(trim($_POST['result'][$j])!='')
								{
									$sub="r_sub$c,";
							        $res="'{$_POST["result"][$j]}',";
									$sqlres=$sqlres.$res;
									$sqlsub=$sqlsub.$sub;

									$rescou++;
							}

							 $c++;}
		
				if($rescou>0){

		$sql="INSERT INTO $attempt (s_id,r_course,b_year,r_year, $sqlsub r_semi) VALUES ('{$_POST["sid"][$i]}','{$_POST["course"]}','$year','{$_POST["year"]}', $sqlres '{$_POST["semi"]}')";

			mysqli_query($db,$sql);
				$countresult++;
			}
			else
			{
				echo "<span style='color:#FF7706; font-size:16px;'>Please enter the at lease one subject result to this ".$_POST["sid"][$i]." student </span><br><br> ";

			}
			}
			else{
				echo "<span style='color:#FF7706; font-size:16px;'>this Student not attemp the First attemp Exam So can not saved this ".$_POST["sid"][$i]." student </span><br><br> ";


			}

	}
}

else
{

echo "<span style='color:#C70039; font-size:16px;'>This student result allready submit. you need to change the value please go this plat <a href='../student/update_result.php?s_id=".$_POST["sid"][$i]."'>student Update result</a> </span><br><br> ";


}
		}
		else
		{
echo "<span style='color:#C70039; font-size:16px;'> can't find the student ID so please register First this ".$_POST["sid"][$i]." student </span><br><br> ";

}


}
else
{
	echo "<span style='color:red;'> No data values please enter the student Id </span><br><br> ";
}


}

echo "<span style='color:blue;'>".$countresult." No Of Students Result saved </span>";

}

 




?>