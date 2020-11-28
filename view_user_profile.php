<?php 

  include('app_header.php');

  include('connection.php');

  


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
                                    <div><b>USER PROFILE FOR <?php echo $_SESSION["first_name"]; ?> <?php echo $_SESSION["last_name"]; ?></b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                      <a href="edit_user_profile.php">
                                        <button type="button"    class="btn-shadow  btn btn-info">
                                            
                                            EDIT
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

         



               <img width="200" height="200" class="rounded-circle" src='/static/assets/images/no-image.jpg'>

                

                 </div>

                </div>

                   </li>

                <li class="active list-group-item"><strong>First Name: &nbsp</strong><?php echo $_SESSION["first_name"]; ?></li>
                <li class="active list-group-item"><strong>Last Name: &nbsp</strong><?php echo $_SESSION["last_name"]; ?></li>

                  
                   <li class="list-group-item"><strong>Email: &nbsp</strong><?php echo $_SESSION["email"]; ?></li>


                <li class="list-group-item"><strong>Phone Number: &nbsp</strong><?php echo $_SESSION["contact"]; ?></li>
        
                <li class="list-group-item"><strong>Address: &nbsp</strong><?php echo $_SESSION["address"]; ?></li>
                <li class="list-group-item"><strong>Responsibility:</strong>

                        <?php echo $_SESSION["user_role"]; ?>

                </li>


            </ul>
            </div>

                </div>

            <p>
            
        </p>

      </div>

    </div>




  </div>
</div>


<?php 

  include('app_footer.php');

 ?>   

