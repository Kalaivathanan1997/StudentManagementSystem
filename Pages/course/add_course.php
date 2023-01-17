
<?php 

session_start();

if(! isset($_SESSION['admin']))
{

if(! isset($_SESSION['user']))
{

  header('location:../../index.php');
  
}
}


include ("../design/header.php"); ?>

<title>ATI_SMS-Add_Course</title>
</head>
<body id="page-top">

<?php include ("../design/topside.php"); ?>

 <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a >
              <i class="fas fa-database"></i>
            Course</a>
          </li>

          <li class="breadcrumb-item">
            <a href="view_course.php" >
            View Course</a>
          </li>
          <li class="breadcrumb-item active">Add Course</li>
        </ol>
<br>

<div class="row justify-content-center">
            <div class="col-8 ">
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
                                    <input class="form-control" name="c_fname" required="required" pattern="[A-Za-z ]+$" placeholder="without_simpol">   

                                </div>
                               
                            </div>
 							<div class="form-group row offset-md-2">
                            	<div class="col-md-4">
                                 <label>Course Short Name<span id="" style="font-size:11px;color:red">*</span>  </label>

                           		</div>
                                <div class="col-md-6">
                                   <input class="form-control" name="c_sname" required="required" pattern="[A-Z]+$" placeholder="In Capital Latter">   
    

                                </div>
                                
                            </div>
                            
                             <br>       
        
                             <div class="form-group row">
                              <div class="col-md-12">
                                <button type="submit"  name="add_course"class="btn btn-primary offset-md-5 ">
                                    Create Course
                                </button>
                              </div>
                                
                            </div>


                            </form>
                         </div>
                    
                </div>
            </div>
            
        </div>

                     
            

<?php include ('../design/footer.php');?>
