<?php 

  include('app_header3.php');

  include('connection.php');

  $id = $_GET['id'];

 $sql = "SELECT * FROM packhouse_records JOIN abattoir_records ON packhouse_records.container = abattoir_records.container_code JOIN medical_history ON medical_history.animal_id = abattoir_records.animal_id JOIN vaccination_history ON vaccination_history.animal_id = abattoir_records.animal_id JOIN animal ON abattoir_records.animal_id = animal.id JOIN farm ON animal.farm_id = farm.id JOIN users ON farm.farmer_id = users.id WHERE packhouse_records.id = '$id'";


  $stmt = $conn->query($sql);

  $packhouse_record = $stmt->fetchObject();

  
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
                                    <div><b>CROP PROFILE</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                      <a href="print_qr.php?id=<?php echo $packhouse_record->id; ?>">
                                        <button type="button"    class="btn-shadow  btn btn-info">
                                            
                                            PRINT CODE
                                        </button>
                                        </a>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
<table>

<div class="main-card mb-3 card  col-md-6 offset-3" >
   <div class="card-body">

        <div>

          <ul class="list-group">
            <li class="list-group-item" style="text-align:center; list-style-position:inside;" >

             <div class="form-row">
             <div class="col-md-6 offset-3">

         



               <img width="200" height="200"  src="<?php echo $packhouse_record->qr_code; ?>">

                

                 </div>

                </div>

                   </li>

                <li class="active list-group-item"><strong>Date Arrived: &nbsp</strong><?php echo $packhouse_record->date_arrived; ?></li>
                <li class="active list-group-item"><strong>Export Date: &nbsp</strong><?php echo $packhouse_record->export_date; ?></li>

                  
                <li class="list-group-item"><strong>Weight: &nbsp</strong><?php echo $packhouse_record->weight; ?></li>


                <li class="list-group-item"><strong>Container: &nbsp</strong><?php echo $packhouse_record->container; ?></li>

                
        
                


            </ul>
            </div>

                </div>

            <p>
            
        </p>

      </div>

    </div>

   


    <h3 style="text-align: center;">FARMER INFORMATION</h3>
    <div class="main-card mb-3 card  col-md-6 offset-3" >
   <div class="card-body">

        <div>

          <ul class="list-group">
            <li class="list-group-item" style="text-align:center; list-style-position:inside;" >

             <div class="form-row">
            

                </div>

                   </li>

                <li class="active list-group-item"><strong>Names: &nbsp</strong><?php echo $packhouse_record->first_name; ?>  <?php echo $packhouse_record->last_name; ?></li>
                <li class="active list-group-item"><strong>Contact: &nbsp</strong><?php echo $packhouse_record->contact; ?></li>

                <li class="list-group-item"><strong>Email: &nbsp</strong><?php echo $packhouse_record->email; ?></li>

                <li class="list-group-item"><strong>Farm Name: &nbsp</strong><?php echo $packhouse_record->farm_name; ?></li>

                <li class="list-group-item"><strong>District: &nbsp</strong>MPIGI</li>

            </ul>
            </div>

                </div>

            <p>
            
        </p>

      </div>

    </div>




  </div>
</div>

<h3 style="text-align: center;">MEDICAL HISTORY</h3>
<div class="main-card mb-3 card" >
  <div class="card-body">
      <table style="width: 100%; margin auto;" id="example" class="table table-hover table-striped table-bordered">
          <thead>
          <tr>
              <th>#</th>
              <th>DISEASE</th>
              <th>MEDICINE APPLIED</th>
              <th>DESCRIPTION</th>
              <th>DATE APPLIED</th>
              
          </tr>
          </thead>
          <?php $i = 0; ?>
          <tbody>
          
          <tr>
              
              <td><?php echo ++$i; ?></a></td>
              <td><?php echo $packhouse_record->disease; ?></td>
              <td><?php echo $packhouse_record->medicine_applied; ?></td>
              <td><?php echo $packhouse_record->description; ?></td>
              <td><?php echo $packhouse_record->date_applied; ?></td>
              
          </tr>

         
          </tbody>
         
      </table>

      <h3 style="text-align: center;">VACCINATION HISTORY</h3>
	<div class="main-card mb-3 card" >
	  <div class="card-body">
	      <table style="width: 100%; margin auto;" id="example" class="table table-hover table-striped table-bordered">
	          <thead>
	          <tr>
	              <th>#</th>
	              <th>DISEASE</th>
	              <th>DESCRIPTION</th>
	              <th>VACCINE APPLIED</th>
	              <th>DATE APPLIED</th>
	              
	          </tr>
	          </thead>
	          <?php $i = 0; ?>
	          <tbody>
	          
	          <tr>
	              
	              <td><?php echo ++$i; ?></a></td>
	              <td>?php echo $packhouse_record->disease; ?></td>
	              <td><?php echo $packhouse_record->description; ?></td>
	              <td><?php echo $packhouse_record->vaccine_applied; ?></td>
	              <td><?php echo $packhouse_record->date_applied; ?></td>
	              
	          </tr>

         
          </tbody>
         
      </table>
  



<?php 

  include('app_footer.php');

 ?>   

