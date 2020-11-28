<?php 
	

 

  include('connection.php');

  // $sql = "SELECT * FROM users WHERE user_role = 'doctor'";

  // $stmt = $conn->query($sql);

  // $doctors = array();
  // while ($doctor = $stmt->fetchObject()) {
  //           $doctors[] = $doctor;
  // }

if(isset($_POST['district_name'])){

  $district_name = $_POST['district_name'];


  $district_id = $_GET['district_id'];

  $sql = "UPDATE districts SET name = '$district_name' WHERE id = '$district_id'";


  if ($conn->query($sql)) {

    header("Location: districts.php");

    exit();
  }
}



// $last_name = $_POST['last_name'];
// $email = $_POST['email'];
// $contact = $_POST['contact'];
// $user_role = $_POST['user_role'];
// $password = $_POST['password'];
// $birth_date = $_POST['date'];
// $speciality = $_POST['speciality'];
// $hospital_id = $_POST['hospital_id'];



// $password = md5($password);

 

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
                                    <div><b>UPDATE <?php echo $_GET['district_name']; ?> DISTRICT</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">


	    
	<form style="padding-top: 20px;" method="POST" action="" enctype="multipart/form-data">
	  
	  <div class="form-group">
	    <label for="district_name"><address>District Name</address></label>
	    <input type="text" class="form-control" id="district_name" name="district_name">
	  </div>
	  
	  
	  <button type="submit" class="btn btn-primary">UPDATE</button>
	</form>

 </div>
</container>

<?php 

  include('app_footer.php');

?>   

   