<?php
include 'config.php';

$scourse=0;
if(isset($_POST['Ssubmit'])) 
{
	$scourse=$_POST['Ssubmit'];

$link=' WHERE course='."'".$scourse."'";

 $sql = "SELECT * FROM register".$link;
                      }
                      else
                  
                      {
              $sql = "SELECT * FROM register ";
            } echo $sql;

                    

?>
