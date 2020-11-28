<?php 
  
session_start();

  include('app_header.php');

  include('connection.php');

  $sql = "SELECT * FROM users WHERE user_role = 'farmer'";

  $stmt = $conn->query($sql);

  $farmers = array();

  while ($farmer = $stmt->fetchObject()) {
      $farmers[] = $farmer;
  }


  $sql = "SELECT * FROM village";

  $stmt = $conn->query($sql);

  $villages = array();

  while ($village = $stmt->fetchObject()) {
      $villages[] = $village;
  }

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
                                    <div><b>ADD FARM</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
      
  <div class="app-logo"></div>
    <div class="divider row"></div>
    <div>
        <form class="" method="post" action="farm_registration.php" enctype="multipart/form-data">
           
            <div class="form-row">
               
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="farm_name" class="">Farm Name</label>
                        <input name="farm_name" id="farm_name" placeholder="Farm Name here..." type="text" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="position-relative form-group">
                  
                        <label for="village_id">Farm Location</label>
                        <select name="village_id" class="form-control" id="village_id">
                        <?php foreach($villages as $village): ?>
                            <option value="<?php echo $village->id; ?>"><?php echo $village->village_name; ?></option>
                        <?php endforeach; ?>
                        </select>
                      
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="farm_acreage" class="">Farm Acreage</label>
                        <input name="farm_acreage" id="farm_acreage" placeholder="Farm Acreage here..." type="text" class="form-control">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="animal_type" class="">Animal_type</label>
                        <input name="animal_type" id="animal_type" placeholder="Animal Type here..." type="text" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="gps_latitude" class=""> Latitude</label>
                        <input name="gps_latitude" id="animal_type" placeholder="Latitude here..." type="text" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="gps_longitude" class=""> Longitude</label>
                        <input name="gps_longitude" id="gps_longitude" placeholder="Longitude here..." type="text" class="form-control">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="position-relative form-group">
                  
                        <label for="farmer_id">Farmer</label>
                        <select name="farmer_id" class="form-control" id="farmer_id">
                        <?php foreach($farmers as $farmer): ?>
                          <option value="<?php echo $farmer->id; ?>"><?php echo $farmer->first_name; ?> <?php echo $farmer->last_name; ?></option>
                        <?php endforeach; ?>
                        </select>
                      
                    </div>
                </div>

            </div>
           
            <div class="mt-4 d-flex align-items-center">
                
                <div class="ml-auto">
                    <button style="background-color: blue;" class="btn btn-primary">REGISTER</button>
                </div>
            </div>
        </form>
    </div>

 </div>
</container>

<?php 

  include('app_footer.php');

?>   

   