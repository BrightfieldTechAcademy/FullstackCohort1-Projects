
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />   
        <title>User Dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;1,100;1,200;1,400;1,500;1,600;1,900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="<?php echo BASE_URL?>/Views/css/custom.css">
        <link rel="stylesheet" href="<?php echo BASE_URL?>/Views/css/style.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">

            <!-- Sidebar-->
            <div class="border-end side-nav" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom">
                    <img src="<?php echo BASE_URL?>/Views/image/logo.jpg" alt="" style="width: 80px; height: 70px;">
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action p-3" href="#!" style="font-size: 6rem !important; color: darkmagenta">
                        <i class="bi bi-person-circle"></i>
                    </a>
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                        <i class="bi bi-house-fill me-2 fs-3"></i>Dashboard
                    </a>
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                        <span class="material-symbols-outlined me-2 fs-3">
                            diversity_3
                            </span> Students
                    </a>
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                        <span class="material-symbols-outlined fs-3 me-2">
                            diversity_1
                        </span> Teachers
                    </a>
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                        <span class="material-symbols-outlined fs-3 me-2">
                            admin_panel_settings
                            </span> Admin
                    </a>
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                        <span class="material-symbols-outlined fs-3 me-2">
                            airline_seat_individual_suite
                            </span> Class 
                    </a>
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                            <span class="material-symbols-outlined fs-3 me-2">
                                subject
                                </span> Subjects
                    </a>
                    <a class="list-group-item list-group-item-action  p-3" href="#!">
                            <span class="material-symbols-outlined fs-3 me-2">
                                account_tree
                                </span> Generate Invoices
                    </a>
                    <a class="list-group-item list-group-item-action p-3" href="#!">
                        <span class="material-symbols-outlined fs-3 me-2 fs-2">
                            group
                            </span> Users
                    </a>
                </div>
            </div>

            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: darkmagenta; position: fixed; width: 100%; z-index: 99;">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">
                            <i class="bi bi-list fs-1 py-2 px-2"  id="bi-list"></i>
                        </button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                                <li class="nav-item active py-4 px-5">
                                    <a href="/logout.php" type="button"  class="btn btn-sm text-white py-3 px-5 fs-4" style="background-color: darkmagenta; border-radius: 2rem; border: 1px solid white;">
                                        <span class="material-symbols-outlined me-2 fs-5">
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
                                  <a href="/addStudent.php" class="btn ms-2 border border-light rounded-pill text-white">Click Me</a>
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
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011-04-25</td>
                                <td>$320,800</td>
                            </tr>
                                        
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012-08-06</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010-10-14</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009-09-15</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008-12-13</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008-12-19</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013-03-03</td>
                                <td>$342,000</td>
                            </tr>
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
                                    <span class="material-symbols-outlined fs-1">
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
