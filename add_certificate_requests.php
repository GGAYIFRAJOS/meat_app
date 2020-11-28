<?php 

  include('connection.php');

  $sql = "SELECT * FROM users WHERE user_role = 'farmer'";

  $stmt = $conn->query($sql);

  $farmers = array();
  while ($farmer = $stmt->fetchObject()) {
            $farmers[] = $farmer;
  }

  

  include('app_header.php');

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
                                    <div><b>ADD CERTIFICATE REQUESTS</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>


  
   
 <div class="container" style="width: 60%;">
      
  <form style="padding-top: 20px;" method="POST" action="add_certificate_request.php" enctype="multipart/form-data">
    
    <div class="form-group">
        <div class="position-relative form-group">
      
            <label for="farmer_id">Farmer</label>
            <select name="farmer_id" class="form-control" id="farmer_id">
            <?php foreach($farmers as $farmer): ?>
                <option value="<?php echo $farmer->id; ?>"><?php echo $farmer->first_name; ?>  <?php echo $farmer->last_name; ?></option>
            <?php endforeach; ?>
            </select>
          
        </div>
    </div>
    <div class="form-group">
      <label for="certificate_type"><address> Certificate Type</address></label>
      <input type="text" class="form-control" id="certificate_type" name="certificate_type">
    </div>

    <div class="form-group">
      <label for="reason"><address>Reason</address></label>
      <input type="text" class="form-control" id="reason" name="reason">
    </div>

    <div class="form-group">
      <label for="issuer"><address>Issuing Organisation</address></label>
      <input class="form-control" type="text"  id="issuer" name="issuer">
    </div>
    
    <button type="submit" class="btn btn-primary">REGISTER</button>
  </form>

 </div>
</container>

<?php 

  include('app_footer.php');

?>   

   