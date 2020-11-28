<?php 
  session_start();

  include('app_header.php');

  include('connection.php');

  $sql = "SELECT * FROM districts";

  $stmt = $conn->query($sql);

   $districts = array();
   while ($district = $stmt->fetchObject()) {
             $districts[] = $district;
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
                                    <div><b>DISTRICTS LIST</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                      <a href="add_district.php">
                                        <button type="button"    class="btn-shadow  btn btn-info">
                                            
                                            ADD DISTRICT
                                        </button>
                                        </a>
                                    </div>
                                </div>    
                            </div>
                        </div>
<table>

<div class="main-card mb-3 card" >
  <div class="card-body">
      <table style="width: 100%; margin auto;" id="example" class="table table-hover table-striped table-bordered">
          <thead>
          <tr>
              <th>#</th>
              <th>DISTRICT NAME</th>
              <th>UPDATE</th>
              <th>DELETE</th>
          </tr>
          </thead>
          <?php $i = 0; ?>
          <tbody>
          <?php foreach($districts as $district): ?>
          <tr>
              <td><?php echo ++$i; ?></td>
              <td><?php echo $district->name; ?></td>
              <td><a href="update_district.php?district_id=<?php echo $district->id; ?>&district_name=<?php echo $district->name; ?>"><button class="btn btn-success">Update</button></a></td>
              <td><a href="delete_district.php?district_id=<?php echo $district->id; ?>"><button class="btn btn-danger">Delete</button></a></td>
              
          </tr>
          <?php endforeach; ?>
         
       
        
        
          </tbody>
         
      </table>

<?php 

  include('app_footer.php');

 ?>   

