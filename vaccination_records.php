<?php 

  

  include('connection.php');

  $sql = "SELECT * FROM vaccination_history JOIN animal ON vaccination_history.animal_id = animal.id JOIN users ON vaccination_history.officer_id = users.id  JOIN farm ON animal.farm_id = farm.id";

  $stmt = $conn->query($sql);

  $records = array();
  while ($record = $stmt->fetchObject()) {
            $records[] = $record;
  }

   include('app_header.php');
 ?>   
    
 <?php //$i = 0; ?>

  <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div><b>VACCINATION RECORDS</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <?php if($_SESSION['user_role'] == 'super_admin'): ?>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                      <a href="add_vaccination_records.php">
                                        <button type="button"    class="btn-shadow  btn btn-info">
                                            
                                            ADD RECORD
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
              <th>ANIMAL</th>
              <th>FARM</th>
              <th>DISEASE</th>
              <th>VACCINE</th>
              <th>DATE</th>
              <?php if($_SESSION['user_role'] == 'super_admin'): ?>
              <th>UPDATE</th>
              <th>DELETE</th>
              <?php endif; ?>

          </tr>
          </thead>
          <?php  $i = 0; ?>
          <tbody>
          <?php foreach($records as $record): ?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $record->animal_name; ?></td>
                <td><?php echo $record->farm_name; ?></td>
                <td><?php echo $record->disease; ?></td>
                <td><?php echo $record->vaccine_applied; ?></td>
                <td><?php echo $record->date; ?></td>
                <?php if($_SESSION['user_role'] == 'super_admin'): ?>
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

