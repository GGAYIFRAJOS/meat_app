<?php 

  include('app_header.php');

  include('connection.php');

  $district_id = $_SESSION['district_id'];

  $sql = "SELECT * FROM animal JOIN animal_breed ON animal.breed_id = animal_breed.id JOIN farm ON animal.farm_id = farm.id JOIN village ON farm.village_id = village.id JOIN parish ON village.parish_id = parish.id JOIN subcounty ON parish.subcounty_id = subcounty.id JOIN districts ON subcounty.district_id  = districts.id  WHERE district_id = '$district_id'";

  $stmt = $conn->query($sql);

  $animals = array();
  while ($animal = $stmt->fetchObject()) {
            $animals[] = $animal;
  }


 ?>   
    
 <?php $i = 0; ?>

  <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div><b>ANIMALS LIST</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <?php if($_SESSION['user_role'] == 'super_Admin'): ?>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                      <a href="add_animal.php">
                                        <button type="button"    class="btn-shadow  btn btn-info">
                                            
                                            ADD ANIMAL
                                        </button>
                                        </a>
                                    </div>
                                </div> 
                                <?php endif; ?>   
                            </div>
                        </div>
<table>

<div class="main-card mb-3 card" >
  <div class="card-body">
      <table style="width: 100%; margin auto;" id="example" class="table table-hover table-striped table-bordered">
          <thead>
          <tr>
              <th>#</th>
              <th>ANIMAL NAME</th>
              <th>BREED NAME</th>
              <th>FARM NAME</th>
              <?php if($_SESSION['user_role'] == 'super_Admin'): ?>
              <th>UPDATE</th>
              <th>DELETE</th>
              <?php endif; ?>
          </tr>
          </thead>
          <tbody>
          <?php foreach($animals as $animal): ?>
          <tr>
              <td><?php echo ++$i; ?></td>
              <td><?php echo $animal->animal_name; ?></td>
              <td><?php echo $animal->breed_name; ?></td>
              <td><?php echo $animal->farm_name; ?></td>
              <?php if($_SESSION['user_role'] == 'super_Admin'): ?>
              <td><a href="#"><button class="btn btn-success">Update</button></a></td>
              <td><a href="#"><button class="btn btn-danger">Delete</button></a></td>
              <?php endif; ?>
          </tr>
          <?php endforeach; ?>
         
          </tbody>
         
      </table>

<?php 

  include('app_footer.php');

 ?>   

