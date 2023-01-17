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

<title>ATI_SMS-Update_Course</title>
</head>
<body id="page-top">

<?php include '../design/topside.php' ;?>

<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a >
              <i class="fas fa-database"></i>
            Course</a>
          </li>
           <li class="breadcrumb-item">
            <a href="manage_course.php">
            Manage Course</a>
          </li>
           <li class="breadcrumb-item active">Update Course</li>
        </ol>
<br>


<?php

       
        if(isset($_GET['cid']))
        {
          $cid=$_GET['cid'];
          $record = mysqli_query($db, "SELECT * FROM course WHERE c_id='$cid' ");
                  $C = mysqli_fetch_array($record);
                  $c_fname=$C['c_fname'];
                  $c_sname=$C['c_sname'];

                }


      ?>
<div class="row ">
            <div class="col-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                      <i class="fas fa-database"></i>
                    Create Course</div>
                    <div class="card-body">
                        <form action="Db_course.php" method="post">
                            <div class="form-group row offset-md-2">
                            	<div class="col-md-4">
                                 <label>Course full Name<span id="" style="font-size:11px;color:red">*</span>  </label>

                           		</div>
                                <div class="col-md-6">
                                    <input value="<?php echo $c_fname; ?>" class="form-control" name="c_fname" required="required" pattern="[A-Za-z ]+$" placeholder="without_simpol">   

                                </div>
                               
                            </div>
 							<div class="form-group row offset-md-2">
                            	<div class="col-md-4">
                                 <label>Course Short Name<span id="" style="font-size:11px;color:red">*</span>  </label>

                           		</div>
                                <div class="col-md-6">
                                   <input class="form-control" value="<?php echo $c_sname; ?>" name="c_sname" required="required" pattern="[A-Z]+$" placeholder="In Capital Latter">   
    

                                </div>
                                
                            </div>
                            
                             <br>       
        
                             <div class="form-group row">
                              <div class="col-md-12">

                                <input type="hidden" value="<?php echo $cid; ?>" name="cid">

                                <button type="submit"  name="update_course"class="btn btn-primary offset-md-5 ">
                                    Update Course
                                </button>
                              </div>
                                
                            </div>



                         </div>
                    
                    </form>
                </div>
            </div>
    
        </div>

                     
            
<?php include '../design/footer.php';?>
