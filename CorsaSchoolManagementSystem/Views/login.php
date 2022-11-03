<?php
// for xampp
define("BASE_URL", 'http://'. $_SERVER['HTTP_HOST']. "/FullstackCohort1-Projects\CorsaSchoolManagementSystem");

//for php server
//define("BASE_URL", 'http://'. $_SERVER['HTTP_HOST']);
?>


<!Doctype html>
<html>
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,200;0,400;0,500;0,800;1,400;1,500&display=swap" rel="stylesheet">

         <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
         <title>Admin Login Page</title>
        <style>
            body {
                font-family: 'Outfit', sans-serif;
            }
           nav {
            box-shadow: 0px 10px 15px 15px rgba(0, 0, 0, 0.2);
           }

           .admin{
                width: 400px;
                box-shadow: 0px 10px 20px 15px rgba(0, 0, 0, 0.2);
            }

            .form-box{
                width: 500px;
                box-shadow: 0px 10px 20px 15px rgba(0, 0, 0, 0.2);
            }

            .form-box .e-mail input{
                height: 3.1rem;
            }

            .form-box .pass-word input{
                height: 3.3rem;
            }
        </style>
    </head>
    <body>  
        <nav class="navbar py-2 mb-5 fixed-top rounded-bottom">
                <a class="navbar-brand" href="#">
                    <img class="ms-2 rounded-circle" src="<?php echo BASE_URL ?>/Views/image/logo.jpeg" alt="" width="50" height="40"> 
                    <span class="text-white fs-5">Corsa and Partners Boarding School Complex</span>
                </a>
        </nav>
        <div class="d-flex flex-column justify-content-md-center align-items-center vh-100">
            <div class="container admin mt-5 mb-2 rounded-pill py-2">
                <h3 class="text-center">Administrator Login</h3>
            </div>
            <div class="container form-box rounded mt-3 py-2 px-3">
                <div class="admin-icon text-center">
                  <i class="bi bi-person-circle fs-1"></i>
                </div>
                <form>
                    <div class="mb-3 e-mail">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="mb-3 pass-word">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remind Me</label>
                    </div>
                    <div>
                        <a href="#">Forgot password?</a>
                    </div>
                    </div>

                    <input type="submit" class="form-control btn btn-primary mt-4 p-2" value="LOGIN"> 
                </form>
            </div>
         </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>