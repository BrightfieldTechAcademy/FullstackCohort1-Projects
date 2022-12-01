
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />   
        <title>User Dashboard</title>
        <link rel="stylesheet" href="https://bootswatch.com/5/cosmo/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;1,100;1,200;1,400;1,500;1,600;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_URL?>/Views/css/custom.css">
        <link rel="stylesheet" href="<?php echo BASE_URL?>/Views/css/sidebar.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">

            <!-- Sidebar-->
            <div class="border-end side-nav" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom">
                    <img src="<?php echo BASE_URL?>/Views/image/logo.jpg" alt="" style="width: 80px; height: 70px;">
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                        <span class="material-icons">dashboard</span>Dashboard
                    </a>
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                        <span class="material-icons">person</span>Students
                    </a>
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                        <span class="material-icons">person</span>Teachers
                    </a>
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                        <span class="material-icons">admin_panel_settings</span> Admin
                    </a>
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                        <span class="material-icons">class</span>  Class 
                    </a>
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                        <span class="material-icons">subject</span>Subjects
                    </a>
                </div>
            </div>

            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">
                        <span class="material-icons">
                            menu
                        </span>
                        </button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                                <li class="nav-item active py-4 px-5">
                                    <a href="<?php echo BASE_URL?>/logout.php" type="button"  class="btn btn-sm text-white py-3 px-5 fs-4 logout">
                                        <span class="material-icons">
                                        logout
                                        </span>Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="student-info">
                    <div class="row row-1">
                        <div class="col">
                            <div class="card  my-3 py-4">
                                <div class="card-body">
                                  <h5 class="card-title fs-3 py-3 fw-bolder">Add Student</h5>
                                  <i class="bi bi-universal-access bg-white text-dark rounded-circle px-1 py-1"></i>
                                  <a href="<?php echo BASE_URL?>/addStudent.php" class="btn ms-2 border border-light rounded-pill text-white">Click Me</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card my-3 py-4">
                                <div class="card-body">
                                  <h5 class="card-title fs-3 py-3 fw-bolder">Expense(Today)</h5>
                                  <i class="bi bi-universal-access bg-white text-dark rounded-circle px-1 py-1"></i>
                                  <a href="#" class="btn border ms-2 border-light rounded-pill text-white">Click Me</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card my-3 py-4">
                                <div class="card-body">
                                  <h5 class="card-title fs-3 py-3 fw-bolder">Unpaid Student Invoice</h5>
                                  <i class="bi bi-universal-access bg-white text-dark rounded-circle px-1 py-1"></i>
                                  <a href="#" class="btn ms-2 border border-light rounded-pill text-white btn-sm">Click Me</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row row-2">
                        <div class="col">
                            <div class="card my-3 py-4">
                                <div class="card-body">
                                  <h5 class="card-title fs-3 py-3 fw-bolder">Add Students Marks</h5>
                                  <i class="bi bi-universal-access bg-white text-dark rounded-circle px-1 py-1"></i>
                                  <a href="#" class="btn border ms-2 border-light rounded-pill text-white">Click Me</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card my-3 py-4">
                                <div class="card-body">
                                  <h5 class="card-title fs-3 py-3 fw-bolder">Income(Today)</h5>
                                  <i class="bi bi-universal-access bg-white text-dark rounded-circle px-1 py-1"></i>
                                  <a href="#" class="btn ms-2 border border-light rounded-pill text-white">Click Me</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card my-3 py-4">
                                <div class="card-body">
                                  <h5 class="card-title fs-3 py-3 fw-bolder">Expense Today</h5>
                                  <i class="bi bi-universal-access bg-white text-dark rounded-circle px-1 py-1"></i>
                                  <a href="#" class="btn ms-2 border border-light rounded-pill text-white">Click Me</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row row-3">
                        <div class="col">
                            <div class="card my-3 py-4">
                                <div class="card-body">
                                  <h5 class="card-title fs-3 py-3 fw-bolder">Todays Balance Sheet</h5>
                                  <i class="bi bi-universal-access bg-white text-dark rounded-circle px-1 py-1"></i>
                                  <a href="#" class="btn ms-2 text-white border border-light rounded-pill">Click Me</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card my-3 py-4">
                                <div class="card-body">
                                  <h5 class="card-title fs-3 py-3 fw-bolder">Current Teachers Data</h5>
                                  <i class="bi bi-universal-access bg-white text-dark rounded-circle px-1 py-1"></i>
                                  <a href="#" class="btn ms-2 border border-light rounded-pill text-white">Click Me</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card my-3 py-4">
                                <div class="card-body">
                                  <h5 class="card-title fs-3 py-3 fw-bolder">Student Admission Form</h5>
                                  <i class="bi bi-universal-access bg-white text-dark rounded-circle px-1 py-1"></i>
                                  <a href="#" class="btn ms-2 border border-light rounded-pill text-white">Click Me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- search -->
                <div class="container search">
                    <table id="example" class="table table-striped fs-3 table-bordered nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Profile Picture</th>
                                <th>Student's Name</th>
                                <th>Class</th>
                                <th>Gender</th>
                                <th>Mother's Name</th>
                                <th>Mother's Number</th>
                                <th>Father's Name</th>
                                <th>Father's Number</th>
                                <th>Emergency Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($studentDetails as $details): ?>
                            <tr>
                                <td><img src="<?php echo BASE_URL . "/" .$details->picture?>" width="50" height="50" class="img-thumbnail" alt="<?php echo $details->firstname ."'s profile picture" ?>"/></td>
                                <td><?php echo $details->firstname . ' ' . $details->middlename. ' ' .$details->lastname ?></td>
                                <td><?php echo $details->classAdmitted ?></td>
                                <td><?php echo $details->gender ?></td>
                                <td><?php echo $details->mothersName ?></td>
                                <td><?php echo $details->mothersTelephone ?></td>
                                <td><?php echo $details->fathersName ?></td>
                                <td><?php echo $details->fathersTelephone ?></td>
                                <td><?php echo $details->emergencyContactNumber ?></td>

                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table> 
                </div>  

                <div class="container mt-5 statistics fs-3">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title fs-2">Headmaster's Report</h5>
                                  <p>Daily Information about invoices in the system between ........</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title fs-2">Spend Statistics and Overall Income </h5>
                                  <p class="text-success fw-bolder">Overall Income</p>
                                  <p>$123....</p>
                                  <p class="fw-boder text-danger">Totall Expenses</p>
                                  <p>$10102823....</p>
                                </div>
                                .
                            </div>
                        </div>
                    </div>
                </div>

                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="m-2">
                                    <i class="bi bi-c-circle fs-1"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="m-2 fs-1">
                                    <span>Develop with</span>
                                    <span class="material-icons">
                                        volunteer_activism
                                    </span>
                                    <span>By .......</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Core theme JS-->


        
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
 
       <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap.min.js"></script>
         <script>
             $(document).ready(function() {
                 var table = $('#example').DataTable( {
                     responsive: true
                 } );
             
                 new $.fn.dataTable.FixedHeader( table );
             });        
         </script>
        <script>
            window.addEventListener('DOMContentLoaded', event => {

             // Toggle the side navigation
            const sidebarToggle = document.body.querySelector('#sidebarToggle');
            if (sidebarToggle) {
                // Uncomment Below to persist sidebar toggle between refreshes
                // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
                //     document.body.classList.toggle('sb-sidenav-toggled');
                // }
                sidebarToggle.addEventListener('click', event => {
                    event.preventDefault();
                    document.body.classList.toggle('sb-sidenav-toggled');
                    localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
                });
            }

        });
        </script>
    </body>
</html>
