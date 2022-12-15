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
    <h5 class="fw-bolder"> CLASS INFORMATION</h5>
  </div> 
  
  <form action="<?php echo BASE_URL ?>/addClass.php" method="post" class="py-2 px-3 rounded container my-5" style="box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 15px 0 rgba(0, 0, 0, 0.14);">
    <table class="table" id='addClass'>
        <tr>
            <div class="d-flex flex-column container mt-4">
                <input type="text" class="form-control" id="className" name="className" required placeholder="Class Name">
            </div>
        </tr>
        <tr>
            <div class="d-flex flex-column container mt-4">
                <input type="text" class="form-control" id="fname" name="teachersName" placeholder="Class Teacher's Name">
            </div>
        </tr>
        <tr>
            <div class="d-flex flex-column container mt-4">
                <input type="number" class="form-control"  name="numberOfStudents" required placeholder="Total Number of Students:">
            </div>
        </tr>
        <tr id="subjectsRow1">
            <div class="d-flex flex-column container mt-4">
                <input type="text" class="form-control" name="subjects[]" required placeholder="Subject Name">
            </div>
        </tr>
    </table>
    <div class="container">
        <button class="btn btn-primary btn-sm mt-4" onclick="addNewSubjectRow()">Add Another Subject</button>
    </div>
    <div class="container">
        <input type="submit" value="Submit" class="form-control btn btn-primary my-2 btn-sm text-white py-2 px-3 fs-4" style="box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1), 0 6px 15px 0 rgba(0, 0, 0, 0.14);" name="addClass">
    </div>
  </form> 
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function addNewSubjectRow()
    {
    $rowno=$("#addClass tr").length;
    $rowno=$rowno+1;
    $("#addClass tr:last").after(`
    <tr id="subjectsRow${$rowno}">
       <td>
            <div class="d-flex flex-column container mt-4">
                <input type="text" class="form-control" name="subjects[]" required placeholder="Subject Name">
            </div>
        </td>
        <td>
            <div class="d-flex flex-column container mt-4">
                <input type='button' class="btn btn-sm btn-danger" value='DELETE' onclick=delete_row('subjectsRow${$rowno}')>
            </div>
        </td>
    </tr>
    `);
    }

    function delete_row(rowno)
    {
        $('#'+rowno).remove();
    }
  </script>
</body>
</html>