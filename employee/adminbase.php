<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Management System</title>
    <link href="bootstrap.min.css" rel="stylesheet">
  </head>
  <body>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li>
        <a class="navbar-brand" href="adminhome.php">home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          </li>
    <li class="nav-item dropdown">
              <a class="navbar-brand" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               action
              </a>
              <ul class="dropdown-menu">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="delete-emp.php">delete employee</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="status-update.php">status update</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="salaryslip.php">salaryslip</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="apply-leave.php">Apply leave</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="advert.php">Post adverts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="advertdelete.php">delete adverts</a>
            </li>
             
</ul>
<li class="nav-item dropdown">
              <a class="navbar-brand" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               training
              </a>
              <ul class="dropdown-menu">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="train-updatedoj.php">upate date of join</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="train-updatedol.php">upate date of leave</a>
            </li>
             
</ul>
      </div>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="advertadmin.php">ማስታዎቂያ</a>
            </li>

            <li class="nav-item dropdown">
              <a class="navbar-brand" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               my profile
              </a>
              <ul class="dropdown-menu">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="view-all-profile.php"> All profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="view-your-profile2.php"> My profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="admintrain-view.php"> train profile</a>
            </li>
          
</ul>


            <li>

          <a class="navbar-brand" href="login.php">Logout</a>
    </li>
        </div>

    </nav>



    <script src="bootstrap.bundle.min.js" ></script>

  </body>
</html>