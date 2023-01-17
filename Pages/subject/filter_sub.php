
<?php 

session_start();

if(! isset($_SESSION['admin']))
{

if(! isset($_SESSION['user']))
{

  header('location:../../index.php');
  
}
}



include '../design/header.php';

if(isset($_GET['subid']))
{
  $subid=$_GET['subid'];
  if($subid==1)
  {
    $file="view_subject.php";
    $file1="view_subject";

  }
  else
  {
    $file="manage_subject.php";
    $file1="manage_subject";
  }

}


?>

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
            <a href="<?php echo $file; ?>"><?php echo $file1; ?></a></li>
          <li class="breadcrumb-item active">Filter_Subject</li>
        </ol>




<div class="row ">
            <div class="col-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                      <i class="fas fa-filter"></i>
                    subject filter</div>
                    <div class="card-body">
                        <form action="<?php echo $file; ?>" method="post">


                             <div class="form-group row offset-md-2">

                                <div class="col-md-4">
                                <label style="font-size: 16px;">Course<span id="" style="font-size:11px;color:red">*</span></label>
                            </div>

                                <div class="col-md-6">
                                    <select class="form-control" name="course" id=""  required="required">
                                    <option value="">course</option>
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
                                    <select class="form-control"  name="sub_year" id=""    >
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
                                  <select class="form-control" name="sub_semi" id="" >
                                      <option value="">SELECT</option>
                                      <option value="1st">1st Semi</option>
                                      <option value="2nd">2nd Semi</option>
                                    </select>    

                                </div>
                                
                            </div>

                            <div class="form-group row offset-md-2">
                                <div class="col-md-4">
                                 <label style="font-size: 16px;">Credit<span id="" style="font-size:11px;color:red">*</span>  </label>

                                </div>
                               <div class="col-md-6" >
                                 
                                  <input class="form-control" name="sub_cre" pattern="[0-9]{1,2}" title="not allowed text and max number of char 2" placeholder="Credit">   

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

