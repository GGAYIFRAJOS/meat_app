<?php 

  include('app_header.php');
  include('connection.php');

  $sql = "SELECT * FROM users";

  $stmt = $conn->query($sql);

  $users = array();
  while ($user = $stmt->fetchObject()) {
            $users[] = $user;
  }


 ?> 
    
 <?php $i = 0; ?>
 <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div><b>USERS LIST</b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        
                                    </div>
                                </div>    
                            </div>
                        </div>
<table>
<h1 style="text-align: center;"><u><b>USERS</b></u></h1><br><br>

<div class="main-card mb-3 card" >
  <div class="card-body">
      <table style="width: 100%; margin auto;" id="example" class="table table-hover table-striped table-bordered">
          <thead>
          <tr>
              <th>#</th>
              <th>NAMES</th>
              <th>USER ROLE</th>
              <th>CONTACT</th>
              <th>EMAIL</th>
              <th>UPDATE</th>
              <th>DELETE</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach($users as $user): ?>
          <tr>
              <td><?php echo ++$i; ?></td>
              <td><?php echo $user->first_name; ?> &nbsp <?php echo $user->last_name; ?></td>
              <td><?php echo $user->user_role; ?></td>
              <td><?php echo $user->contact; ?></td>
              <td><?php echo $user->email; ?></td>
              <td><button class="btn btn-success">Update</button></td>
              <td><button class="btn btn-danger">Delete</button></td>
          </tr>

          <?php endforeach; ?>
        
          </tbody>
         
      </table>

<?php 

  include('app_footer.php');

 ?>   

