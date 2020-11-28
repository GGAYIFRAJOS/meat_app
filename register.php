<?php 


include('connection.php');


$sql = "SELECT * FROM districts";

$stmt = $conn->query($sql);

$districts = array();
while ($district = $stmt->fetchObject()) {
  $districts[] = $district;
}


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MEAT TRACEABILITY</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">
    <link rel="shortcut icon" type="image/jpg" href="assets/images/anime.png"/>

    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="assets/css/main.d810cf0ae7f39f28f336.css" rel="stylesheet"></head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>

                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center " tabindex="-1"  style="background-color: blue">
                                        <br>
                                        <div class="slider-content">
                                            <img  style="height:50px; width: 50px;" src="assets/images/anime.png">
                                            
                                            <br><br>
                                            <h4>MEAT TRACEABILITY SYSTEM</h4>
                                            
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8" style="background-image: url("{{ asset('/img/farmer.jpg') }}");">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h2 class="mb-0">
                                <span class="d-block" style="text-align: center;"><u><b>USER REGISTRATION</b></u></span>
                                
                            </h2>
                           
                            <div class="divider row"></div>
                            <div>
                                <form class="" method="post" action="user_registration.php" enctype="multipart/form-data">
                                   
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

                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                          
                                                <label for="drop2">User Type</label>
                                                <select name="user_role" class="form-control" id="drop2">
                                                  <option value="farmer">Farmer</option>
                                                  <option value="government_official">Government Official</option>
                                                  <option value="district_official">District Official</option>
                                                  <option value="vet_officer">Veterinary Officer</option>
                                                  <option value="abattoir_officer">Abattoir Officer</option>
                                                  <option value="packhouse_officer">Packhouse Officer</option>
                                                  <option value="support_officer">Support Officer</option>
                                                </select>
                                              
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="otherType" style="display:none;">
                                            <div class="position-relative form-group">
                                          
                                                <label for="drop2">Districts</label>
                                                <select name="district_name" class="form-control" id="drop2">
                                                <?php foreach($districts as $district): ?>
                                                  <option value="<?php echo $district->id ?>"><?php echo $district->name; ?></option>
                                                <?php endforeach; ?>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


 <script type="text/javascript">
     $('#drop2').on('change',function(){
        if( ($(this).val() === "district_official")){
        $("#otherType").show()
        }
        else{
        $("#otherType").hide()
        }
    });
</script>

</html>
