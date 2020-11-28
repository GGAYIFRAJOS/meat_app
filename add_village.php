<?php 
	
session_start();


include('connection.php');

  $sql = "SELECT * FROM parish";

  $stmt = $conn->query($sql);

  $parishes = array();

  while ($parish = $stmt->fetchObject()) {
     $parishes[] = $parish;
  }


  if(isset($_POST['village_name'])){

    $village_name = $_POST['village_name'];
    $parish_id = $_POST['parish_id'];



    $sql = "INSERT INTO village (village_name, parish_id)
    VALUES ('$village_name', '$parish_id')";


    if ($conn->query($sql)) {

      header("Location: villages.php");

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
                                    <div><b>ADD VILLAGE</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
	    
	<form style="padding-top: 20px;" method="POST" action="#" enctype="multipart/form-data">
	  
	  <div class="form-group">
	    <label for="village_name"><address>Village Name</address></label>
	    <input type="text" class="form-control" id="village_name" name="village_name">
	  </div>

	  <div class="form-group">
        <div class="position-relative form-group">                        
            <label for="parish_id">Parish</label>
            <select name="parish_id" class="form-control" id="parish_id">
              <?php foreach($parishes as $parish): ?>
                <option value="<?php echo $parish->id; ?>"><?php echo $parish->parish_name; ?></option>
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

   