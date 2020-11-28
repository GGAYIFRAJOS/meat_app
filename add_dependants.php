<?php 


  include('connection.php');

  $sql = "SELECT * FROM users WHERE user_role = 'farmer'";

  $stmt = $conn->query($sql);

  $farmers = array();
  while ($farmer = $stmt->fetchObject()) {
            $farmers[] = $farmer;
  }

  if(isset($_POST['dependant_names'])){

    $dependant_names = $_POST['dependant_names'];
    $dependant_relationship = $_POST['dependant_relationship'];
    $dependant_age = $_POST['dependant_age'];
    $farmer_id = $_POST['farmer_id'];

    $sql = "INSERT INTO dependants (dependant_names, dependant_relationship, dependant_age,farmer_id)
    VALUES ('$dependant_names', '$dependant_relationship','$dependant_age','$farmer_id')";


    if ($conn->query($sql)) {

      header("Location: dependants.php");

      exit();
    }
  }

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
                                    <div><b>ADD DEPENDANT</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
	    
	<form style="padding-top: 20px;" method="POST" action="#" enctype="multipart/form-data">
	  
	  <div class="form-group">
	    <label for="dependant_names"><address>Names</address></label>
	    <input type="text" class="form-control" id="dependant_names" name="dependant_names">
	  </div>

     <div class="form-group">
      <label for="dependant_relationship"><address>Relationship</address></label>
      <input type="text" class="form-control" id="dependant_relationship" name="dependant_relationship">
    </div>

     <div class="form-group">
      <label for="dependant_age"><address>Age</address></label>
      <input type="text" class="form-control" id="dependant_age" name="dependant_age">
    </div>
	 

	 <div class="form-group">
      <div class="position-relative form-group">
    
          <label for="farmer_id">Farmmer</label>
          <select name="farmer_id" class="form-control" id="farmer_id">
          <?php foreach($farmers as $farmer): ?>
              <option value="<?php echo $farmer->id; ?>"><?php echo $farmer->first_name; ?>  <?php echo $farmer->last_name; ?></option>
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

   