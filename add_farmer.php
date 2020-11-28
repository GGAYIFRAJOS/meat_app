<?php 
	
session_start();

  include('app_header.php');

  include('connection.php');

  // $sql = "SELECT * FROM users WHERE user_role = 'doctor'";

  // $stmt = $conn->query($sql);

  // $doctors = array();
  // while ($doctor = $stmt->fetchObject()) {
  //           $doctors[] = $doctor;
  // }

  // $sql = "SELECT * FROM grades";

  // $stmt = $conn->query($sql);

  // $grades = array();
  // while ($grade = $stmt->fetchObject()) {
  //           $grades[] = $grade;
  // }

  // $sql = "SELECT * FROM hospitals";

  // $stmt = $conn->query($sql);

  // $hospitals = array();
  // while ($hospital = $stmt->fetchObject()) {
  //           $hospitals[] = $hospital;
  // }
?>

<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div><b>ADD FARMER</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
	    
	<div class="app-logo"></div>
                           
                           
                            <div class="divider row"></div>
                            <div>
                                <form class="" method="post" action="farmer_registration.php" enctype="multipart/form-data">
                                   
                                    <div class="form-row">
                                       
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="exampleFirstname" class="">First Name</label>
                                                <input name="first_name" id="exampleFirstname" placeholder="First Name here..." type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="exampleSecondname" class="">Last Name</label>
                                                <input name="last_name" id="exampleSecondname" placeholder="Last Name here..." type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="contact" class="">Contact</label>
                                                <input name="contact" id="contact" placeholder="Contact here..." type="text" class="form-control">
                                            </div>
                                        </div>

                                         <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail" class=""><span class="text-danger">*</span> Email</label>
                                                <input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="address" class="">Address</label>
                                                <input name="address" id="address" placeholder="Address here..." type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                          
                                                <label for="drop1">Gender</label>
                                                <select name="gender" class="form-control" id="drop1">
                                                  <option value="male">Male</option>
                                                  <option value="female">Female</option>
                                                </select>
                                              
                                            </div>
                                        </div>

                                        <input type="hidden" name="user_type" value="farmer">

                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="examplePassword" class=""><span class="text-danger">*</span> Password</label>
                                                <input name="password" id="examplePassword" placeholder="Password here..." type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="examplePasswordRep" class=""><span class="text-danger">*</span> Repeat Password</label>
                                                <input name="passwordrep" id="examplePasswordRep" placeholder="Repeat Password here..." type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="mt-4 d-flex align-items-center">
                                        
                                        <div class="ml-auto">
                                            <button style="background-color: blue;" class="btn btn-primary">REGISTER</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

 </div>
</container>

<?php 

  include('app_footer.php');

?>   

   