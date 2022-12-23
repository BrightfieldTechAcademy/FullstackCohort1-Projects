<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corsa And Partners Boarding School Complex</title>
    <link rel="icon" href="<?php echo BASE_URL?>/Views/image/logo.jpg">
    <link rel="stylesheet" href="https://bootswatch.com/5/cosmo/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,700;1,100;1,300;1,500&display=swap" rel="stylesheet">

    <!-- datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap.min.css">

    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-light bg-primary fixed-top" style="box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.1), 0 3px 10px 0 rgba(0, 0, 0, 0.1);">
    <div class="container-fluid">
      <a href="<?php echo BASE_URL?>/dashboard.php" class="btn btn-primary py-2 px-3 me-auto">
        <span class="material-icons">
            arrow_back
        </span>
      </a>
      <a class="navbar-brand m-auto" href="#">
        <img src="<?php echo BASE_URL?>/Views/image/logo.jpg" class="thumbmail img-fluid" alt="" style="width: 80px; height: 60px;">
      </a>
    </div>
  </nav>

  <div id="profileSection" class="container" style="margin-top: 7rem !important;">
    <section class="text-center text-lg-start bg-light container shadow" >
      <section class="mt-5 pt-3">
        <div class="container-fluid text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-xm-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
              <!-- Content -->
              <div id="vectorForProfile">
                <center>
                  <img src="<?php echo BASE_URL. "/". $studentDetails->picture?>" alt="" class="img-fluid img-thumbnail">
                </center>
              </div>
              <!-- name of student -->
              <center>
                <h4 class="text-uppercase fw-bold mt-4">
                  <i class="fas fa-gem me-3"></i><?php echo $studentDetails->firstname . ' ' . $studentDetails->middlename . ' '.  $studentDetails->lastname; ?>
                    <small class="mute">STUDENT</small>
                </h4>
              </center>
            </div>
            <!-- Grid column -->
            <div class=" col-xm-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
              <!-- Links -->
              <hr>
              <center>
                <h6 class="text-uppercase fw-bold mb-4">
                  Basic Information
                </h6>
              </center>
                <hr>
                <p class="my-2"><strong>First Name:</strong> <?php echo $studentDetails->firstname?> </p>
                <p><strong>Middle Name:</strong> <?php echo $studentDetails->middlename?> </p>
                <p><strong>Last Name:</strong> <?php echo $studentDetails->lastname?> </p>
                <p><strong>Gender: </strong> <?php echo $studentDetails->gender?> </p>
                <p><strong>Date of Birth:</strong>  <?php echo date("jS F, Y", strtotime($studentDetails->dateOfBirth))?> </p>
                <p><strong>Religion:</strong>  <?php echo $studentDetails->religion?> </p>
            </div>
            <!-- Grid column -->
            <div class="col-xm-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <hr>
              <center>
                <h6 class="text-uppercase fw-bold mb-4">Address </h6>
              </center>
                <hr>
              <p><strong>Place of Birth: </strong><?php echo $studentDetails->placeOfBirth?> </p>
              <p><strong>Hometown: </strong> <?php echo $studentDetails->hometown?> </p>
              <p><strong>Residential Address: </strong> <?php echo $studentDetails->residentialAddress?> </p>
              <p><strong>GPS Address: </strong> <?php echo $studentDetails->gpsAddress?> </p>
              <p><strong>Current Class : </strong> <?php echo $studentDetails->className?> </p>
              <p><strong>Year of Admission: </strong> <?php echo $studentDetails->yearOfAdmission?> </p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
    <!-- Section: Links  -->
    </section>
  </div>

  <div class="container my-5 py-5" style="box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 15px 0 rgba(0, 0, 0, 0.14);">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="healthInformation-tab" data-bs-toggle="tab" data-bs-target="#healthInformation" type="button" role="tab" aria-controls="healthInformation" aria-selected="true">
            <center><h5 class="fw-bold">HEALTH INFORMATION</h5></center>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="academicInformation-tab" data-bs-toggle="tab" data-bs-target="#academicInformation" type="button" role="tab" aria-controls="academicInformation" aria-selected="false">
            <center><h5 class="fw-bold">ACADEMIC INFORMATION</h5>
            </center>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="parentInformation-tab" data-bs-toggle="tab" data-bs-target="#parentInformation" type="button" role="tab" aria-controls="parentInformation" aria-selected="false">
         <center><h5 class="fw-bold">PARENT'S INFORMATION</h5></center>
        </button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="healthInformation" role="tabpanel" aria-labelledby="healthInformation-tab">
        <div class="row">
          <div class="col-xm-12 col-sm-6 col-md-6 col-lg-6">
            <ul style="list-style: none;" class="pt-3">
                <li class="my-2"> <strong>EMERGENCY CONTACT NUMBER : </strong><?php echo $studentDetails->emergencyContactNumber?> </li>
                <li class="my-2"> <strong>PERSONAL DOCTOR'S NUMBER : </strong><?php echo $studentDetails->personalDoctorNumber?> </li>
                <li class="my-2"> <strong>MEDICAL FITNESS NOTE : </strong> <?php echo $studentDetails->medicalFitnessNote?></li>
            </ul>
          </div>

          <div class="col-xm-12 col-sm-6 col-md-6 col-lg-6">
            <ul style="list-style: none;" class="pt-3" >
                <li class="my-2"> <strong>BLOOD GROUP : </strong> <?php echo $studentDetails->bloodGroup?> </li>
                <li class="my-2"> <strong>PREFERED DIET : </strong> <?php echo $studentDetails->preferedDiet?> </li>
                <li class="my-2"> <strong>UNPREFERED DIET : </strong> <?php echo $studentDetails->unpreferedDiet?> </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="academicInformation" role="tabpanel" aria-labelledby="academicInformation-tab">
        <center>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#terminalReport" style="box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 15px 0 rgba(0, 0, 0, 0.14); margin-right: 15rem; margin-top: 1rem;">
            Add Results
          </button>
        </center>

        <!--Academic  Modal -->
        <div class="modal fade" id="terminalReport" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="terminalReportLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title fw-bold fs-2 text-white" id="terminalReportLabel">Terminal Report</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <form action="<?php echo BASE_URL .'/addStudentTermRecords.php' ?>" method="post">
                    <div class="container my-3">
                      <input type="hidden" name="studentId" class="form-control" value="<?php echo $studentDetails->studentId?>">
                    </div>  
                  <div class="container my-3">
                    <input type="hidden" name="studentUuid" class="form-control" value="<?php echo $studentDetails->uuid?>">
                  </div> 
                  
                  <div class="container my-3">
                      <label class="fw-bold py-2">Class</label>
                      <input type="text" name="class" class="form-control" value="<?php echo $studentDetails->classAdmitted ?>">
                    </div>
                    <div class="container my-3">
                      <div class="m-2">
                        <label class="fw-bold py-2">Subjects</label>
                        <input type="text" name="subjects" class="form-control">
                      </div>
                     
                    </div>
                    
                    <div class="container my-3 d-flex">
                      <div class="m-2">
                        <label class="fw-bold py-2">Aggregate</label>
                        <input type="text" name="aggregate" class="form-control">
                      </div>
                      <div class="m-2">
                        <label class="fw-bold py-2">Number Of Enrollments</label>
                        <input type="text" name="numberOfEnrollments" class="form-control">
                      </div>
                    </div>

                    <div class="container my-3 d-flex">
                      <div class="m-2">
                        <label class="fw-bold py-2">Term</label>
                        <select name="term" class="form-control">
                          <option value="">First Term</option>
                          <option value="">Second Term</option>
                          <option value="">Third Term</option>
                        </select>
                      </div>
                      <div class="m-2">
                        <label class="fw-bold py-2">Position In Class</label>
                        <input type="text" name="position" class="form-control">
                      </div>

                      <div class="m-2">
                        <label class="fw-bold py-2">Academic Year</label>
                        <input type="text" name="academicYear" class="form-control">
                      </div>

                      <div class="m-2">
                        <label class="fw-bold py-2">Remarks</label>
                        <input type="text" name="remarks" class="form-control">
                      </div>
                    </div>

                    <div class="container mt-3 mb-2">
                      <input type="submit" name="addResults" class="form-control btn btn-sm btn-primary fw-bold py-2">
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Terminal Report -->
        <div class="container mt-5">
          <h2 class="fw-bolder py-2 text-center">Terminal Report</h2>
          <div class="table-responsive container">
            <div class="container search">
              <table id="example1" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th>Subjects</th>
                    <th>Class Score (%)</th>
                    <th>Exam Score (%)</th>
                    <th>Remarks</th>
                    <th>Position</th>
                    <th>Grade</th>
                  </tr>
                </thead>

              </table>
            </div>
          </div>
          <div class="container mt-4 mb-2 w-25">
              <ul class="list-group">
                <li class="list-group-item">Total Score: <strong>1800</strong></li>
                <li class="list-group-item">Average Score: <strong>1800</strong></li>
                <li class="list-group-item">Position In Class: <strong>5th</strong></li>
                <li class="list-group-item">Grade: <strong>7</strong></li>
              </ul>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="parentInformation" role="tabpanel" aria-labelledby="parentInformation-tab">
        <div class="row">
            <div class="col-4">
                <ul style="list-style: none;" >
                    <li class="my-2"> <strong>FATHER'S NAME : </strong> <?php echo $studentDetails->fathersName?>  </li>
                    <li class="my-2"> <strong>TEL. NUMBER : </strong> <?php echo $studentDetails->fathersTelephone?>  </li>
                    <li class="my-2"> <strong>OCCUPATION : </strong> <?php echo $studentDetails->fathersOccupation?></li>
                    <li class="my-2"> <strong>HOMETOWN : </strong> <?php echo $studentDetails->fathersHometown?> </li>
                </ul>
            </div>
            <div class="col-4">
                <ul style="list-style: none;" >
                    <li class="my-2"> <strong>MOTHER'S NAME : </strong> <?php echo $studentDetails->mothersName?> </li>
                    <li class="my-2"> <strong>TEL. NUMBER : </strong>  <?php echo $studentDetails->mothersTelephone?></li>
                    <li class="my-2"> <strong>OCCUPATION : </strong> <?php echo $studentDetails->mothersOccupation?></li>
                    <li class="my-2"> <strong>HOMETOWN : </strong> <?php echo $studentDetails->mothersHometown?></li>
                </ul>
            </div>
        </div>
      </div>
    </div>

  </div>
    <!-- bills payment -->

    <!-- Fee Payment -->
  <div class="container p-4 my-4" style="box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 15px 0 rgba(0, 0, 0, 0.14);">

    <div class="accordion m-3" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button container" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <strong>Add Fee Payment</strong>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
          <div class="container">
              <form action="<?php echo BASE_URL .'/studentFees.php'?>" method="post">
                <div class="container my-3">
                  <input type="hidden" name="studentId" class="form-control" value="<?php echo $studentDetails->studentId?>">
                </div>  
                <div class="container my-3">
                  <input type="hidden" name="studentUuid" class="form-control" value="<?php echo $studentDetails->uuid?>">
                </div>  
                <div class="container my-3">
                  <label class="fw-bold py-2">Term Fees</label>
                  <input type="text" name="termFees" class="form-control">
                </div>

                <div class="container my-3">
                  <label class="fw-bold py-2">Amount Paid</label>
                  <input type="text" name="amountPaid" class="form-control">
                </div>
                <div class="container my-3">
                  <label class="fw-bold py-2">Term</label>
                  <input type="text" name="term" class="form-control">
                </div>
                <div class="container my-3">
                  <label class="fw-bold py-2">Academic Year</label>
                  <input type="text" name="academicYear" class="form-control">
                </div>
                <div class="container my-3">
                  <label class="fw-bold py-2">Date of Payment</label>
                  <input type="date" name="dateOfPayment" class="form-control">
                </div>

                <div class="container mt-3 mb-2">
                  <input type="submit" name="payFees" class="form-control btn btn-sm btn-primary fw-bold py-2">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Payment Report -->
    <div class="container mt-3 text-center">
      <h2 class="fw-bolder py-2">Payment Report</h2>
      <div class="container table-responsive">
        <table class="table table-striped table-primary" style="width: 100%;">
          <thead>
            <tr>
              <th>Term Fees</th>
              <th>Amount Paid</th>
              <th>Term</th>
              <th>Academic Year</th>
              <th>Date of Payment</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($studentFees as $each): ?>
              <tr>
                 <td><?php echo $each->termFees?></td>
                 <td><?php echo $each->amountPaid ?></td>
                 <td><?php echo $each->term ?></td>
                 <td><?php echo $each->academicYear ?></td>
                 <td><?php echo $each->dateOfPayment ?></td>
                 <?php if($each->isStudentOwing): ?>
                    <?php echo "owing" ?>
                  <?php else: ?>
                    <?php echo "not owing" ?>
                  <?php endif;?>
              </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- datatables -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

       <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
       <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
       <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap.min.js"></script>
       <script>
             $(document).ready(function() {
                 var table = $('#example1').DataTable( {
                     responsive: true
                 } );

                 new $.fn.dataTable.FixedHeader( table );
             });
         </script>


         <!-- <script>
             $(document).ready(function() {
                 var table = $('#example').DataTable( {
                     responsive: true
                 } );

                 new $.fn.dataTable.FixedHeader( table );
             });
         </script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>