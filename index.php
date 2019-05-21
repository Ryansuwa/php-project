<?php
<!DOCTYPE html>
<html>
<head>
	<title>Online Store</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">RYANSITE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse nub" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Team</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="elec.html">Electronic</a>
          <a class="dropdown-item" href="#">Men Fashion</a>
          <a class="dropdown-item" href="#">Female Fashion</a>
          <a class="dropdown-item" href="#">Cosmetic</a>
          <a class="dropdown-item" href="#">Toys</a>
          <a class="dropdown-item" href="#">Home Appliance</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">View more</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Event</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
         
    </ul>
  </div>
</nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 sa">
      <div class="se">
      <input type="text" name="" placeholder="Search">
      <button class="btn btn-danger">Search</button>
    </div>
<div class="category">
  <ul>
    <li><a href="#">Top Category</a></li>
    <li><a href="#">Mobile& its Accesories</a></li>
    <li><a href="#">Men Fashion</a></li>
    <li><a href="#">Women Fashion</a></li>
    <li><a href="#">Home Applianceses</a></li>
    <li><a href="#">Laptop & its Accessories</a></li>
    <li><a href="#">Kitchen</a></li>
    <li><a href="#">Grooming</a></li>
    <li><a href="#">Toys & Gaming</a></li>
  </ul>
  </div>
</div>
<div class="col-md-9">
	 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 img img-thumbnail ani" src="image/2.jpg" alt="First slide">
      <div class="carousel-caption">
      	<h1>Welcome to RyanStore</h1>
      	<h4>"Everything You Need Is Here"</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img img-thumbnail ani1" src="image/1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img img-thumbnail ani2" src="image/3.jpg" alt="Third slide">
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
</div>
</div>
<div class="jumbotron">
  <div class="top">
    <h1>Suggestion For you</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 sug">
        <img src="photo/9.jpg" class="img img-thumbnail">
        <div class="mi">
        <h4>MI Smart Tv "44"</h4>
        <p>Price:Rs 45000</p>
      </div>
      </div>
      <div class="col-md-3 sug1">
        <img src="photo/12.jpg" class="img img-thumbnail">
        <div class="nokia">
          <h4>Nokia X6</h4>
          <p>Price:Rs 35000</p>
        </div>
      </div>
      <div class="col-md-3 sug2">
        <img src="photo/13.jpg" class="img img-thumbnail">
        <div class="mia2">
          <h4>Mi A2</h4>
          <p>Price:Rs 30000</p>
        </div>
      </div>
      <div class="col-md-3 sug3">
        <img src="photo/19.jpg" class="img img-thumbnail">
        <div class="dell">
          <h4>Dell xps13</h4>
          <p>Price:Rs 95000</p>
        </div>
      </div>
      <div class="col-md-3 sug4">
        <img src="image/1.jpg" class="img img-thumbnail">
        <div class="korean">
          <h4>Korean Jacket</h4>
          <p>Price:Rs 1200</p>
        </div>
      </div>
      <div class="col-md-3 sug5">
        <img src="image/4.jpg" class="img img-thumbnail">
        <div class="pants">
          <h4>Granch Pants</h4>
          <p>Price:Rs 1200</p>
        </div>
      </div>
      <div class="col-md-3 sug6">
        <img src="image/5.jpg" class="img img-thumbnail">
        <div class="tshirt">
          <h4>T-shirt</h4>
          <p>Price:Rs 1000</p>
        </div>
      </div>
      <div class="col-md-3 sug7">
        <img src="image/6.jpg" class="img img-thumbnail">
        <div class="glasses">
          <h4>Fastrack sunglasses</h4>
          <p>Price:Rs 1200</p>
        </div>
      </div>
    </div>
  </div>
</div>










<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
?>