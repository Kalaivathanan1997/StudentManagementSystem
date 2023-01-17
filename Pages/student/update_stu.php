 <?php


session_start();

if(! isset($_SESSION['admin']))
{

if(! isset($_SESSION['user']))
{

  header('location:../../index.php');
  
}
}



  include '../../config/config.php';?>

<?php include '../design/header.php';?>

<style >
label{
    font-weight: bold;
     }
</style>


<title>ATI-SMS</title>
</head>
<body id="page-top">

<?php include '../design/topside.php' ;?>


<?php

       
        if(isset($_GET['s_id']))
        {
          $s_id=$_GET['s_id'];
          $record = mysqli_query($db, "SELECT * FROM register WHERE s_ino='$s_id' ");
                  $R = mysqli_fetch_array($record);
               

  $s_ino=$R['s_ino'];
  $course=$R['course'];
  $image_name = $R['image_name'];


  $s_iname=$R['s_iname'];
  $s_fname=$R['s_fname'];
  $dob=$R['dob'];
  $nic=$R['nic'];
  $gender=$R['gender'];



  $mobile=$R['mobile'];
  $email=$R['email'];
  $country=$R['country'];
  $state=$R['state'];
  $p_add=$R['p_add'];
  $c_add=$R['c_add'];





                  $record1 = mysqli_query($db, "SELECT * FROM olresult WHERE s_ino='$s_id' ");
                  $O = mysqli_fetch_array($record1);
                


  $o_year=$O['o_year'];
  $o_ino=$O['o_ino'];
  $o_medi=$O['o_medi'];

  $o_mar1=$O['o_mar1'];
  $o_mar2=$O['o_mar2'];
  $o_mar3=$O['o_mar3'];
  $o_mar4=$O['o_mar4'];
  $o_mar5=$O['o_mar5'];
  $o_mar6=$O['o_mar6'];
  $o_sub7=$O['o_sub7'];
  $o_mar7=$O['o_mar7'];
  $o_sub8=$O['o_sub8'];
  $o_mar8=$O['o_mar8'];
  $o_sub9=$O['o_sub9'];
  $o_mar9=$O['o_mar9'];








                  $record2 = mysqli_query($db, "SELECT * FROM alresult WHERE s_ino='$s_id' ");
                  $A = mysqli_fetch_array($record2);
                




  $a_aggregate=$A['a_aggregate'];
  $a_year=$A['a_year'];
  $a_ino=$A['a_ino'];
  $a_medi=$A['a_medi'];


  $a_sub1=$A['a_sub1'];
  $a_mar1=$A['a_mar1'];
  $a_sub2=$A['a_sub2'];
  $a_mar2=$A['a_mar2'];
  $a_sub3=$A['a_sub3'];
  $a_mar3=$A['a_mar3'];
  $a_mar4=$A['a_mar4'];
  $a_mar5=$A['a_mar5'];








                }


      ?>




   <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a >
              <i class="fas fa-users"></i>
            Student</a>
          </li>
          <li class="breadcrumb-item">
            <a href="manage_stu.php">
            Manage Student</a></li>
          <li class="breadcrumb-item active">Update Student Details</li>
        </ol>

