<?php 

  include('app_header.php');

   include('connection.php');

  $sql = "SELECT * FROM farm JOIN village ON farm.village_id = village.id JOIN users ON farm.farmer_id = users.id";

  $stmt = $conn->query($sql);

  $farms = array();
  while ($farm = $stmt->fetchObject()) {
      $farms[] = $farm;
  }


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
                                    <div><b>FARMS LIST</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <?php if($_SESSION['user_role'] == 'super_Admin'): ?>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                      <a href="add_farm.php">
                                        <button type="button"    class="btn-shadow  btn btn-info">
                                            
                                            ADD FARM
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
              <th>FARM NAME</th>
              <th>FARMER</th>
              <th>LOCATION</th>
              <?php if($_SESSION['user_role'] == 'super_Admin'): ?>
              <th>UPDATE</th>
              <th>DELETE</th>
            <?php endif; ?>
          </tr>
          </thead>
          <?php $i = 0; ?>
          <tbody>
          <?php foreach($farms as $farm): ?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $farm->farm_name; ?></td>
                <td><?php echo $farm->first_name; ?> <?php echo $farm->last_name; ?></td>
                <td><?php echo $farm->village_name; ?></td>
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

