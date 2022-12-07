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
                <p><strong>Last Name Name:</strong> <?php echo $studentDetails->lastname?> </p>
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
              <p><strong>Class Admitted: </strong> <?php echo $studentDetails->classAdmitted?> </p>
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
            <center><h5 class="fw-bold">ACADEMIC INFORMATION</h5></center>
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
        <center><h4>Terminal Report</h4></center>
        <h1>content</h1>
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

    <!-- Button trigger modal -->
  <div class="container" style="box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 15px 0 rgba(0, 0, 0, 0.14);">
    <button type="button" class="btn btn-primary mt-5 mb-2 mx-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 15px 0 rgba(0, 0, 0, 0.14);">
      Payment Of Fees
    </button>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title fw-bold fs-2 text-white" id="staticBackdropLabel">Fees Payment</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container">
              <form action="" method="post">
                <div class="container my-3">
                  <label class="fw-bold py-2">Full Name</label>
                  <input type="text" name="fullname" class="form-control">
                </div>
                <div class="container my-3">
                  <label class="fw-bold py-2">Gender</label>
                  <input type="text" name="gender" class="form-control">
                </div>
                <div class="container my-3">
                  <label class="fw-bold py-2">Class</label>
                  <input type="text" name="class" class="form-control">
                </div>
                <div class="container my-3">
                  <label class="fw-bold py-2">Fee To Pay</label>
                  <input type="text" name="fee" class="form-control">
                </div>
                <div class="container my-3">
                  <label class="fw-bold py-2">Amount Paid</label>
                  <input type="text" name="feePaid" class="form-control">
                </div>
                <div class="container my-3">
                  <label class="fw-bold py-2">Amount  Left To Be Paid</label>
                  <input type="text" name="feeLeft" class="form-control">
                </div>
                <div class="container my-3">
                  <label class="fw-bold py-2">Status</label>
                  <input type="text" name="status" class="form-control">
                </div>
                <div class="container mt-3 mb-2">
                  <input type="submit" name="payFee" class="form-control btn btn-sm btn-primary fw-bold py-2">
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Payment Report -->
    <div class="container mt-3 text-center">
      <h2 class="fw-bolder py-2">Payment Report</h2>
      <div class="table-responsive">
        <table class="table table-primary table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Class</th>
              <th>Fee Paid</th>
              <th>Status</th>
              <th>Fee To Pay</th>
              <th>Amount Left To Be Paid</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Richmond Andoh</td>
              <td>Grade  6</td>
              <td>$ 500</td>
              <td>Paying</td>
              <td>$ 1000</td>
              <td>$ 500</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  

  <footer class="bg-primary mt-5">
    <div class="p-5">
      <h4 class="text-center text-white">All Rights Reserved By Richmond Andoh</h4>
    </div>
  </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>