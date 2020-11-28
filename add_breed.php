<?php 


  

  include('connection.php');

  if(isset($_POST['breed_name'])){

    $breed_name = $_POST['breed_name'];

      $sql = "INSERT INTO animal_breed (breed_name)
               VALUES ('$breed_name')";


      if ($conn->query($sql)) {

        header("Location: breeds.php");
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
                                    <div><b>ADD ANIMAL BREED</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
	    
	<form style="padding-top: 20px;" method="POST" action="" enctype="multipart/form-data">
	  
	  <div class="form-group">
	    <label for="breed_name"><address>BREED NAME</address></label>
	    <input type="text" class="form-control" id="breed_name" name="breed_name">
	  </div>
	  
	 
	  
	  <button type="submit" class="btn btn-primary">ADD</button>
	</form>

 </div>
</container>

<?php 

  include('app_footer.php');

?>   

   