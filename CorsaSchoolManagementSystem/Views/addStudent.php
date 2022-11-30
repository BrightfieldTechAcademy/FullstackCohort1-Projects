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

</head>
<body>
  <nav class="navbar navbar-light bg-primary fixed-top" style="box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 15px 0 rgba(0, 0, 0, 0.14);">
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
  <div class="text-center text-primary text-center m-auto py-3 rounded" style="box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 15px 0 rgba(0, 0, 0, 0.14); width: 60%; margin-top: 8rem !important;">
    <h5 class="fw-bolder"> STUDENT PERSONAL INFORMATION</h5>
  </div> 
  
  <form action="<?php BASE_URL. "/addStudent.php"?>" method="post" enctype="multipart/form-data" class="py-2 px-3 rounded container my-5" style="box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 15px 0 rgba(0, 0, 0, 0.14);">
      <div class="container rounded m-auto" style="width: 13rem; height: 10rem; box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 15px 0 rgba(0, 0, 0, 0.14);">
        <img id="picture" class="img-fluid" src=""/>
      </div>
      <div class="accordion container rounded py-2 px-3" id="accordionExample">
        <div class="accordion-item my-4 border border-dark">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              PERSONAL INFORMATION
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body text-primary">

                  <div class="d-flex flex-column container mt-4">
                    <label for="firstName" class="my-2">Student's Photograph</label>
                    <input type="file" name="fileToUpload" class="form-control" id="file" class="mt-3" onchange="preview()" required>
                  </div>

                  <div class="d-flex flex-column container mt-4">
                        <label for="firstName" class="my-2">First name</label>
                        <input type="text" class="form-control" id="fname" name="firstName" required>
                    </div>
                    <div class="d-flex flex-column container mt-4">
                        <label for="lastName" class="my-2">Last name:</label>
                        <input type="text" class="form-control" id="fname" name="lastName" required>
                    </div>

                    <div class="d-flex flex-column container mt-4">
                        <label for="middleName" class="my-2">Middle name:</label>
                        <input type="text" class="form-control" id="fname" name="middleName">
                    </div>
                    
                    <div class="d-flex flex-column container mt-4">
                        <label for="DOB" class="my-2">Date Of Birth:</label>
                        <input type="date" class="form-control" id="fname" name="dateOfBirth" required>
                    </div>
                    
                    <div class="d-flex flex-column container mt-4">
                        <label for="POB" class="my-2">Place Of Birth:</label>
                        <input type="text" class="form-control" id="fname" name="placeOfBirth" required>
                    </div>
                    
                    <div class="d-flex flex-column container mt-4">
                        <label for="home-town" class="my-2">Hometown:</label>
                        <input type="text" class="form-control" id="fname" name="hometown" required>
                    </div>
                    
                    <div class="d-flex flex-column container mt-4">
                        <label for="Ressident" class="my-2">Residential Address:</label>
                        <input type="text" class="form-control" id="fname" name="residentialAddress">
                    </div>
                    
                    <div class="d-flex flex-column container mt-4">
                        <label for="GPS" class="my-2">GPS Address:</label>
                        <input type="text" class="form-control" name="GPSAddress">
                    </div>
                   
                    <div class="container mt-4">
                        <p class="mt-3 fw-bolder">Gender</p>
                         <div class="d-flex">
                            <input type="radio" class="ps-2" name="gender" value="Male">
                            <label for="male" class="p-2">Male</label>
                            
                            <input type="radio" class="ps-2" name="gender" value="Female">
                            <label for="female" class="p-2">Female</label>
                            
                            <input type="radio" class="ps-2" name="gender" value="Other">
                            <label for="other" class="p-2">Other</label>
                            
                         </div>
                    </div>

                    <div class="d-flex flex-column container mt-4">
                        <label for="GPS" class="my-2">Religion</label>
                        <input type="text" class="form-control" name="religion">
                    </div>

                    <div class="d-flex flex-column container mt-4">
                        <label for="GPS" class="my-2">Former School</label>
                        <input type="text" class="form-control" name="formerSchool">
                    </div>

                    <div class="d-flex flex-column container mt-4">
                        <label for="GPS" class="my-2">Previous Class</label>
                        <input type="text" class="form-control" name="previousClass">
                    </div>

                    <div class="d-flex flex-column container mt-4">
                        <label for="GPS" class="my-2">Class Admitted</label>
                        <input type="text" class="form-control" name="classAdmitted">
                    </div>

                    <div class="d-flex flex-column container mt-4">
                        <label for="GPS" class="my-2">Year Of Admission</label>
                        <input type="number" min="2000" max="3000" class="form-control" name="yearOfAdmission">
                    </div>
            </div>
          </div>
        </div>

        <div class="accordion-item text-primary border border-dark my-4">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              PARENTS INFORMATION
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                  <div class="d-flex flex-column container">
                    <label class="my-2">Father's name:</label>
                    <input type="text" class="form-control" name="fathersName" required>
                  </div>

                  <div class="d-flex flex-column container mt-4">
                    <label class="my-2">Father's Occupation</label>
                    <input type="text" class="form-control" name="fathersOccupation" required>
                  </div>

                  <div class="d-flex flex-column container mt-4">
                    <label class="my-2">Father's Telephone</label>
                    <input type="tel" class="form-control" name="fathersTelephone" required>
                  </div>

                  <div class="d-flex flex-column container mt-4">
                    <label class="my-2">Father's Hometown</label>
                    <input type="text" class="form-control" name="fathersHometown" required>
                  </div>

                  <div class="d-flex flex-column container mt-4">
                    <label class="my-2">Mother's name</label>
                    <input type="text" class="form-control" name="mothersName" required>
                  </div>

                  <div class="d-flex flex-column container mt-4">
                    <label class="my-2">Mother's Occupation</label>
                    <input type="text" class="form-control" name="mothersOccupation" required>
                  </div>

                  <div class="d-flex flex-column container mt-4">
                    <label class="my-2">Mother's Hometown</label>
                    <input type="text" class="form-control" name="mothersHometown" required>
                  </div>

                  <div class="d-flex flex-column container mt-4">
                    <label class="my-2">House Number</label>
                    <input type="text" class="form-control" name="houseNumber">
                  </div>

                  <div class="d-flex flex-column container mt-4">
                    <label class="my-2">Mother's Telephone</label>
                    <input type="tel" class="form-control" name="mothersTelephone" required>
                  </div>

                  <h4 class="mt-4 ms-3">Guardian's Details (If different from parents)</h4>

                  <div class="d-flex flex-column container mt-3">
                    <label class="my-2">Guardian's Name</label>
                    <input type="text" class="form-control" name="guardiansName">
                  </div>

                  <div class="d-flex flex-column container mt-4">
                    <label class="my-2">Guardian's Residence</label>
                    <input type="text" class="form-control" name="guardiansResidence">
                  </div>

                  <div class="d-flex flex-column container mt-4">
                    <label class="my-2">Guardian's Contact</label>
                    <input type="tel" class="form-control" name="guardianscontact">
                  </div>
            </div>
          </div>
        </div>

        <div class="accordion-item text-primary border border-dark my-4">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              HEALTH INFORMATION
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="d-flex flex-column container mt-4">
                  <label class="my-2">Emergency Contact Number</label>
                  <input type="tel" class="form-control" name="emergencyContact" required>
                </div>

                <div class="d-flex flex-column container mt-4">
                  <label class="my-2">Personal Doctor Number</label>
                  <input type="tel" class="form-control" name="doctorsContact">
                </div>

                <div class="d-flex flex-column container mt-4">
                  <label class="my-2">Medical Fitness Note</label>
                  <input type="text" class="form-control" name="fitnessNote">
                </div>

                <div class="d-flex flex-column container mt-4">
                  <label class="my-2">Blood Group</label>
                  <input type="text" class="form-control" name="bloodGroup">
                </div>

                <div class="d-flex flex-column container mt-4">
                  <label class="my-2">Prefered Diet</label>
                  <input type="tel" class="form-control" name="preferedDiet">
                </div>

                <div class="d-flex flex-column container mt-4">
                  <label class="my-2">Unprefered Diet</label>
                  <input type="tel" class="form-control" name="unpreferedDiet">
                </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="container">
        <input type="submit" value="Submit" class="form-control btn btn-primary my-2 btn-sm text-white py-2 px-3 fs-4" style="box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 15px 0 rgba(0, 0, 0, 0.14);" name="addStudent">
      </div>
  </form> 
    
  <script type="text/javascript">
    let preview = () => {
      picture.src=URL.createObjectURL(event.target.files[0]);
      picture.style.width = "100%";
      picture.style.height = "100%";
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>