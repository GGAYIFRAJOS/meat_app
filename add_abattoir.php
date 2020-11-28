<?php 
	

  
  include('connection.php');

  
  include('app_header.php');

  // $sql = "SELECT * FROM grades";

  // $stmt = $conn->query($sql);

  // $grades = array();
  // while ($grade = $stmt->fetchObject()) {
  //           $grades[] = $grade;
  // }

  // $sql = "SELECT * FROM hospitals";

  // $stmt = $conn->query($sql);

  // $hospitals = array();
  // while ($hospital = $stmt->fetchObject()) {
  //           $hospitals[] = $hospital;
  // }
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
                                    <div><b>ADD ABATTOIR</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
	    
	<form style="padding-top: 20px;" method="POST" action="add_abattoir_record.php" enctype="multipart/form-data">
	  
	  <div class="form-group">
	    <label for="abattoir_name"><address>Abattoir Name</address></label>
	    <input type="text" class="form-control" id="abattoir_name" name="abattoir_name">
	  </div>

    <div class="form-group">
      <label for="location"><address>Location</address></label>
      <input type="text" class="form-control" id="location" name="location">
    </div>

    <div class="form-group">
      <label for="gps_latitude"><address>Latitude</address></label>
      <input type="text" class="form-control" id="gps_latitude" name="gps_latitude">
    </div>

    <div class="form-group">
      <label for="gps_longitude"><address>Longitude</address></label>
      <input type="text" class="form-control" id="gps_longitude" name="gps_longitude">
    </div>
	  
	  <button type="submit" class="btn btn-primary">REGISTER</button>
	</form>

 </div>
</container>

<?php 

  include('app_footer.php');

?>   

   