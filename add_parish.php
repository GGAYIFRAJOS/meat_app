<?php 
	

  include('connection.php');


  $sql = "SELECT * FROM subcounty";

  $stmt = $conn->query($sql);

  $subcounties = array();

  while ($subcounty = $stmt->fetchObject()) {
     $subcounties[] = $subcounty;
  }


  if(isset($_POST['parish_name'])){

    $parish_name = $_POST['parish_name'];
    $subcounty_id = $_POST['subcounty_id'];



    $sql = "INSERT INTO parish (parish_name,subcounty_id)
    VALUES ('$parish_name', '$subcounty_id')";


    if ($conn->query($sql)) {

      header("Location: parishes.php");

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
                                    <div><b>ADD PARISH</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
	    
	<form style="padding-top: 20px;" method="POST" action="#" enctype="multipart/form-data">
	  
	  <div class="form-group">
	    <label for="parish_name"><address>Parish Name</address></label>
	    <input type="text" class="form-control" id="parish_name" name="parish_name">
	  </div>
	  <div class="form-group">
        <div class="position-relative form-group">                        
            <label for="drop2">SubCounty</label>
            <select name="subcounty_id" class="form-control" id="drop2">
              <?php foreach($subcounties as $subcounty): ?>
              <option value="<?php echo $subcounty->id; ?>"><?php echo $subcounty->subcounty_name; ?></option>
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

   