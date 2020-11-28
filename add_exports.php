<?php 
	
session_start();

  include('app_header.php');

  include('connection.php');

  // $sql = "SELECT * FROM users WHERE user_role = 'doctor'";

  // $stmt = $conn->query($sql);

  // $doctors = array();
  // while ($doctor = $stmt->fetchObject()) {
  //           $doctors[] = $doctor;
  // }

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
                                    <div><b>ADD EXPORTS</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
	    
	<form style="padding-top: 20px;" method="POST" action="#" enctype="multipart/form-data">
	  
	  <div class="form-group">
	    <label for="last_name"><address>Parameter 1</address></label>
	    <input type="text" class="form-control" id="last_name" name="last_name">
	  </div>
	  <div class="form-group">
	    <label for="contact"><address>Parameter 2</address></label>
	    <input type="text" class="form-control" id="contact" name="contact">
	  </div>
	  

    <div class="form-group">
      <label for="contact"><address>Parameter 3</address></label>
      <input type="text" class="form-control" id="contact" name="contact">
    </div>

	  <div class="form-group row">
		  <label for="example-date-input" class="col-2 col-form-label">Parameter 4</label>
		  <div class="col-10">
		    <input class="form-control" type="text"  id="example-date-input" >
		  </div>
		</div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Parameter 5</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
	  </div>
	  
	  <button type="submit" class="btn btn-primary">REGISTER</button>
	</form>

 </div>
</container>

<?php 

  include('app_footer.php');

?>   

   