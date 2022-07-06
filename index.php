<!DOCTYPE html>
<html lang="en">
<head>
<title>NBA Photos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">   <!--links to bootstrap website which is premade-->
    <link rel="stylesheet" href="css/style.css">   
</head>
<body>
<!-- this nav code is to get a navigation bar for the webpage: taken by searching up navbar bootstrap 4 and copying first code to clipboard-->  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- changes nav bar to dark colour -->
  <a class="navbar-brand" href="#">NBA Photos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Teams
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#lakers">Los Angeles Lakers</a>  <!-- the href links to the section of code with id lakers -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#celtics">Boston Celtics</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#warriors">Golden State Warriors</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
    </ul>
  </div>
</nav>
<!-- this code is used for my images: taken by finding carousel section from website found when searching up navbar bootstrap 4 and copying some code -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/Lakers team.jpg" alt="Lakers Current Team">
      <div class="carousel-caption d-none d-md-block">  <!-- this part is used for the caption of the image -->
        <h5>These are the three main stars on the current Lakers team.</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/ray-allen-kevin-garnett-and-paul-pierce.jpg" alt="Celtics Dynasty">
      <div class="carousel-caption d-none d-md-block">
        <h5>This was a Celtics superteam in the 2000s.</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Curry and Klay.jpg" alt="Current Warriors Stars">
      <div class="carousel-caption d-none d-md-block">
        <h5>Picture of Klay Thompson and Steph Curry, two of GSW's best current players.</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<a id="lakers">
<section class="my-4">  <!-- this code is used to display the three images of section Los Angeles Lakers underneath the main images-->
    <div class="py-4">
        <h2 class="text-center">Los Angeles Lakers</h2> 
    </div>

    <div class="container-fluid">
        <div class="row">  <!-- allows for the three images to be displayed in a row -->
    <div class="col-lg-4 col-md-4 col-12"> <!-- displays three images on a large and middle screen and one image on a mobile phone -->
      <img src="images/Lakers Championship.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12"> 
      <img src="images/Lakers Kobe and Shaq.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12"> 
      <img src="images/Lakers team.jpg" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>


<a id="celtics">
<section class="my-4">  <!-- this code is used to display the three images of section Boston Celtics underneath the main images-->
    <div class="py-4">
        <h2 class="text-center">Boston Celtics</h2> 
    </div>

    <div class="container-fluid">
        <div class="row">  <!-- allows for the three images to be displayed in a row -->
    <div class="col-lg-4 col-md-4 col-12"> <!-- displays three images on a large and middle screen and one image on a mobile phone -->
      <img src="images/Celtics Jaylen Brown and Tatum.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12"> 
      <img src="images/kyriewithceltics.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12"> 
      <img src="images/ray-allen-kevin-garnett-and-paul-pierce.jpg" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="warriors">
<section class="my-4">  <!-- this code is used to display the three images of section Golden State Warriors underneath the main images-->
    <div class="py-4">
        <h2 class="text-center">Golden State Warriors</h2> 
    </div>
    <div class="container-fluid">
        <div class="row">  <!-- allows for the three images to be displayed in a row -->
    <div class="col-lg-4 col-md-4 col-12"> <!-- displays three images on a large and middle screen and one image on a mobile phone -->
      <img src="images/Curry Three.jpeg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12"> 
      <img src="images/Warriors Durant Dynasty.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12"> 
      <img src="images/Curry and Klay.jpg" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="contact">
<section class="my-4">  <!--creating the section underneath the images about contact us providing space for user input -->
    <div class="py-4">
        <h2 class="text-center">Contact Us!</h2> 
    </div>
    <div class="w-50 m-auto">
        <form action="about.php" method="post">
          <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
              <label>Email:</label>
              <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
              <label>Number:</label>
              <input type="text" name="number" class="form-control">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
</a>

<a id="about">
<section class="my-4">  <!--creating the section for the "About" -->
    <div class="py-4">
        <h2 class="text-center">About</h2> 
    </div>
    <div class="container-fluid">
        <h3 class="text-center">Logan</h3> <br>  <!-- creating a small section about Logan and what he does -->
        <p class="text-center"><b>I am a professional NBA photographer who enjoys photographing iconic NBA players and moments.</b></p>
    </div>
</section>
</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>