<?php 
  session_start();

  include('app_header.php');

   include('connection.php');

  // $sql = "SELECT * FROM users WHERE user_role = 'doctor'";

  // $stmt = $conn->query($sql);

  // $doctors = array();
  // while ($doctor = $stmt->fetchObject()) {
  //           $doctors[] = $doctor;
  // }


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
                                    <div><b>EXPORTS</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                      <a href="#">
                                        <button type="button"    class="btn-shadow  btn btn-info">
                                            
                                            ADD EXPORT
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
              <th>PARAM 1</th>
              
              <th>PARAM 2</th>
              <th>PARAM 3</th>
              <?php if($_SESSION['user_role'] == 'super_admin'): ?>
                <th>UPDATE</th>
                <th>DELETE</th>
              <?php endif; ?>
          </tr>
          </thead>
          <tbody>
          
          <tr>
              <td>1</td>
              <td>data 1</td>
              <td>data 2</td>
              <td>data 3</td>
              <?php if($_SESSION['user_role'] == 'super_admin'): ?>
                <td><a href="#"><button class="btn btn-success">Update</button></a></td>
                <td><a href="#"><button class="btn btn-danger">Delete</button></a></td>
              <?php endif; ?>
          </tr>
          <tr>
              <td>2</td>
              <td>data 4</td>
              <td>data 5</td>
              <td>data 6</td>
              <?php if($_SESSION['user_role'] == 'super_admin'): ?>
                <td><a href="#"><button class="btn btn-success">Update</button></a></td>
                <td><a href="#"><button class="btn btn-danger">Delete</button></a></td>
              <?php endif; ?>
          </tr>
       
        
        
          </tbody>
         
      </table>

<?php 

  include('app_footer.php');

 ?>   

