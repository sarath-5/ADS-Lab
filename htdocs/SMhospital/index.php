<!DOCTYPE html>
<html lang="en">
<head>
    <title>hospital_management</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SM HOSPITAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Departments
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#consult">Consultation</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#pharmacy">Pharmacy</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Radiology</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go</button>
    </form>
  </div>
</nav>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/img1 (2).jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img1 (1).webp" alt="Third slide">
    </div>
  </div>
</div>

<a id="consult">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">CONSULTATION</H2>
</DIV>
<div class="card text-center">
  <div class="card-header">
    FREE MEDICAL CHECKUP
  </div>
  <div class="card-body">
    <h5 class="card-title">DOCTOR-PATIENT INTERACTION</h5>
    <p class="card-text">free medical checkup in every month end for all registered users.</p>
    <a href="#" class="btn btn-primary">Go Back</a>
  </div>
  <div class="card-footer text-muted">
    REGISTER NOW!
  </div>
</div>
</a>
</div>
</div>

<a id="pharmacy">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">PHARMACY</H2>
</DIV>
<div class="card text-center">
  <div class="card-header">
    
  </div>
  <div class="card-body">
    <h5 class="card-title">QUICK MEDICINES</h5>
    <p class="card-text">free medical checkup in every month end for all registered users.</p>
    <a href="#" class="btn btn-primary">Go Back</a>
  </div>
  <div class="card-footer text-muted">
    REGISTER NOW!
  </div>
</div>
</a>
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">REGISTER HERE</H2>
</DIV>
<div class="w-50 m-auto">
<form action="register.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</section>
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">About Us</H2>
    </div>
    <div class="container-fluid">
        
        <p class="text-center"><b> SM Hospital Mangagement System is built to replace their existing manual, paper based system.
            The new system is to control the following information; patient information, room availability, staff and operating room schedules,
            and patient invoices. These services are to be provided in an efficient, cost effective manner, with the goal of reducing the time and resources currently required for such tasks.
A significant part of the operation of any hospital involves the acquisition, management and timely retrieval of great volumes of information.
information typically involves; patient personal information and medical history, staff information, room and ward scheduling, staff scheduling,
operating theater scheduling and various facilities waiting lists. All of this information must be managed in an efficient and cost wise fashion so that an institution's resources may be effectively utilized HMS will automate the management of the hospital making it more efficient and error free.
It aims at standardizing data, consolidating data ensuring data integrity and reducing inconsistencies.</b></p>
</section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>