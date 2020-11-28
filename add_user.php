<?php 

  include('connection.php');

  include('app_header.php');

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
                                    <div><b>ADD USER</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
	    
	<form class="" method="post" action="user_register.php" enctype="multipart/form-data">
                                   
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

                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                          
                                                <label for="drop2">User Type</label>
                                                <select name="user_role" class="form-control" id="drop2">
                                                  <option value="district_officer">District Officer</option>
                                                  <option value="government_official">Government Official</option>
                                                  <option value="farmer">Farmer</option>
                                                  <option value="vet_officer">Veterinary Officer</option>
                                                  <option value="packhouse_official">Packhouse Operator</option>
                                                  <option value="abattoir_official">Abattoir Operator</option>
                                                  <option value="loan_officer">Loan Officer</option>
                                                  <option value="certificate_officer">Certificate Officer</option>
                                                  <option value="insurance_officer">Insurance Officer</option>
                                                </select>
                                              
                                            </div>
                                        </div>

                                        

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
                                            <button style="background-color: blue;" class="btn btn-primary">Create Account </button>
                                        </div>
                                    </div>
                                </form>

 </div>
</container>

<?php 

  include('app_footer.php');

?>   

   