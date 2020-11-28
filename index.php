<?php 
    session_start();

    include('connection.php');

    if(isset($_POST['email']) && isset($_POST['password'])){

        $email = $_POST['email'];

        $password = $_POST['password'];

        $password = md5($password);

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

        $stmt = $conn->query($sql);

        if($stmt->rowCount() > 0){

            $user = $stmt->fetchObject();

            $user_id = $user->id;

            $_SESSION["first_name"] = $user->first_name;
            $_SESSION["last_name"] = $user->last_name;
            $_SESSION["email"] = $user->email;
            $_SESSION["contact"] = $user->contact;
            $_SESSION["address"] = $user->address;
            $_SESSION["user_role"] = $user->user_role;
            $_SESSION["user_id"] = $user_id;

            if($_SESSION["user_role"] == 'district_official'){

                $sql = "SELECT * FROM district_users WHERE user_id = '$user_id'";

                $stmt = $conn->query($sql);

                $district = $stmt->fetchObject();

                $district_id = $district->district_id;

                $sql = "SELECT * FROM districts WHERE id = '$district_id'";

                $stmt = $conn->query($sql);

                $district_main = $stmt->fetchObject();

                $district_name = $district_main->name;

                $_SESSION["district_id"] = $district_id;

                $_SESSION["district_name"] = $district_name;

            }

            if($_SESSION["user_role"] == 'abattoir_officer'){
                header("Location: dashboard2.php");
                exit();
            }

            if($_SESSION["user_role"] == 'packhouse_officer'){
                header("Location: dashboard3.php");
                exit();
            }

            if($_SESSION["user_role"] == 'vet_officer'){
                header("Location: dashboard4.php");
                exit();
            }

            if($_SESSION["user_role"] == 'support_officer'){
                header("Location: dashboard5.php");
                exit();
            }

            header("Location: dashboard.php");
            exit();

        }else{

            $user = $stmt->fetchObject();
            header("Location: index.php");
            exit();

        }
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
                            <h4 class="mb-0">
                                <span class="d-block">Welcome back,</span>
                                <span>Please sign in to your account.</span>
                            </h4>
                           
                            <div class="divider row"></div>
                            <div>
                                <form class="" method="post" action="">
                                                             
                                        <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail" class="">Email</label>
                                                <input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="examplePassword" class="">Password</label>
                                                <input name="password" id="examplePassword" placeholder="Password here..." type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto">
                                            <a href="javascript:void(0);" style="color: blue;" class="btn-lg btn btn-link" >Recover Password</a>
                                            <button class="btn btn-success btn-lg" style="background-color: blue;">Login to Dashboard  <div id="login_loader"></button>
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


 <script>
        function do_login() {
            var login_form = new FormData($('#login_form')[0]);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/auth/login',
                type: 'POST',
                data: login_form,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $("#login_loader").html('<div class="spinner-border" style="font-size: 9px; color: #ffffff; ' +
                        'width: 1rem; height: 1rem;"></div>&nbsp;&nbsp;');
                },
                success:function(data_resp){
                    var data = JSON.parse(data_resp);

                    if(!data.status){
                        error_message(data.message);
                    } else{
                     window.location.href = "{{url('')}}";
                    }

                    $("#login_loader").html('');

                },
                error: function(errorData) {
                    $("#login_loader").html('');
                    alert(data.message);
                    error_message(errorData);

                }

            });
            return false;
        }


        function error_message(msg) {

            var error_html = "<div class=\"tb-alert tb-style1 tb-danger\">\n" +
                "                    <h2>Note</h2>\n" +
                "                    <p>"+msg+"</p>\n" +
                "                </div>";
            $( '#error_message' ).html( error_html );
        }

    </script>

</html>
