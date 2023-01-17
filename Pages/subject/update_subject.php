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

<title>ATI-SMS</title>
</head>
<body id="page-top">

<?php include '../design/topside.php' ;?>

  <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a >
              <i class="fas fa-book"></i>
            Subject</a>
          </li>
            <li class="breadcrumb-item">
            <a href="manage_subject.php">
              
           Manage Sbject</a>
          </li>
          <li class="breadcrumb-item active">Update Subject Details</li>
        </ol>

<?php

       
        if(isset($_GET['sb_id']))
        {
          $sb_id=$_GET['sb_id'];
          $record = mysqli_query($db, "SELECT * FROM subject WHERE sub_id='$sb_id' ");
                  $S = mysqli_fetch_array($record);
  $sub_id=$S['sub_id'];
  $sub_fname=$S['sub_fname'];
  $sub_sname=$S['sub_sname'];
  $sub_cre=$S['sub_cre'];
  $sub_course=$S['sub_course'];
  $sub_year=$S['sub_year'];
  $sub_semi=$S['sub_semi'];



 
                }


      ?>



<div class="row justify-content-center">
            <div class="col-8 ">
                <div class="card">
                    <div class="card-header">
                      <i class="fas fa-book"></i>
                    Create Subject</div>
                    <div class="card-body">
                        <form action="Db_subject.php" method="post" >
                          <div class="form-group row offset-md-2"> 
                              <div class="col-md-4">
                                 <label>Subject Id<span id="" style="font-size:11px;color:red">*</span>  </label>

                              </div>
                                <div class="col-md-6">
                                    <input class="form-control" value="<?php echo $sub_id; ?>" name="sub_id" required="required" pattern="[A-Z0-9]+$" placeholder="In Capital Latters with numbers">   

                                </div>
                               
                            </div>
                            <div class="form-group row offset-md-2"> 
                              <div class="col-md-4">
                                 <label>Subject Full Name<span id="" style="font-size:11px;color:red">*</span>  </label>

                              </div>
                                <div class="col-md-6">
                                    <input class="form-control" value="<?php echo $sub_fname; ?>" name="sub_fname" required="required" pattern="[A-Za-z ]+$" placeholder="Without Simpols" >   

                                </div>
                               
                            </div>
              <div class="form-group row offset-md-2">
                              <div class="col-md-4">
                                 <label>Subject Short Name<span id="" style="font-size:11px;color:red">*</span>  </label>

                              </div>
                                <div class="col-md-6">
                                   <input class="form-control" value="<?php echo $sub_sname; ?>" name="sub_sname" required="required" pattern="[A-Z]+$" placeholder ="In Capital Letters">   
    

                                </div>
                              </div>
                              <div class="form-group row offset-md-2">
                              <div class="col-md-4">
                                 <label>Subject Credit<span id="" style="font-size:11px;color:red">*</span>  </label>

                              </div>
                                <div class="col-md-6">
                                     <input class="form-control" name="sub_cre" value="<?php echo $sub_cre; ?>" required="required" pattern="[0-9]{1,2}" title="not allowed text and max number of char 2" placeholder="Credit"> 

                                </div>
                                
                            </div>
                                  <div class="form-group row offset-md-2">
                              <div class="col-md-4">
                                 <label>Course Name<span id="" style="font-size:11px;color:red">*</span>  </label>

                              </div>
                                <div class="col-md-6">
                                   <select class="form-control" name="sub_course" id=""  required="required" >
                                     <option value="">SELECT</option>
                                      <?php

                                        include '../../config/config.php';

                                       $sql = "SELECT c_sname FROM course";

                                          $result = $db->query($sql);
                                          if ($result->num_rows > 0) 
                                          {
                                              while($row = $result->fetch_assoc()) 

                                              {$A="";
                                                if($sub_course==$row['c_sname']){$A=" selected";}

                                      echo '<option ' . $A .'>'. $row['c_sname'] .'</option>';

                                              }
                                            }
                                            ?>
                                    </select>  
    

                                </div>
                                
                            </div>
                              <div class="form-group row offset-md-2">
                              <div class="col-md-4">
                                 <label>Year<span id="" style="font-size:11px;color:red">*</span>  </label>

                              </div>
                                <div class="col-md-6">
                                    <select class="form-control"   name="sub_year" id=""  required="required"  >
                                   <option value="">SELECT</option>
                                      <option<?php if($sub_year=="1st") {echo " selected";} ?> value="1st">1st Year</option>
                                      <option <?php if($sub_year=="2nd") {echo " selected";} ?> value="2nd">2nd Year</option>
                                      <option <?php if($sub_year=="3rd") {echo " selected";} ?> value="3rd">3rd Year</option>
                                      <option <?php if($sub_year=="4th") {echo " selected";} ?> value="4th">4th Year</option>

                                    </select>    

                                </div>
                                
                            </div>
                              <div class="form-group row offset-md-2">
                              <div class="col-md-4">
                                 <label>Semister<span id="" style="font-size:11px;color:red">*</span>  </label>

                              </div>
                                <div class="col-md-6">
                                  <select class="form-control"  name="sub_semi" id="" required="required" >
                                      
                                      <option <?php if($sub_semi=="1st") {echo " selected";} ?> value="1st">1st Semi</option>
                                      <option <?php if($sub_semi=="2nd") {echo " selected";} ?> value="2nd">2nd Semi</option>
                                    </select>    

                                </div>
                                
                            </div>
                                
                            
                            
                             <br>       
        
                             <div class="form-group row">
                              <div class="col-md-12">
                                <button type="submit"  name="update_subject"class="btn btn-primary offset-md-5 ">
                                    Update Subject
                                </button>
                              </div>
                                <input type="" value="<?php echo $sb_id ?>" name="sb_id">
                            </div>


                            </form>
                         </div>
                    
                </div>
            </div>
            
        </div>

                     
            
<?php include '../design/footer.php';?>