<form action="Db_register.php" method="post" enctype="multipart/form-data" >
        <div class="row  ">
            <div class="col-12 ">

                <div class="card">
                    <div class="card-header"><i class="far fa-address-card"></i> Register</div>
                    <div class="card-body ">




                      <div class="form-group row justify-content-center " >

                            <div class="form-group row justify-content-center col-md-6">
                              <div class="col-md-4">
                                 <label>Course<span id="" style="font-size:11px;color:red">*</span>  </label>
                              </div>
                                <div class="col-md-8" >
                          <select class="form-control" name="course" value="<?php echo $course; ?>" required="required">
                                 <option value="">SELECT</option>
                                      <?php

                                        include '../../config/config.php';

                                       $sql = "SELECT c_sname FROM course";

                                          $result = $db->query($sql);
                                          if ($result->num_rows > 0) 
                                          {
                                              while($row = $result->fetch_assoc()) 

                                              {$A="";
                                                if($course==$row['c_sname']){$A=" selected";}

                                      echo '<option  VALUE='.$row["c_sname"] . $A.'>'. $row['c_sname'] .'</option>';

                                              }
                                            }
                                            ?>
                                </select>
                                </div>


                                     <div class="col-md-4"><br>
                                <label>Index No<span id="" style="font-size:11px;color:red">*</span>  </label>  

                              </div>
                              <div class="col-md-8"><br>
                               <input value="<?php echo $s_ino; ?>" class="form-control" type="type" name="s_ino" required="required" pattern="[A-Z]{3}[/]{1}[A-Z]{1,3}[/]{1}[0-9]{4}[/]{1}[A-Z]{1}[/]{1}[0-9]{4}" title="Follow This Format VAV/IT/2018/F/0000" readonly>   

                              </div>
                            </div>

                            
                    <div class="form-group row justify-content-center col-md-6">
                         
                         <div class="col-md-4 offset-md-1 mt-2"><br><br>
                      <label>Select The Image: </label></div>

                      <div class="col-md-7"><br><br>
                      <input class="form-control" type="file" name="image"></div>


                      </div>
                    </div>


                                   

                         </div>
              </div>
      </div>        
</div>
       
    <br>            



<div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fas fa-user-alt"></i>
                    Pertional Details</div>
                    <div class="card-body">
                            <div class="form-group row">
                              <div class="col-md-2">
                                 <label>Initial With Name<span id="" style="font-size:11px;color:red">*</span>  </label>
