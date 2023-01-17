
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
<body id="page-top">

<?php include '../design/topside.php' ;?>


<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a >
              <i class="fas fa-file-alt "></i>
            Result</a>
          </li>
           <li class="breadcrumb-item active">
            Filter Result
          </li>
        </ol>


<div class="row ">
            <div class="col-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                      <i class="fas fa-filter"></i>
                    Filter Result</div>
                    <div class="card-body">
                        <form action="view_result.php" method="post">
                             <div class="form-group row offset-md-1">
                                <div class="col-md-4">
                                <label >Course<span id="" style="font-size:11px;color:red">*</span></label>
                            </div>
                                <div class="col-md-7">
                                    <select class="form-control" name="course" id=""  required="required" >
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

                            
                            <div class="form-group row offset-md-1">
                                <div class="col-md-4">
                                 <label>Year<span id="" style="font-size:11px;color:red">*</span>  </label>

                                </div>
                               <div class="col-md-7" required="required">
                                 <select class="form-control"  name="year" id=""  required="required"  >
                                      <option value="">SELECT</option>
                                      <option value="1st">1st Year</option>
                                      <option value="2nd">2nd Year</option>
                                      <option value="3rd">3rd Year</option>
                                      <option value="4th">4th Year</option>

                                    </select>   
                                </div>
                                
                            </div>

                             <div class="form-group row offset-md-1">
                                <div class="col-md-4">
                                 <label>Semister<span id="" style="font-size:11px;color:red">*</span>  </label>

                                </div>
                               <div class="col-md-7"  required="required">
                                    <select class="form-control" name="semi" id="" required="required" >
                                      <option value="">SELECT</option>
                                      <option value="1st">1st Semi</option>
                                      <option value="2nd">2nd Semi</option>
                                    </select> 
                                </div>
                                
                            </div>

                             
                            <div class="form-group row offset-md-1">
                                <div class="col-md-4">
                                 <label>Attempt<span id="" style="font-size:11px;color:red">*</span></label>

                                </div>
                               <div class="col-md-7" >
                                    <select class="form-control" name="attempt" required="required">
                                      <option value="">SELECT</option>
                                      <option value="attempt1">1st Attempt</option>
                                      <option value="attempt2">2nd Attempt</option>
                                      <option value="attempt3">3rd Attempt</option>
                                      <option value="attempt4">4th Attempt</option>

                                    </select>
                                </div>
                                
                            </div>

                             <br>       
        
                             <div class="form-group row">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary offset-md-5 " name="filter">
                                    Filter
                                </button>
                              </div>
                                
                            </div>



                         </div>
                    
                    </form>
                </div>
            </div>  
        </div>

           


<?php include '../design/footer.php';?>
