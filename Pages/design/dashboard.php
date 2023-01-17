<?Php include '../../config/count.php';?>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">
              <i class="fas fa-users"></i>
            Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
         <li class="offset-md-3" style="font-weight: bold; color:maroon; font-size: 17px;"> <?php if(1==$_SESSION['id']) { echo 'Login  success with Admin ';}else { echo 'Login  success with Editor';} ?></li>
        </ol>
       
        <!-- Icon Cards-->
        <form action="../student/view_stu.php" method="post">
        <div class="row justify-content-center" > 

          <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card text-white bg-success o-hidden h-100" >
              <div class="card-body"  style="margin-top: 8px; margin-bottom:8px;">
                <div class="card-body-icon">
                  <i class="fas fa-laptop-code"></i>
                </div>
                <div class="mr-2">Total Students (HNDIT) :- <b><?php echo $it;?></div></b>
              </div>
              <button class="btn btn-sm card-footer text-white clearfix small z-1" name="Ssubmit" href="#" value="HNDIT">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-laptop-code"></i>
                </span>
              </button>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body" style="margin-top: 8px; margin-bottom:8px">
                <div class="card-body-icon">
                  <i class="fas fa-business-time"></i>
                </div>
                <div class="mr-2">Total Students (HNDA) :- <b><?php echo $a ;?></b></div>
              </div>
              <button class=" btn btn-sm card-footer text-white clearfix small z-1"  name="Ssubmit" href="#" value="HNDA">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-business-time"></i>
                </span>
              </button>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body" style="margin-top: 8px; margin-bottom:8px">
                <div class="card-body-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                   </div>
                <div class="mr-2">Total Students (HNDE) :- <b><?php echo $e ;?></b></div>
              </div>
              <button class=" btn btn-sm card-footer text-white clearfix small z-1" name="Ssubmit" href="#" value="HNDE">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-chalkboard-teacher"></i>
                </span>
              </button>
            </div>
          </div>

        </div>
      </form>


       <!--   Quick Search-->
       <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card ">
                    <div class="card-header s">
                      <i class="fas fa-search"></i>
                    Quick Search</div>
                    <div class="card-body s">
                        <form action="../student/view_stu.php" method="POST">
                            <div class="form-group row">
                             
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Student</label>
                              
                                <div class="col-md-6">
                                    <input type="text"  class="form-control" name="name" placeholder="Search" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Course</label>
                                <div class="col-md-6" >
                                    <select class="form-control" name="course">
                                 <option value="">SELECT</option>
                                      <?php

                                       $sql = "SELECT c_sname FROM course";

                                          $result = $db->query($sql);
                                          if ($result->num_rows > 0) 
                                          {
                                              while($row = $result->fetch_assoc()) 

                                              {
                                      echo '<option >'. $row['c_sname'] .'</option>';

                                              }
                                            }
                                            ?>
                                </select>
                                </div>
                            </div>
                          <br>
                            <div class="form-group row">
                              <div class="col-md-7">
                                <button type="submit" name="search" class="btn btn-primary  offset-md-10">
                                   Search
                                </button>
                              </div>
                                
                            </div>

                              </form> 
                         </div>
                </div>
            </div>   
        </div>
