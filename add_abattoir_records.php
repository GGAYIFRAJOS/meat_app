<?php 

  include('connection.php');

  $sql = "SELECT * FROM animal";

  $stmt = $conn->query($sql);

  $animals = array();
  while ($animal = $stmt->fetchObject()) {
            $animals[] = $animal;
  }

  

  include('app_header2.php');



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
                  <div><b>ADD ABATTOIR RECORD</b>
                      <div class="page-title-subheading">
                      </div>
                  </div>
              </div>
                 
          </div>
      </div>


  
   
 <div class="container" style="width: 60%;">
	    
	<form style="padding-top: 20px;" method="post" action="add_record.php" enctype="multipart/form-data">
	  
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
      <label for="weight"><address>Weight</address></label>
      <input type="text" class="form-control" id="weight" name="weight">
    </div>

	  <div class="form-group row">
		  <label for="date_arrived" class="col-2 col-form-label">Arrived</label>
		  <div class="col-10">
		    <input class="form-control" type="date"  id="date_arrived" name="date_arrived">
		  </div>
		</div>

	  <div class="form-group row">
      <label for="date_slaughtered" class="col-2 col-form-label">Slaughtered</label>
      <div class="col-10">
        <input class="form-control" type="date"  id="date_slaughtered" name="date_slaughtered" >
      </div>
    </div>

    <div class="form-group">
      <label for="container"><address>Container Number</address></label>
      <input type="text" class="form-control" id="container" name="container">
    </div>
	  
	  <button type="submit" class="btn btn-primary">REGISTER</button>
	</form>
</div>
</container>

<?php 

  include('app_footer.php');

?>   

   