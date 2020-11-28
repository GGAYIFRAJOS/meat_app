<?php 


  include('connection.php');

  $sql = "SELECT * FROM animal";

  $stmt = $conn->query($sql);

  $animals = array();
  while ($animal = $stmt->fetchObject()) {
            $animals[] = $animal;
  }

  $sql = "SELECT * FROM users WHERE user_role = 'vet_officer'";

  $stmt = $conn->query($sql);

  $officers = array();
  while ($officer = $stmt->fetchObject()) {
            $officers[] = $officer;
  }

  if(isset($_POST['animal_id'])){

    $animal_id = $_POST['animal_id'];
    $officer_id = $_POST['officer_id'];
    $disease = $_POST['disease'];
    $medicine_applied = $_POST['medicine_applied'];

    $date_applied = date('Y-m-d',strtotime($date));

    $description = $_POST['description'];

    $sql = "INSERT INTO medical_history (animal_id, officer_id, disease, medicine_applied, description)
    VALUES ('$animal_id', '$officer_id', '$disease', '$medicine_applied', '$description')";


    if ($conn->query($sql)) {

        header("Location: medical_records.php");
      exit();

    } else {

      echo "Error: " . $sql . "<br>";
    }

  }

  include('app_header4.php');
  
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
                                    <div><b>ADD MEDICAL RECORDS</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
	    
	<form style="padding-top: 20px;" method="POST" action="#" enctype="multipart/form-data">
	  
	<div class="form-group">
      <div class="position-relative form-group">
    
          <label for="animal_id">Animal</label>
          <select name="animal_id" class="form-control" id="animal_id">
            <?php foreach($animals as $animal): ?>
              <option value="<?php echo $animal->id; ?>"><?php echo $animal->animal_name; ?></option>
            <?php endforeach; ?>
          </select>
        
      </div>
  </div>

  <div class="form-group">
      <div class="position-relative form-group">
    
          <label for="officer_id">Vet Officer</label>
          <select name="officer_id" class="form-control" id="officer_id">
            <?php foreach($officers as $officer): ?>
              <option value="<?php echo $officer->id; ?>"><?php echo $officer->first_name; ?> <?php echo $officer->last_name; ?></option>
            <?php endforeach; ?>
          </select>
      </div>
  </div>


	  <div class="form-group">
	    <label for="disease"><address>Disease</address></label>
	    <input type="text" class="form-control" id="disease" name="disease">
	  </div>
	  

    <div class="form-group">
      <label for="medicine_applied"><address>Medicine Applied</address></label>
      <input type="text" class="form-control" id="medicine_applied" name="medicine_applied">
    </div>

	  <div class="form-group">
	    <label for="description">Description</label>
	    <input type="text" class="form-control" id="description" name="description">
	  </div>
	  
	  <button type="submit" class="btn btn-primary">REGISTER</button>
	</form>

 </div>
</container>

<?php 

  include('app_footer.php');

?>   

   