`
                              </div>
                                <div class="col-md-4">
                                 <input value="<?php echo $s_iname; ?>" class="form-control" name="s_iname" required="required"  type="text" pattern="[A-Za-z]{1}[.]{1}[A-Za-z]{5,50}" >   

                                </div>
                                <div class="col-md-2">
                                 <label>Full Name<span id="" style="font-size:11px;color:red">*</span>  </label>

                              </div>
                                <div class="col-md-4">
                                  <input value="<?php echo $s_fname; ?>" class="form-control" type="text" name="s_fname" required="required" placeholder="Surename forename" maxlength="30" pattern="[A-Za-z]+[ ]{1}[A-Za-z]+">   

                                </div>
                            </div>
                <div class="form-group row">
                              <div class="col-md-2">
                               <label>Date Of Birth<span id="" style="font-size:11px;color:red">*</span> </label>  

                              </div>
                                <div class="col-md-4">
                                 <input value="<?php echo $dob; ?>" class="form-control" name="dob" type="date" >      

                                </div>
                                
                                 <div class="col-md-2">
                               <label>National_IC NO<span id="" style="font-size:11px;color:red">*</span> </label>  

                              </div>
                                <div class="col-md-4">
                                 <input value="<?php echo $nic; ?>" class="form-control" name="nic" type="text" maxlength="12" >      

                                </div>
                                
                            </div>
                            
                          <div class="form-group row">
                             
                                <div class="col-md-2">
                                 <label>Genter<span id="" style="font-size:11px;color:red">*</span> </label> 
                               </div>

                                <div class="col-md-4">
                                  <?php 
                                      if (strcasecmp($gender,"Male")==0){?>
                                    <input type="radio" name="gender" id="male" value="Male" required="required" checked> &nbsp; Male &nbsp;
                                    <?php }else{ ?>
                                    <input type="radio" name="gender" id="male" value="Male" required="required"> &nbsp; Male &nbsp;
                                    <?php }?>
                                    <?php 
                                      if (strcasecmp($gender,"female")==0){?>
                                    <input type="radio" name="gender" id="female" value="female" checked> &nbsp; Female &nbsp;
                                    <?php } else{?>
                                    <input type="radio" name="gender" id="female" value="female"> &nbsp; Female &nbsp;
                                    <?php }?>
     
                                </div>
                            </div>
                         </div>        
               



        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><i class="far fa-address-book"></i>  Contact_Detail</div>
                    <div class="card-body">
            <div class="form-group row">
        <div class="col-lg-2">
      <label>Mobile Number<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input value="<?php echo $mobile; ?>" class="form-control" type="number" name="mobile" required="required" maxlength="10">
      </div>

       <div class="col-lg-2">
      <label>Email Id<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <input value="<?php echo $email; ?>" class="form-control"  type="email" name="email" required="required">
      </div>
      </div>
       
        <div class="form-group row">
        <div class="col-lg-2">
      <label>Country</label>
      </div>

      <div class="col-lg-4">
      
      <input  value="<?php echo $country; ?>" class="form-control" type="text"  name="country">
      </div>


       <div class="col-lg-2">
      <label>District</label>
      
      </div>
      <div class="col-lg-4">
        <input value="<?php echo $state; ?>" class="form-control" type="text" name="state">

      </div>
      

      </div>  
      
        <div class="form-group row"> 
       <div class="col-lg-2">
      <label>Permanent Address<span id="" style="font-size:13px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <textarea  class="form-control" rows="3" name="p_add" id="p_add" required="required"><?php echo $p_add; ?></textarea>
      </div>
         <div class="col-lg-2">
      <label>Correspondence Address</label>
      
      </div>
      <div class="col-lg-4">
      <textarea value="<?php echo $c_add; ?>" class="form-control" rows="3" name="c_add"  id="c_add"><?php echo $c_add; ?></textarea>
      </div>
      
      </div>  
      </div>

</div>
</div>
</div>


<div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-book-reader" ></i> Academic Informations</div>
                    <div class="card-body">
                        
            <div class="form-group row">
        <div class="col-lg-2">
      <label>O/L Result Details</label>
      
      </div>
    </div>
      
        <div class="form-group row">
          <div class="col-lg-1">
            <label>Year<span id="" style="font-size:13px;color:red">*</span> :- </label>
          </div>
          <div class="col-lg-2">
            <input value="<?php echo $o_year; ?>" class="form-control" type="number" name="o_year" required="required" maxlength="4" >
          </div>

          <div class="col-lg-2">
            <label>Index No<span id="" style="font-size:13px;color:red">*</span> :-</label>
          </div>
          <div class="col-lg-2">
            <input value="<?php echo $o_ino; ?>" class="form-control" type="number" name="o_ino" required="required" maxlength="8" >
          </div>

          <div class="col-lg-2">
            <label>Medium<span id="" style="font-size:13px;color:red">*</span> :- </label>
          </div>
          <div class="col-lg-2">
            <select value="<?php echo $o_medi; ?>" class="form-control" name="o_medi" id="" required="required" > 
            <option VALUE="">SELECT</option>
            <option <?php if($o_medi=="Tamil"){echo "selected";}  ?> VALUE="Tamil">Tamil</option>
            <option <?php if($o_medi=="English"){echo "selected";}  ?> VALUE="English">English</option>
            <option <?php if($o_medi=="Sinhalam"){echo "selected";}  ?> VALUE="Sinhalam">Sinhalam</option>
          </select>

          </div>


      </div>

      <div class="form-group">
      <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                       <div class="table-responsive">
                                <table class="table">
                                     <thead>
                                        <tr>
                                         <div class="col-lg-6">
      <th>S.No</th>
      </div>   
            <div class="col-lg-6">
      <th>&nbsp;&nbsp;&nbsp;&nbsp;Subject Name</th>
      </div>   
              <div class="col-lg-6">
       <th>&nbsp;&nbsp;&nbsp;&nbsp;Result</th>
      </div>                                 
                                        
            </tr>
        </thead>
        <tbody>

            
                     <tr>
                  <td>1</td>
                  <td><div class="col-lg-6">
      Religion
      </div></td>
                  <td><div class="col-lg-6">
       <select value="<?php echo $o_mar1; ?>" class="form-control" name="o_mar1" id=""  required="required" >
        <option  <?php if($o_mar1=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if( $o_mar1 =="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($o_mar1=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($o_mar1=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($o_mar1=="W"){echo "selected";}  ?> VALUE="W">W</option>
        <option <?php if($o_mar1=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr> 
                   
   <tr>
                  <td>2</td>
                  <td><div class="col-lg-6">
      Language & Literature
      </div></td>
                  <td><div class="col-lg-6">
       <select value="<?php echo $o_mar2; ?>" class="form-control" name="o_mar2" id=""  required="required" >
         <option  <?php if($o_mar2=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if($o_mar2=="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($o_mar2=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($o_mar2=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($o_mar2=="W"){echo "selected";}  ?> VALUE="W">W</option>
        <option <?php if($o_mar2=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr>

                     <tr>
                  <td>3</td>
                  <td><div class="col-lg-6">
      English
      </div></td>
                  <td><div class="col-lg-6">
       <select value="<?php echo $o_mar3; ?>" class="form-control" name="o_mar3" id=""  required="required" >
         <option  <?php if($o_mar3=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if($o_mar3=="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($o_mar3=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($o_mar3=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($o_mar3=="W"){echo "selected";}  ?> VALUE="W">W</option>
        <option <?php if($o_mar3=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr>   

                     <tr>
                  <td>4</td>
                  <td><div class="col-lg-6">
      Mathematics
      </div></td>
                  <td><div class="col-lg-6">
       <select value="<?php echo $o_mar4; ?>" class="form-control" name="o_mar4" id=""  required="required" >
         <option  <?php if($o_mar4=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if($o_mar4=="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($o_mar4=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($o_mar4=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($o_mar4=="W"){echo "selected";}  ?> VALUE="W">W</option>
        <option <?php if($o_mar4=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr> 

                     <tr>
                  <td>5</td>
                  <td><div class="col-lg-6">
      History
      </div></td>
                  <td><div class="col-lg-6">
       <select value="<?php echo $o_mar5; ?>" class="form-control" name="o_mar5" id=""  required="required" >
         <option  <?php if($o_mar5=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if($o_mar5=="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($o_mar5=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($o_mar5=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($o_mar5=="W"){echo "selected";}  ?> VALUE="W">W</option>
        <option <?php if($o_mar5=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr> 

                     <tr>
                  <td>6</td>
                  <td><div class="col-lg-6">
      Science
      </div></td>
                  <td><div class="col-lg-6">
       <select value="<?php echo $o_mar6; ?>" class="form-control" name="o_mar6" id=""  required="required" >
         <option  <?php if($o_mar6=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if($o_mar6=="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($o_mar6=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($o_mar6=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($o_mar6=="W"){echo "selected";}  ?> VALUE="W">W</option>
        <option <?php if($o_mar6=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr> 

                     <tr>
                  <td>7</td>
                  <td><div class="col-lg-6">
      <select value="<?php echo $o_sub7; ?>" class="form-control" name="o_sub7" id=""  required="required" >
        <option <?php if($o_sub7=="Business & Accounting"){echo "selected";}  ?> VALUE="Business & Accounting">Business & Accounting</option>
        <option <?php if($o_sub7=="Citizenship Education"){echo "selected";}  ?> VALUE="Citizenship Education">Citizenship Education</option>
        <option <?php if($o_sub7=="Geography"){echo "selected";}  ?> VALUE="Geography">Geography</option>
        <option <?php if($o_sub7=="Entrepreurship Studies"){echo "selected";}  ?> VALUE="Entrepreurship Studies">Entrepreurship Studies</option>
        <option <?php if($o_sub7=="Secound Lnguage"){echo "selected";}  ?> VALUE="Secound Lnguage">Secound Lnguage</option>
        </select>
      </div></td>
                  <td><div class="col-lg-6">
       <select value="<?php echo $o_mar7; ?>" class="form-control" name="o_mar7" id=""  required="required" >
         <option  <?php if($o_mar7=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if($o_mar7=="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($o_mar7=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($o_mar7=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($o_mar7=="W"){echo "selected";}  ?> VALUE="W">W</option>
        <option <?php if($o_mar7=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr> 

                   <tr>
                  <td>8</td>
                  <td><div class="col-lg-6">
      <select value="<?php echo $o_sub8; ?>" class="form-control" name="o_sub8" id=""  required="required" >
        <option <?php if($o_sub8=="Music"){echo "selected";}  ?> VALUE="Music">Music</option>
        <option <?php if($o_sub8=="Art"){echo "selected";}  ?> VALUE="Art">Art</option>
        <option <?php if($o_sub8=="Dancing"){echo "selected";}  ?> VALUE="Dancing">Dancing</option>
        <option <?php if($o_sub8=="App.Literary"){echo "selected";}  ?> VALUE="App.Literary">App.Literary</option>
        <option <?php if($o_sub8=="Drama & Theatre"){echo "selected";}  ?> VALUE="Drama & Theatre">Drama & Theatre</option>
        </select>
      </div></td>
                  <td><div class="col-lg-6">
       <select value="<?php echo $o_mar8; ?>" class="form-control" name="o_mar8" id=""  required="required" >
         <option  <?php if($o_mar8=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if($o_mar8=="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($o_mar8=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($o_mar8=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($o_mar8=="W"){echo "selected";}  ?> VALUE="W">W</option>
        <option <?php if($o_mar8=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr> 
                          
                            <tr>
                  <td>9</td>
                  <td><div class="col-lg-6">
       <select value="<?php echo $o_sub9; ?>" class="form-control" name="o_sub9" id=""  required="required" >
        <option <?php if($o_sub9=="Information $ Communication"){echo "selected";}  ?>  VALUE="Information $ Communication">Information $ Communication</option>
        <option <?php if($o_sub9=="Agriculture"){echo "selected";}  ?>  VALUE="Agriculture">Agriculture</option>
        <option <?php if($o_sub9=="Fisheries"){echo "selected";}  ?>  VALUE="Fisheries">Fisheries</option>
        <option <?php if($o_sub9=="Design"){echo "selected";}  ?>  VALUE="Design">Design</option>
        <option <?php if($o_sub9=="Art & crafts"){echo "selected";}  ?>  VALUE="Art & crafts">Art & crafts</option>
        <option <?php if($o_sub9=="Home Economics"){echo "selected";}  ?>  VALUE="Home Economics">Home Economics</option>
        <option <?php if($o_sub9=="Health & Physical"){echo "selected";}  ?>  VALUE="Health & Physical">Health & Physical</option>
        <option <?php if($o_sub9=="Media"){echo "selected";}  ?>  VALUE="Media">Media</option>
        <option <?php if($o_sub9=="Electronic Writing"){echo "selected";}  ?>  VALUE="Electronic Writing">electronic Writing</option>

        </select>
      </div></td>
                  <td><div class="col-lg-6">
       <select value="<?php echo $o_mar9; ?>" class="form-control" name="o_mar9" id=""  required="required" >
          <option  <?php if($o_mar9=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if($o_mar9 =="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($o_mar9=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($o_mar9=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($o_mar9=="W"){echo "selected";}  ?> VALUE="W">W</option>
        <option <?php if($o_mar9=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr>              
                                    </tbody>
                                </table>
                            </div>

                      </div>                      
                      </div>
                      </div>
                    </div>
                    </div>


<br><br>
<div class="form-group row">
        <div class="col-lg-2">
      <label>A/L Result Details</label>
      
      </div>
      <div class="col-lg-5">
      
      </div>
      <div class="col-lg-2">
      <label>Aggregate :-</label>
      
      </div>
      <div class="col-lg-2">
    <input value="<?php echo $a_aggregate; ?>" class="form-control" type="number" name="a_aggregate" required="required" placeholder="Z-Score" maxlength="6" >      
      </div>
    </div>
       <div class="form-group row">
          <div class="col-lg-1">
            <label>Year<span id="" style="font-size:11px;color:red">*</span> :- </label>
          </div>
          <div class="col-lg-2">
            <input value="<?php echo $a_year; ?>" class="form-control" type="number" name="a_year" required="required" maxlength="4" >
          </div>

          <div class="col-lg-2">
            <label>Index No<span id="" style="font-size:11px;color:red">*</span> :- </label>
          </div>
          <div class="col-lg-2">
            <input value="<?php echo $a_ino; ?>" class="form-control" type="number" name="a_ino" required="required" maxlength="8" >
          </div>

          <div class="col-lg-2">
            <label>Medium<span id="" style="font-size:11px;color:red">*</span> :- </label>
          </div>
          <div class="col-lg-2">
            <select value="<?php echo $a_medi; ?>" class="form-control" name="a_medi" id="" required="required" >     
            <option VALUE="">SELECT</option>
            <option <?php if($o_medi=="Tamil"){echo "selected";}  ?> VALUE="Tamil">Tamil</option>
            <option <?php if($o_medi=="English"){echo "selected";}  ?> VALUE="English">English</option>
            <option <?php if($o_medi=="Sinhalam"){echo "selected";}  ?> VALUE="Sinhalam">Sinhalam</option>
          </select>

          </div>


      </div>

                    
                      
      <div class="form-group">
      <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                      
                       <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                         <div class="col-lg-6">
      <th>S.No</th>
      </div>   
            <div class="col-lg-6">
      <th>&nbsp;&nbsp;&nbsp;&nbsp;Subject Name</th>
      </div>   
              <div class="col-lg-6">
       <th>&nbsp;&nbsp;&nbsp;&nbsp;Result</th>
      </div>                                 
                                        
            </tr>
        </thead>
        <tbody>

            <tr>
                  <td >1</td>
                  <td><div class="col-lg-6">
      <input value="<?php echo $a_sub1; ?>" class="form-control"  type="text" name="a_sub1">
      </div></td>
                  <td><div class="col-lg-6">
      <select value="<?php echo $a_mar1; ?>" class="form-control" name="a_mar1" id=""  required="required" >
        <option <?php if($a_mar1=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if($a_mar1=="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($a_mar1=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($a_mar1=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($a_mar1=="F"){echo "selected";}  ?> VALUE="F">F</option>
        <option <?php if($a_mar1=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      </div></td>
                       
                  </tr>
          
           <tr> 
                  <td>2</td>
                  <td><div class="col-lg-6">
      <input value="<?php echo $a_sub2; ?>" class="form-control"  type="text" name="a_sub2">
      </div></td>
                  <td><div class="col-lg-6">
      <select value="<?php echo $a_mar2; ?>" class="form-control" name="a_mar2" id=""  required="required" >
        <option <?php if($a_mar2=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if($a_mar2=="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($a_mar2=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($a_mar2=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($a_mar2=="F"){echo "selected";}  ?> VALUE="F">F</option>
        <option <?php if($a_mar2=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      </div></td>
                        
                  </tr> 
                     <tr>
                  <td>3</td>
                  <td><div class="col-lg-6">
      <input value="<?php echo $a_sub3; ?>" class="form-control"  type="text" name="a_sub3">
      </div></td>
                  <td><div class="col-lg-6">
      <select value="<?php echo $a_mar3; ?>" class="form-control" name="a_mar3" id=""  required="required" >
    <option <?php if($a_mar3=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if($a_mar3=="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($a_mar3=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($a_mar3=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($a_mar3=="F"){echo "selected";}  ?> VALUE="F">F</option>
        <option <?php if($a_mar3=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      </div></td>
                       
                  </tr>

                     <tr>
                  <td>4</td>
                  <td><div class="col-lg-6">
      General English
      </div></td>
                  <td><div class="col-lg-6">
       <select value="<?php echo $a_mar4; ?>" class="form-control" name="a_mar4" id=""  required="required" >
    <option <?php if($a_mar4=="A"){echo "selected";}  ?> VALUE="A">A</option>
        <option <?php if($a_mar4=="B"){echo "selected";}  ?> VALUE="B">B</option>
        <option <?php if($a_mar4=="C"){echo "selected";}  ?> VALUE="C">C</option>
        <option <?php if($a_mar4=="S"){echo "selected";}  ?> VALUE="S">S</option>
        <option <?php if($a_mar4=="F"){echo "selected";}  ?> VALUE="F">F</option>
        <option <?php if($a_mar4=="Ab"){echo "selected";}  ?> VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr> 
                   

                     <tr>
                  <td>5</td>
                  <td><div class="col-lg-6">
      Common General Test
      </div></td>
                  <td><div class="col-lg-6">
      <input value="<?php echo $a_mar5; ?>" class="form-control"  type="number" name="a_mar5" maxlength="3">
      </div></td>              
                  </tr>     
                                        
          </tbody>
          </table>
         </div>





                       </div>                      
                      </div>
                      </div>
                    </div>
                    </div>



                     <br><br>

                       <div class="form-group row justify-content-center">
                              <div class="col-md-12">
                                <button type="submit"  name="update_register"class="btn btn-primary offset-md-5 ">
                                    Update
                                </button>
                                  
                               
                              </div>
                                
                            </div>
 <input type="hidden" name="s_id" value="<?php echo $s_id; ?>" >
                      </div>                   
                      </div>                      
                      </div>
                      </div>




                            </div>
            </div>        
      </div>
                      </form>

                    





<?php include '../design/footer.php';?>
