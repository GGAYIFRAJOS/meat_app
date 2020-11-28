<?php 

  include('connection.php');

  $sql = "SELECT * FROM animal_breed";

  $stmt = $conn->query($sql);

  $breeds = array();
  while ($breed = $stmt->fetchObject()) {
            $breeds[] = $breed;
  }

  $sql = "SELECT * FROM farm";

  $stmt = $conn->query($sql);

  $farms = array();
  while ($farm = $stmt->fetchObject()) {
            $farms[] = $farm;
  }

  if(isset($_POST['animal_name'])){

    $animal_name = $_POST['animal_name'];
    $breed_id = $_POST['breed_id'];
    $farm_id = $_POST['farm_id'];


    $sql = "INSERT INTO animal (animal_name, breed_id, farm_id)
    VALUES ('$animal_name', '$breed_id', '$farm_id')";


    if ($conn->query($sql)) {

      
      header("Location: animals.php");

      exit();

    } else {
      echo "Error: " . $sql . "<br>";
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
                                    <div><b>ADD ANIMAL</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
	    
	<form style="padding-top: 20px;" method="POST" action="#" enctype="multipart/form-data">
	  
	  <div class="form-group">
	    <label for="animal_name"><address>Animal Name</address></label>
	    <input type="text" class="form-control" id="animal_name" name="animal_name">
	  </div>
	 <div class="form-group">
        <div class="position-relative form-group">
      
            <label for="breed_id">Breed Name</label>
            <select name="breed_id" class="form-control" id="breed_id">
              <?php foreach($breeds as $breed): ?>
              <option value="<?php echo $breed->id ?>"><?php echo $breed->breed_name; ?></option>
              <?php endforeach; ?>
            </select>
          
        </div>
      </div>

    <div class="form-group">
      <div class="position-relative form-group">
    
          <label for="farm_id">Farm Name</label>
          <select name="farm_id" class="form-control" id="farm_id">
            <?php foreach($farms as $farm): ?>
            <option value="<?php echo $farm->id ?>"><?php echo $farm->farm_name; ?></option>
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

   