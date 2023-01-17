
<?php


session_start();

if(! isset($_SESSION['admin']))
{

if(! isset($_SESSION['user']))
{

  header('location:../../index.php');
  
}
}


 include ('../design/header.php');?>

<style >
label{
    font-weight: bold;
     }
</style>

<title>ATI-SMS</title>
</head>
<body id="page-top" >

<?php include ('../design/topside.php') ;?>

 <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a >
              <i class="fas fa-users"></i>
            Student</a></li>
             <li class="breadcrumb-item">
            <a href="view_stu.php">View Student</a></li>
          <li class="breadcrumb-item active">Add New Student</li>
        </ol>

   <!-- Breadcrumbs-->
      

<form action="Db_register.php" method="POST" enctype="multipart/form-data" >
        <div class="row  ">
            <div class="col-12 ">

                <div class="card" >
                    <div class="card-header"><i class="far fa-address-card"></i> Register</div>
                    <div class="card-body ">

                      <div class="form-group row justify-content-center " >

                            <div class="form-group row justify-content-center col-md-6">
                              <div class="col-md-5">
                                 <label>Course<span id="" style="font-size:11px;color:red">*</span>  </label>
                              </div>
                                <div class="col-md-7" >
                          <select class="form-control" name="course" id="" required="required">
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


                                     <div class="col-md-5"><br>
                                <label>Index No<span id="" style="font-size:11px;color:red">*</span>  </label>  

                              </div>
                              <div class="col-md-7"><br>
                               <input class="form-control" type="text" name="s_ino"  pattern="[A-Z]{3}[/]{1}[A-Z]{1,3}[/]{1}[0-9]{4}[/]{1}[A-Z]{1}[/]{1}[0-9]{4}" title="Follow This Format VAV/IT/2018/F/0000" required="required" placeholder="VAV/IT/2018/F/0000">  

                              </div>
                            </div>

                            
                    <div class="form-group row justify-content-center col-md-6">
                         
                         <div class="col-md-3 offset-md-2 mt-2"><br><br>
                      <label>File: </label></div>

                      <div class="col-md-7"><br><br>
                      <input class="form-control" type="file" name="image" >
                    </div>


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
                                 <label>Initial With Name<span id="" style="font-size:11px;color:red">*</span></label>

                              </div>
                                <div class="col-md-4">
                                 <input class="form-control" type="text" name="s_iname" required="required" maxlength="30" placeholder="Initial With Name">   

                                </div>
                                <div class="col-md-2">
                                 <label>Full Name<span id="" style="font-size:11px;color:red">*</span>  </label>

                              </div>
                                <div class="col-md-4">
                                  <input class="form-control"  type="text" name="s_fname" required="required" maxlength="30" placeholder="Full Name">   

                                </div>
                            </div>
                <div class="form-group row">
                              <div class="col-md-2">
                               <label>Date Of Birth<span id="" style="font-size:11px;color:red">*</span> </label>  

                              </div>
                                <div class="col-md-4">
                                 <input class="form-control" name="dob" type="date" >      

                                </div>
                               

                                <div class="col-md-2">
                               <label>National_IC NO<span id="" style="font-size:11px;color:red">*</span> </label>  

                              </div>
                                <div class="col-md-4">
                                 <input class="form-control" name="nic" type="text" maxlength="12" placeholder="123456789V">      

                                </div>
                               
                            </div>
                            
                          <div class="form-group row">
                              
                                <div class="col-md-2">
                                 <label>Genter<span id="" style="font-size:11px;color:red">*</span> </label> 
                               </div>

                                <div class="col-md-4">
                                  <input type="radio" name="gender" id="male" value="Male"> &nbsp; Male &nbsp;
     <input type="radio" name="gender" id="female" value="female"> &nbsp; Female &nbsp;
    

                                </div>
                            </div>
                         </div>        
               



        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><i class="far fa-address-book"></i> Contact_Detail</div>
                    <div class="card-body">
            <div class="form-group row">
        <div class="col-lg-2">
      <label>Mobile Number<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" type="number" name="mobile" required="required" maxlength="10">
      </div>

       <div class="col-lg-2">
      <label>Email Id<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="email" name="email" required="required">
      </div>
      </div>
       
        <div class="form-group row">
        <div class="col-lg-2">
      <label>Distric</label>
      </div>

      <div class="col-lg-4">
      
      <input class="form-control" type="text"  name="country">
      </div>


       <div class="col-lg-2">
      <label>State</label>
      
      </div>
      <div class="col-lg-4">
        <input class="form-control" type="text" name="state">

      </div>
      

      </div>  
      
        <div class="form-group row"> 
       <div class="col-lg-2">
      <label>Permanent Address<span id="" style="font-size:13px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <textarea class="form-control" rows="3" name="p_add" id="p_add" required="required" type="text"></textarea>
      </div>
         <div class="col-lg-2">
      <label>Correspondence Address</label>
      
      </div>
      <div class="col-lg-4">
      <textarea class="form-control" rows="3" name="c_add"  id="c_add" type="text"></textarea>
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
            <label>Year<span id="" style="font-size:13px;color:red">*</span> :-  </label>
          </div>
          <div class="col-lg-2">
            <input class="form-control" type="number" name="o_year" required="required" maxlength="4" >
          </div>

          <div class="col-lg-2">
            <label>Index No<span id="" style="font-size:13px;color:red">*</span> :- </label>
          </div>
          <div class="col-lg-2">
            <input class="form-control" type="number" name="o_ino" required="required" maxlength="8" >
          </div>

          <div class="col-lg-2">
            <label>Medium<span id="" style="font-size:13px;color:red">*</span> :- </label>
          </div>
          <div class="col-lg-2">
            <select class="form-control" name="o_medi" id="" required="required" >     
            <option VALUE="">SELECT</option>
            <option VALUE="Tamil">Tamil</option>
            <option VALUE="English">English</option>
            <option VALUE="Sinhalam">Sinhalam</option>
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
       <select class="form-control" name="o_mar1" id=""  required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="W">W</option>
        <option VALUE="Ab">Ab</option>
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
       <select class="form-control" name="o_mar2" id=""  required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="W">W</option>
        <option VALUE="Ab">Ab</option>
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
       <select class="form-control" name="o_mar3" id=""  required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="W">W</option>
        <option VALUE="Ab">Ab</option>
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
       <select class="form-control" name="o_mar4" id=""  required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="W">W</option>
        <option VALUE="Ab">Ab</option>
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
       <select class="form-control" name="o_mar5" id=""  required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="W">W</option>
        <option VALUE="Ab">Ab</option>
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
       <select class="form-control" name="o_mar6" id=""  required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="W">W</option>
        <option VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr> 

                     <tr>
                  <td>7</td>
                  <td><div class="col-lg-6">
      <select class="form-control" name="o_sub7" id=""  required="required" >
        <option VALUE="">1st Subject Group</option>
        <option VALUE="Business $ Accounting">Business $ Accounting</option>
        <option VALUE="Citizenship Education">Citizenship Education</option>
        <option VALUE="Geography">Geography</option>
        <option VALUE="Entrepreurship Studies">Entrepreurship Studies</option>
        <option VALUE="Secound Lnguage">Secound Lnguage</option>
        </select>
      </div></td>
                  <td><div class="col-lg-6">
       <select class="form-control" name="o_mar7" id=""  required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="W">W</option>
        <option VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr> 

                   <tr>
                  <td>8</td>
                  <td><div class="col-lg-6">
      <select class="form-control" name="o_sub8" id=""  required="required" >
        <option VALUE="">2nd Subject Group</option>
        <option VALUE="Music">Music</option>
        <option VALUE="Art">Art</option>
        <option VALUE="Dancing">Dancing</option>
        <option VALUE="App.Literary">App.Literary</option>
        <option VALUE="Drama & Theatre">Drama & Theatre</option>
        </select>
      </div></td>
                  <td><div class="col-lg-6">
       <select class="form-control" name="o_mar8" id=""  required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="W">W</option>
        <option VALUE="Ab">Ab</option>
        </select>
      
      </div>
          </td>             
                  </tr> 
                          
                            <tr>
                  <td>9</td>
                  <td><div class="col-lg-6">
       <select class="form-control" name="o_sub9" id=""  required="required" >
        <option VALUE="">3rd Subject Group</option>
        <option VALUE="Information $ Communication">Information $ Communication</option>
        <option VALUE="Agriculture">Agriculture</option>
        <option VALUE="Fisheries">Fisheries</option>
        <option VALUE="Design">Design</option>
        <option VALUE="Art & crafts">Art & crafts</option>
        <option VALUE="Home Economics">Home Economics</option>
        <option VALUE="Health & Physical">Health & Physical</option>
        <option VALUE="Media">Media</option>
        <option VALUE="Electronic Writing">Electronic Writing</option>

        </select>
      </div></td>
                  <td><div class="col-lg-6">
       <select class="form-control" name="o_mar9" id=""  required="required" >
      <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="W">W</option>
        <option VALUE="Ab">Ab</option>
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
    <input class="form-control" type="text" name="a_aggregate" required="required" placeholder="Z-Score" maxlength="6" >      
      </div>
    </div>
       <div class="form-group row">
          <div class="col-lg-1">
            <label>Year<span id="" style="font-size:11px;color:red">*</span> :- </label>
          </div>
          <div class="col-lg-2">
            <input class="form-control" type="number" name="a_year" required="required" maxlength="4" >
          </div>

          <div class="col-lg-2">
            <label>Index No<span id="" style="font-size:11px;color:red">*</span> :- </label>
          </div>
          <div class="col-lg-2">
            <input class="form-control" type="number" name="a_ino" required="required" maxlength="8" >
          </div>

          <div class="col-lg-2">
            <label>Medium<span id="" style="font-size:11px;color:red">*</span> :- </label>
          </div>
          <div class="col-lg-2">
            <select class="form-control" name="a_medi" id="" required="required" >     
            <option VALUE="">SELECT</option>
            <option VALUE="Tamil">Tamil</option>
            <option VALUE="English">English</option>
            <option VALUE="Sinhalam">Sinhalam</option>
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
      <input class="form-control"  type="text" name="a_sub1">
      </div></td>
                  <td><div class="col-lg-6">
      <select class="form-control" name="a_mar1" id=""  required="required" >
    <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="F">F</option>
        <option VALUE="Ab">Ab</option>
        </select>
      </div></td>
                       
                  </tr>
          
           <tr> 
                  <td>2</td>
                  <td><div class="col-lg-6">
      <input class="form-control"  type="text" name="a_sub2">
      </div></td>
                  <td><div class="col-lg-6">
      <select class="form-control" name="a_mar2" id=""  required="required" >
    <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="F">F</option>
        <option VALUE="Ab">Ab</option>
        </select>
      </div></td>
                        
                  </tr> 
                     <tr>
                  <td>3</td>
                  <td><div class="col-lg-6">
      <input class="form-control"  type="text" name="a_sub3">
      </div></td>
                  <td><div class="col-lg-6">
      <select class="form-control" name="a_mar3" id=""  required="required" >
    <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="F">F</option>
        <option VALUE="Ab">Ab</option>
        </select>
      </div></td>
                       
                  </tr>

                     <tr>
                  <td>4</td>
                  <td><div class="col-lg-6">
      General English
      </div></td>
                  <td><div class="col-lg-6">
       <select class="form-control" name="a_mar4" id=""  required="required" >
    <option VALUE="">SELECT</option>
        <option VALUE="A">A</option>
        <option VALUE="B">B</option>
        <option VALUE="C">C</option>
        <option VALUE="S">S</option>
        <option VALUE="F">F</option>
        <option VALUE="Ab">Ab</option>
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
      <input class="form-control"  type="number" name="a_mar5" maxlength="3">
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
                                <button type="submit"  name="register"class="btn btn-primary offset-md-5 ">
                                    Register
                                </button>

                                <button type="reset" value="Reset" name="reset" class="btn btn-warning offset-md-">
                                    Reset
                                </button>
                              </div>
                                
                            </div>

                      </div>                   
                      </div>                      
                      </div>
                      </div>




                            </div>
            </div>        
      </div>
                      </form>

                    



<?php include ('../design/footer.php');?>
