<?php 

  include('connection.php');

  $sql = "SELECT * FROM animal";

  $stmt = $conn->query($sql);

  $animals = array();
  while ($animal = $stmt->fetchObject()) {
            $animals[] = $animal;
  }

  $sql = "SELECT * FROM abattoir_records";

  $stmt = $conn->query($sql);

  $records = array();
  while ($record = $stmt->fetchObject()) {
            $records[] = $record;
  }


   include('app_header3.php');
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
                                    <div><b>ADD PACKHOUSE RECORD</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
      
  <form style="padding-top: 20px;" method="POST" action="get_qr_code.php" enctype="multipart/form-data">
    
    <div class="form-group">
        <div class="position-relative form-group">
      
            <label for="container">Container</label>
            <select name="container_code" class="form-control" id="container">
            <?php foreach($records as $record): ?>
                <option value="<?php echo $record->container_code; ?>"><?php echo $record->container_code; ?></option>
            <?php endforeach; ?>
            </select>
          
        </div>
    </div>

    <div class="form-group">
      <label for="weight"><address>Weight</address></label>
      <input type="text" class="form-control" id="weight" name="weight">
    </div>

    <div class="form-group row">
      <label for="date_arrived" class="col-2 col-form-label">Arrived</label>
      <div class="col-10">
        <input class="form-control" type="date"  id="date_arrived" name="date_arrived">
      </div>
    </div>

     <div class="form-group row">
      <label for="export_date" class="col-2 col-form-label">Export Date</label>
      <div class="col-10">
        <input class="form-control" type="date"  id="export_date" name="export_date" >
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary">GENERATE CODE</button>
  </form>

 </div>
</container>

<?php 

  include('app_footer.php');

?>   

   