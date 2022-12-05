<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL?>/Views/css/studentDetails.css">
    <title>Students Dashboard</title>

</head>
<body>

    <div id="pageWrapper" >
        <!--start of  logo space -->
        <div  id="header"  class="container">
            <center>
                <img src="<?php echo BASE_URL?>/Views/image/logo.jpg" alt="logo">
            </center>


        </div>
        <!-- end of logo space -->

        <!-- start of students profile section -->
        <div id="profileSection">
            <!-- Footer -->
            <section class="text-center text-lg-start bg-light container shadow" >
                
            
                <!-- Section: Links  -->
                <section class="mt-5 pt-3">
                <div class="container-fluid text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-xm-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                        <!-- Content -->
                        
                        <div id="vectorForProfile">
                            <center><img src="<?php echo BASE_URL?>/Views/image/olver.jpg" alt=""></center>

                        </div>
                        <!-- name of student -->
                        <center>
                            <h4 class="text-uppercase fw-bold mt-4">
                            <i class="fas fa-gem me-3"></i>Mr. Oliver Mensah
                            <small class="mute">STUDENT</small>
                        </h4>    
                        </center>

                    </div>
                    <!-- Grid column -->
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
                        <p><strong>First Name:</strong> Cobby </p>
                        <p><strong>Middle Name:</strong> Cobby </p>

                        <p><strong>Last Name Name:</strong> Lorinda </p>
                        <p><strong>Gender</strong> Male </p>
                        <p><strong>Date of Birth:</strong>  31st January 2000 </p>
                        <p><strong>Religion:</strong>  Christianity </p>
                    </div>
                    <!-- Grid column -->
            
                    
            
                    <!-- Grid column -->
                    <div class="col-xm-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <hr>
                        <center>

                        <h6 class="text-uppercase fw-bold mb-4">Address </h6>
                        </center>
                        <hr>
                        <p><strong>Place of Birth:</strong> Sefwi Bekwai </p>
                        <p><strong>Hometown:</strong> Sefwi Bekwai </p>
                        <p><strong>Residential Address:</strong> Near Apace Guest House </p>
                        <p><strong>GPS Address:</strong> 134234523 </p>
                        <p><strong>Class Admitted:</strong> Sefwi Bekwai </p>
                        <p><strong>Year of Admission:</strong> Sefwi Bekwai </p>
                    </div>
                    <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
                </section>
                <!-- Section: Links  -->
            
                
            </section>
            <!-- Footer -->
        </div>
        <!-- end of students profile section -->


       <!-- start of othe details -->
        <div id="otherDetails">
            <!-- Footer -->
            <section class="text-center text-lg-start bg-light container shadow mt-4">

             
                <div id="firstSectionInOtherDetails">
                                    <!-- Tabs navs -->
                    <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="ex3-tab-1" data-mdb-toggle="tab" href="#ex3-tabs-1" role="tab" aria-controls="ex3-tabs-1" aria-selected="true">Health Information</a>
                        </li>

                        <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex3-tab-2"  data-mdb-toggle="tab" href="#ex3-tabs-2" role="tab" aria-controls="ex3-tabs-2" aria-selected="false">Academic Information</a>
                        </li>

                        <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex3-tab-3" data-mdb-toggle="tab" href="#ex3-tabs-3" role="tab" aria-controls="ex3-tabs-3" aria-selected="false" >Parents Information</a>
                        </li>
                    </ul>
                    <!-- Tabs navs -->
                    
                    <!-- Tabs content -->
                    <div class="tab-content" id="ex2-content">
                    
                        <div class="tab-pane fade show active" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
                            <div class="container">
                                <div class="row">
                        
                                        <center><h5>HEALTH INFORMATION</h5></center>
                                        <div class="col-xm-12 col-sm-6 col-md-6 col-lg-6">
                                            <ul style="list-style: none;" class="pt-3">
                                                <li> <strong>EMERGENCY CONTACT NUMBER :</strong> 03423231322 </li>
                                                <li> <strong>PERSONAL DOCTOR'S NUMBER :</strong> 03423231322 </li>
                                                <li> <strong>MEDICAL FITNESS NOTE :</strong> 03423231322 </li>  
                                            </ul>
                                        </div>

                                        <div class="col-xm-12 col-sm-6 col-md-6 col-lg-6">
                                            <ul style="list-style: none;" class="pt-3" >
                                                <li> <strong>BLOOD GROUP :</strong> AC </li>
                                                <li> <strong>PREFERED DIET :</strong> Fufu </li>
                                                <li> <strong>UNPREFERED DIET :</strong> Banku and Okro Soup </li>
                                            </ul>
                                        </div>
                                
                                </div>
                            </div>
                        </div> 
                        
                        <!-- start of terminal report section -->
                        <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
                            <div id="terminalReport">
                                <center><h4>Terminal Report</h4></center>
                                    <h1>content</h1>

                            </div>
                        <!-- end of terminal report sections -->
                    </div>


                        <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3 text-justify">
                            <div class="row ">
                                        <center><h5>PARENT'S INFORMATION</h5></center>
                                        <div class="col-xm-12 col-sm-6 col-md-6 col-lg-6">
                                            
                                            <center>
                                                <hr><p  class="parentsHeader" >FATHER'S INFORMATION</p><hr>
                                            </center>
                                        

                                            <div class="row">
                                                <div class="col-6">
                                                    <ul style="list-style: none;" >
                                                        <li> <strong>FATHER'S NAME :</strong></li>  
                                                        <li> <strong>TEL. NUMBER :</strong></li>  
                    
                                                        <li> <strong>OCCUPATION :</strong> </li>  
                                                        <li> <strong>HOMETOWN :</strong></li>  
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul style="list-style: none;" >
                                                        <li> Mr. Samuel Atikuni </li>  
                                                        <li> 03423231322 </li>  
                    
                                                        <li> 03423231322 </li>  
                                                        <li> Sefwi Bekwai </li>  
                                                    </ul>   
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xm-12 col-sm-6 col-md-6 col-lg-6">
                                            <center>
                                                <hr><p class="parentsHeader">MOTHER'S INFORMATION</p><hr>
                                            </center>
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul style="list-style: none;" >
                                                        <li> <strong>MOTHER'S NAME :</strong></li>  
                                                        <li> <strong>TEL.  NUMBER :</strong></li>  
                    
                                                        <li> <strong>OCCUPATION :</strong> </li>  
                                                        <li> <strong>HOMETOWN :</strong></li>  
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul style="list-style: none;" >
                                                        <li> Mad Leticia </li>  
                                                        <li> 03423231322 </li>  
                    
                                                        <li> 03423231322 </li>  
                                                        <li> Sefwi Bekwai </li>  
                                                    </ul>   
                                                </div>
                                            </div>
                                        </div>  
                                </div>
                        </div>
                    </div>
                    <!-- Tabs content -->

                </div>

                <!-- Start of Guardian Details -->
            




                <!-- end of Guardian  Details -->






                <!-- end of first section in otherDetails -->
          
            </section>
            <!-- end of other details -->

            

              <!-- start of biling information -->
              <div id="billinginformation" class="container shadow ">
               <center><p><hr><strong>BILLING INFORMATON</strong><hr></p></center> 





            </div>
            <!-- end of billing information -->




         
        <div class=" container text center mb-3  mt-4">
            
           <center><button type="button" class="btn btn-light btn-rounded mb-2 mt-2">BACK</button></center> 

        </div>

    </div>
    <!-- JavaScript Bundle with Popper -->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>