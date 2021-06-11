<html>
<head>
	<title>RETROSPECT</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">		
<link rel="stylesheet" href="style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: #e5ff00; font-size: 30px;" href="index.php">Retrospect</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" style="color: #e5ff00; padding-left: 20px;" aria-current="page" href="main.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #e5ff00; padding-left: 20px;" href="download.html">Download</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #e5ff00; padding-left: 20px;" href="#">Support</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: #e5ff00; padding-left: 20px;" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" style="color: #e5ff00;" href="#">Game</a></li>
            <li><a class="dropdown-item" style="color: #e5ff00;" href="#">System Requirements</a></li>
            <li><a class="dropdown-item" style="color: #e5ff00;" href="#">Tutorial</a></li>
          </ul>
        </li>
		<li class="nav-login">
          <a class="nav-link" style="color: #e5ff00;" href="aksi_logout.php">Log out</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="rog.gif" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="intense.gif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="warung.gif" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
  <div class="col">
    <div class="card h-100 w-75 ml-5">
      <img src="1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">RETROSPECT is Here!!</h5>
        <p class="card-text">We proudly present you our latest and newest game RETROSPECT built using our own engine Retrospex powered by latest high tech to give you the best and the most beautiful looking game there is!</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-75 w-75">
      <img src="2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PVP, PVE, Everything!</h5>
        <p class="card-text">Tired fighting real people in this game? Wanna relax a bit and enjoy killing easy mobs or challenge a hard boss? Try PVE mode! or do you want to fight against actual players and take your gaming skills to the next level? then PVP is your best friend!</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-75 w-75">
      <img src="3.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pixelated Realm</h5>
        <p class="card-text">With our own engine Retrospex we build a vast 2D pixelated open world with various kinds of contents including mobs, bosses, dungeons, and many more challenges to excite you players out there looking for some RPG goodness! This game is made just for you fellas. </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>