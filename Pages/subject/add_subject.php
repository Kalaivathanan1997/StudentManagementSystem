 
<?php

session_start();

if(! isset($_SESSION['admin']))
{

if(! isset($_SESSION['user']))
{

  header('location:../../index.php');
  
}
}



 include '../design/header.php';?>

<title>ATI-SMS</title>
</head>
<body id="page-top" >

<?php include '../design/topside.php' ;?>


  <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a >
              <i class="fas fa-book"></i>
            Subject</a>
          </li>
            <li class="breadcrumb-item">
            <a href="view_subject.php">
             
           View Sbject</a>
          </li>
          <li class="breadcrumb-item active">Add New Subject</li>
        </ol>



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
                                    <input class="form-control" name="sub_id" required="required" pattern="[A-Z0-9]+$" title="not allowed simpol" placeholder="In Capital Latters with numbers">   

                                </div>
                               
                            </div>
                            <div class="form-group row offset-md-2"> 
                            	<div class="col-md-4">
                                 <label>Subject Full Name<span id="" style="font-size:11px;color:red">*</span>  </label>

                           		</div>
                                <div class="col-md-6">
                                    <input class="form-control" name="sub_fname" required="required" pattern="[A-Za-z ]+$" placeholder="Without Simpols">   

                                </div>
                               
                            </div>

 							<div class="form-group row offset-md-2">
                            	<div class="col-md-4">
                                 <label>Subject Short Name<span id="" style="font-size:11px;color:red">*</span>  </label>

                           		</div>
                                <div class="col-md-6">
                                   <input class="form-control" name="sub_sname" required="required" pattern="[A-Z]+$" placeholder="In Capital Latters">   
    

                                </div>
                              </div>
                                <div class="form-group row offset-md-2">
                              <div class="col-md-4">
                                 <label>Subject Credit<span id="" style="font-size:11px;color:red">*</span>  </label>

                              </div>
                                <div class="col-md-6">
                                     <input class="form-control" name="sub_cre" required="required" pattern="[0-9]{1,2}" title="not allowed text and max number of char 2" placeholder="Credit"> 

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

                                              {
                                      echo '<option>'. $row['c_sname'] .'</option>';

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
                                    <select class="form-control"  name="sub_year" id=""  required="required"  >
                                       <option value="">SELECT</option>
                                      <option value="1st">1st Year</option>
                                      <option value="2nd">2nd Year</option>
                                      <option value="3rd">3rd Year</option>
                                      <option value="4th">4th Year</option>

                                    </select>    

                                </div>
                                
                            </div>
                              <div class="form-group row offset-md-2">
                              <div class="col-md-4">
                                 <label>Semister<span id="" style="font-size:11px;color:red">*</span>  </label>

                              </div>
                                <div class="col-md-6">
                                  <select class="form-control" name="sub_semi" id="" required="required" >
                                      <option value="">SELECT</option>
                                      <option value="1st">1st Semi</option>
                                      <option value="2nd">2nd Semi</option>
                                    </select>    

                                </div>
                                
                            </div>
                                
                            
                            
                             <br>       
        
                             <div class="form-group row">
                              <div class="col-md-12">
                                <button type="submit"  name="add_subject"class="btn btn-primary offset-md-5 ">
                                    Create Subject
                                </button>
                              </div>
                                
                            </div>


                            </form>
                         </div>
                    
                </div>
            </div>
            
        </div>

                     
            

<?php include '../design/footer.php';?>
