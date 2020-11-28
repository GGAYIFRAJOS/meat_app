<?php 

  include('app_header.php');

   include('connection.php');

  $sql = "SELECT * FROM loans JOIN users ON loans.farmer_id = users.id";

  $stmt = $conn->query($sql);

  $loans = array();
  while ($loan = $stmt->fetchObject()) {
    $loans[] = $loan;
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
                                    <div><b>LOAN REQUESTS</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <?php if($_SESSION['user_role'] == 'farmer'): ?>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                      <a href="add_loan_requests.php">
                                        <button type="button"    class="btn-shadow  btn btn-info">
                                            
                                            ADD REQUEST
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
              <th>FARMER</th>
              <th>LOAN AMOUNT</th>
              <th>REASON</th>
              <th>PREFFERED BANK</th>
              <?php if($_SESSION['user_role'] == 'support_officer'): ?>
              <th>PROCESS</th>
              <?php endif; ?>
              <?php if($_SESSION['user_role'] == 'super_Admin'): ?>
              <th>UPDATE</th>
              <th>DELETE</th>
              <?php endif; ?>
          </tr>
          </thead>
          <?php $i = 0; ?>
          <tbody>
          <?php foreach($loans as $loan): ?>
          <tr>
              <td><?php echo ++$i; ?></td>
              <td><?php echo $loan->first_name; ?> <?php echo $loan->last_name; ?></td>
              <td><?php echo $loan->loan_amount; ?></td>
              <td><?php echo $loan->reason; ?></td>
              <td><?php echo $loan->preffered_bank; ?></td>
              <?php if($_SESSION['user_role'] == 'support_officer'): ?>
              <td><a href="#"><button class="btn btn-primary">Process</button></a></td>
              <?php endif; ?>
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

