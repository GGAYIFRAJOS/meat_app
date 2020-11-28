<?php 
  session_start();

  include('app_header3.php');

   include('connection.php');

  $sql = "SELECT * FROM packhouse_records";

  $stmt = $conn->query($sql);

  $packhouse_records = array();
  while ($packhouse_record = $stmt->fetchObject()) {
            $packhouse_records[] = $packhouse_record;
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
                                    <div><b>PACKHOUSE RECORDS</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <?php if($_SESSION['user_role'] == 'super_admin'): ?>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                      <a href="#">
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
              <th>DATE ARRIVED</th>
              
              <th>EXPORT DATE</th>
              <th>CONTAINER</th>
              <th>WEIGHT</th>
              <th>QRCODE</th>
              <?php if($_SESSION['user_role'] == 'super_admin'): ?>
                <th>UPDATE</th>
                <th>DELETE</th>
              <?php endif; ?>
          </tr>
          </thead>
          <?php $i = 0; ?>
          <tbody>
          <?php foreach($packhouse_records as $record): ?>
          
          <tr>
              
              <td><a href="qr_profile.php?id=<?php echo $record->id; ?>"><?php echo ++$i; ?></a></td>
              <td><a href="qr_profile.php?id=<?php echo $record->id; ?>"><?php echo $record->export_date; ?></a></td>
              <td><a href="qr_profile.php?id=<?php echo $record->id; ?>"><?php echo $record->date_arrived; ?></a></td>
              <td><a href="qr_profile.php?id=<?php echo $record->id; ?>"><?php echo $record->container; ?></a></td>
              <td><a href="qr_profile.php?id=<?php echo $record->id; ?>"><?php echo $record->weight; ?></a></td>
              <td><a href="qr_profile.php?id=<?php echo $record->id; ?>"><img src="<?php echo $record->qr_code; ?>"></td>
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

