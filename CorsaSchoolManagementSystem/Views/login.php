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
            width: 95%;
            position: fixed !important;
            top: 1rem;
            left: 1.5rem;
            border-radius: 2rem;
            box-shadow: 0px 10px 15px 15px rgba(0, 0, 0, 0.2);
           }

            .form-box{
                margin-top: 3rem !important;
                border-radius: 2rem;
                padding: 3rem 1.5rem;
                width: 500px;
                box-shadow: 0px 10px 20px 15px rgba(0, 0, 0, 0.2);
            }

            .form-box .e-mail input{
                height: 3.3rem;
            }

            .form-box .pass-word input{
                height: 3.3rem;
            }

            .form-box .admin-icon {
                text-align: center;
               
            }

            .form-box .admin-icon i {
                font-size: 7rem;
                color: white;
            }

            .admin{
                margin-top: 10rem !important;
                border-radius: 2rem;
                padding: 1rem 0;
                width: 400px;
                box-shadow: 0px 10px 20px 15px rgba(0, 0, 0, 0.2);
            }
        </style>
    </head>
    <body>
        <div>  
           <nav class="navbar navbar-light py-2 mb-5">
                <div class="">
                    <a class="navbar-brand" href="#">
                        <img class="ms-2 rounded-circle" src="data:image/jpeg;base64,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" alt="" width="50" height="40"> 
                        <span class="text-white fs-3">Corsa and Partners Boarding School Complex</span>
                    </a>
                </div>
            </nav>
        </div>
          <div class="container admin">
              <h3 class="text-center">Administrator Login</h3>
          </div>
        <div class="container form-box">
            <div class="admin-icon">
              <i class="bi bi-person-circle"></i>
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


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>