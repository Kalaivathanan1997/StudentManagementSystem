 <?php
 include 'config.php';


              $sql = "SELECT course FROM register";
             $result =$db->query($sql);
                $it=0;
                $a=0;
                $e=0;
				if ($result->num_rows > 0) { 
               
              	 
                  // output data of each row

                  while($row=$result->fetch_assoc()) 
                  {
                   if("HNDIT"==$row['course'] )
                   {
                   	$it++;
                   }
                    elseif ("HNDA"==$row['course']) {
                    	$a++;
                    }
                    else
                    {
                    	$e++;
                    }



                  }
                 
                 
              } 
              

 ?>