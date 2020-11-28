<?php 

  include('app_header.php');

   include('connection.php');

  $sql = "SELECT * FROM abattoirs";

  $stmt = $conn->query($sql);

  $abattoirs = array();
  while ($abattoir = $stmt->fetchObject()) {
      $abattoirs[] = $abattoir;
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
                                    <div><b>ABATTOIRS</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <?php if($_SESSION['user_role'] == 'super_Admin'): ?>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                      <a href="add_abattoir.php">
                                        <button type="button"    class="btn-shadow  btn btn-info">
                                            
                                            ADD ABATTOIR
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
              <th>ABATTOIR NAME</th>
              <th>LOCATION</th>
              <?php if($_SESSION['user_role'] == 'super_Admin'): ?>
              <th>UPDATE</th>
              <th>DELETE</th>
              <?php endif; ?>
          </tr>
          </thead>
          <?php $i = 0; ?>
          <tbody>
          <?php foreach($abattoirs as $abattoir): ?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $abattoir->abattoir_name; ?></td>
                <td><?php echo $abattoir->location; ?></td>
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

