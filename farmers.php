<?php 

  include('app_header.php');

   include('connection.php');

   $sql = "SELECT * FROM users WHERE user_role = 'farmer'";

   $stmt = $conn->query($sql);

   $farmers = array();

    while ($farmer = $stmt->fetchObject()) {
              $farmers[] = $farmer;
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
                                    <div><b>FARMERS LIST</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <?php if($_SESSION['user_role'] == 'super_Admin'): ?>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                       <a href="add_farmer.php">
                                        <button type="button"    class="btn-shadow  btn btn-info">
                                            
                                            ADD FARMER
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
              <th>FARMER NAME</th>
              
              <th>ADDRESS</th>
              <th>CONTACT</th>
              <?php if($_SESSION['user_role'] == 'super_admin'): ?>
                <th>UPDATE</th>
                <th>DELETE</th>
              <?php endif; ?>
          </tr>
          </thead>
          <?php $i = 0; ?>
          <tbody>
          <?php foreach($farmers as $farmer): ?>
          <tr>
              <td><?php ++$i; ?></td>
              <td><?php echo $farmer->first_name; ?> <?php echo $farmer->last_name; ?></td>
              <td><?php echo $farmer->address; ?></td>
              <td><?php echo $farmer->contact; ?></td>
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

