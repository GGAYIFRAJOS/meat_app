<?php 
	


  

  include('connection.php');

  $sql = "SELECT * FROM districts";

  $stmt = $conn->query($sql);

  $districts = array();

  while ($district = $stmt->fetchObject()) {
     $districts[] = $district;
  }


  if(isset($_POST['subcounty_name'])){

    $name = $_POST['subcounty_name'];
    $district_id = $_POST['district_id'];



    $sql = "INSERT INTO subcounty (subcounty_name, district_id)
    VALUES ('$name', '$district_id')";


    if ($conn->query($sql)) {

      header("Location: sub_counties.php");

      exit();
    }

  }

  include('app_header.php');


// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];
// $email = $_POST['email'];
// $contact = $_POST['contact'];
// $user_role = $_POST['user_role'];
// $password = $_POST['password'];
// $birth_date = $_POST['date'];
// $speciality = $_POST['speciality'];
// $hospital_id = $_POST['hospital_id'];



// $password = md5($password);

// $sql = "INSERT INTO users (first_name, last_name, email,contact,birth_date,password,user_role)
// VALUES ('$first_name', '$last_name', '$email', '$contact', '$birth_date', '$password', '$user_role')";


// if ($conn->query($sql)) {

//   $sql = "SELECT * FROM users ORDER BY ID DESC LIMIT 1";

//   $stmt = $conn->query($sql);

//   if($stmt->rowCount() > 0){

//     $user = $stmt->fetchObject();
//   }


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
                                    <div><b>ADD SUBCOUNTY</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
	    
	<form style="padding-top: 20px;" method="POST" action="" enctype="multipart/form-data">
	  
	  <div class="form-group">
	    <label for="subcounty_name"><address>Subcounty Name</address></label>
	    <input type="text" class="form-control" id="subcounty_name" name="subcounty_name">
	  </div>

	  <div class="form-group">
        <div class="position-relative form-group">                        
            <label for="drop2">Distict</label>
            <select name="district_id" class="form-control" id="district_id">
              <?php foreach($districts as $district): ?>
                <option value="<?php echo $district->id; ?>"><?php echo $district->name; ?></option>
              <?php endforeach; ?>
            </select>
        </div>
    </div>
	  
	  <button type="submit" class="btn btn-primary">REGISTER</button>
	</form>

 </div>
</container>

<?php 

  include('app_footer.php');

?>   

   