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

  // $sql = "SELECT * FROM grades";

  // $stmt = $conn->query($sql);

  // $grades = array();
  // while ($grade = $stmt->fetchObject()) {
  //           $grades[] = $grade;
  // }

  // $sql = "SELECT * FROM hospitals";

  // $stmt = $conn->query($sql);

  // $hospitals = array();
  // while ($hospital = $stmt->fetchObject()) {
  //           $hospitals[] = $hospital;
  // }
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
                                    <div><b>USER PROFILE FOR <?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?></b>
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                      <a href="#">
                                        <button type="button"    class="btn-shadow  btn btn-info">
                                            
                                            BACK
                                        </button>
                                        </a>
                                    </div>
                                </div>
                                   
                            </div>
                            
                        </div>






<div style="margin: auto;" class="col-md-6">
                    <div class="main-card mb-3 card">







                    <div class="card-body">





                        <div>

                                                 <ul class="list-group">

                                                       <li class="list-group-item" style="text-align:center; list-style-position:inside;" >

                         <div class="form-row">
                         <div class="col-md-12">

                                         



                                               <img width="200" height="200" class="rounded-circle" src='/static/assets/images/no-image.jpg'>

                                

 </div>

   

                                                        </div>

                                                   </li>


                                                 <br>

 <li class="active list-group-item" style="text-align: center"><strong>Name:</strong> Habanero 2 test</li>

                                                  <div class="form-row">


                                            <div class="col-md-6">



                                                <li class="list-group-item"><strong>Code:</strong>  002</li>
                                                  <li class="list-group-item"><strong>Description:</strong>  </li>




                                                     <li class="list-group-item"><strong>Category:</strong>  </li>
                                    <li class="list-group-item"><strong>Crop Local Name:</strong>  </li>


 <li class="list-group-item"><strong>Crop yield units:</strong>  Kgs</li>
                 <li class="list-group-item"><strong>Harvest Period (Days):</strong>  </li>
                         <li class="list-group-item"><strong>Spray Fertigation Program:</strong>  FRUITY</li>

                                            </div>
                                            <div class="col-md-6">



                                             <li class="list-group-item"><strong>Recommended Soil type:</strong>  </li>
                                               <li class="list-group-item"><strong>Nursery Status:</strong>  False</li>
                                                   <li class="list-group-item"><strong>External Exports Market:</strong>  True</li>                           <li class="list-group-item"><strong>Local Market:</strong>  True</li>
                                                  <li class="list-group-item"><strong>Seedling Manufacturer:</strong>  Test</li>

                                                  <li class="list-group-item"><strong>Seedling Local Code:</strong>  </li>
                                                  <li class="list-group-item"><strong>HS Code:</strong>  </li>


                                            </div>
                                                  </div>



                                                      <li class="list-group-item"><strong>Seedling Distributor(s):</strong>



                                                          

                                                      </li>





                                            </ul>
                                            </div>






                                </div>


                         <div class="wrapper" style="text-align: center;">
                                         <button data-toggle="tooltip" title="Edit Crop" data-placement="bottom"
                                                 onclick="location.href='/update_crop/2'"
                                                 type="button" class="mb-2 mr-2 btn btn-shadow btn-primary"><i class="pe-7s-upload btn-icon-wrapper"> </i> Update </button>

                             <button data-toggle="tooltip" title="Remove Crop" data-placement="right"
                                                 onclick="location.href='/retire_crop/2'"
                                                 type="button" class="mb-2 mr-2 btn btn-shadow btn-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i> Retire </button>



                         </div>
                        <p>
                            
                        </p>

                    </div>

                     </div>

