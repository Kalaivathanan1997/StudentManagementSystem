
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

if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if($id==1)
  {
    $file="view_stu.php";
    $file1="view_student";

  }
  else
  {
    $file="manage_stu.php";
    $file1="manage_student";
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
              <i class="fas fa-users"></i>
            Student</a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?php echo $file; ?>"><?php echo $file1; ?></a></li>
          <li class="breadcrumb-item active">Filter_student</li>
        </ol>



<br>

<div class="row ">
            <div class="col-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                      <i class="fas fa-filter"></i>
                    Filter_Student Details</div>
                    <div class="card-body">
                        <form action="<?php echo $file; ?>" method="post">
                             <div class="form-group row offset-md-1">
                                <div class="col-md-4">
                                <label style="font-size: 16px;">Course<span id="" style="font-size:11px;color:red">*</span></label>
                            </div>
                                <div class="col-md-7">
                                    <select class="form-control" name="course" id=""  >
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

                            
                            <div class="form-group row offset-md-1">
                                <div class="col-md-4">
                                 <label style="font-size: 16px;">Batch Year<span id="" style="font-size:11px;color:red">*</span>  </label>

                                </div>
                               <div class="col-md-7" >
                                 
                                   <input class="form-control" type="number" name="byear" placeholder="Batch Year">   

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
