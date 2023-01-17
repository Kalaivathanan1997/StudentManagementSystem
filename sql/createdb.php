<?php
$conn = mysqli_connect('localhost', 'root', '');

// Check connection

if (!$conn) {


    die("Connection failed: " . mysqli_connect_error());


}


else{

echo "Connected successfully  <br>";


$sql = "CREATE DATABASE atisms1";


if (mysqli_query($conn, $sql))
 {

echo "atisms1 Database created successfully  <br>";


//start create table

$sql1="CREATE TABLE `alresult` (
  `s_ino` varchar(20) NOT NULL PRIMARY KEY,
  `a_ino` int(11) NOT NULL,
  `a_year` int(4) NOT NULL,
  `a_aggregate` double NOT NULL,
  `a_medi` varchar(10) NOT NULL,
  `a_sub1` varchar(50) NOT NULL,
  `a_mar1` varchar(2) NOT NULL,
  `a_sub2` varchar(50) NOT NULL,
  `a_mar2` varchar(2) NOT NULL,
  `a_sub3` varchar(50) NOT NULL,
  `a_mar3` varchar(2) NOT NULL,
  `a_mar4` varchar(2) NOT NULL,
  `a_mar5` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";



$conn1= mysqli_connect('localhost', 'root', '','atisms1');


if (mysqli_query($conn1, $sql1)) {


    echo "Table student1 created successfully <br> ";


} 

else {


    echo "Error creating table: " . mysqli_error($conn1);


}

//END create table


//start create table

$sql1="CREATE TABLE `course` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `c_fname` varchar(255) NOT NULL,
  `c_sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";



$conn1= mysqli_connect('localhost', 'root', '','atisms1');


if (mysqli_query($conn1, $sql1)) {


    echo "Table student2 created successfully <br> ";


} 

else {


    echo "Error creating table: " . mysqli_error($conn1);


}

//END create table
//start create table

$sql1="CREATE TABLE `olresult` (
  `s_ino` varchar(20) NOT NULL PRIMARY KEY,
  `o_ino` int(10) NOT NULL,
  `o_year` int(4) NOT NULL,
  `o_medi` varchar(10) NOT NULL,
  `o_mar1` varchar(2) NOT NULL,
  `o_mar2` varchar(2) NOT NULL,
  `o_mar3` varchar(2) NOT NULL,
  `o_mar4` varchar(2) NOT NULL,
  `o_mar5` varchar(2) NOT NULL,
  `o_mar6` varchar(2) NOT NULL,
  `o_sub7` varchar(50) NOT NULL,
  `o_mar7` varchar(2) NOT NULL,
  `o_sub8` varchar(50) NOT NULL,
  `o_mar8` varchar(2) NOT NULL,
  `o_sub9` varchar(50) NOT NULL,
  `o_mar9` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";


$conn1= mysqli_connect('localhost', 'root', '','atisms1');


if (mysqli_query($conn1, $sql1)) {


    echo "Table student3 created successfully <br> ";


} 

else {


    echo "Error creating table: " . mysqli_error($conn1);


}

//END create table



//start create table

$sql1="CREATE TABLE `register` (
  `s_ino` varchar(20) NOT NULL PRIMARY KEY,
  `course` varchar(255) NOT NULL,
  `s_fname` varchar(255) NOT NULL,
  `s_lname` varchar(255) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `age` smallint(5) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `p_add` varchar(255) NOT NULL,
  `c_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$conn1= mysqli_connect('localhost', 'root', '','atisms1');


if (mysqli_query($conn1, $sql1)) {


    echo "Table student3 created successfully <br> ";


} 

else {


    echo "Error creating table: " . mysqli_error($conn1);


}

//END create table



//start create table

$sql1="CREATE TABLE `subject` (
  `sub_id` varchar(11) NOT NULL PRIMARY KEY,
  `sub_fname` varchar(60) NOT NULL,
  `sub_sname` varchar(10) NOT NULL,
  `sub_course` varchar(10) NOT NULL,
  `sub_year` varchar(10) NOT NULL,
  `sub_semi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";



$conn1= mysqli_connect('localhost', 'root', '','atisms1');


if (mysqli_query($conn1, $sql1)) {


    echo "Table student3 created successfully <br> ";


} 

else {


    echo "Error creating table: " . mysqli_error($conn1);


}

//END create table


















    
} 


else {

    echo "Error creating database: " . mysqli_error($conn);

}




mysqli_close($conn);

}

?>