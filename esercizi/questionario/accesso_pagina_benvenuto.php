<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form informazioni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="https://images.vexels.com/media/users/3/129234/isolated/lists/73970c892d748c7507db8e10d71535b0-apple-logo-icon.png" style="width: 40px;">
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://www.apple.com/it/store">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.apple.com/it/mac/">Mac</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.apple.com/it/ipad/">iPad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.apple.com/it/iphone/">iPhone</a>
          <li class="nav-item">
          <a class="nav-link" href="https://www.apple.com/it/watch/">Watch</a>
          <li class="nav-item">
          <li class="nav-item">
          <a class="nav-link" href="https://www.apple.com/apple-vision-pro/">Vision</a>
        </li>
          <a class="nav-link" href="https://www.apple.com/it/airpods/">AirPods</a>
          <li class="nav-item">
          <a class="nav-link" href="https://www.apple.com/it/tv-home/">TV & Casa</a>
          <li class="nav-item">
          <a class="nav-link" href="https://www.apple.com/it/services/">Intrattenimento</a>
          <li class="nav-item">
          <a class="nav-link" href="https://www.apple.com/it/shop/accessories/all">Accessori</a>
          <li class="nav-item">
          <a class="nav-link" href="https://support.apple.com/it-it">Supporto</a>
        </li>
        </li>
        </li>
        </li>
        </li>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Altro
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">La storia di Apple</a></li>
            <li><a class="dropdown-item" href="#">I nostri software</a></li>
            <li><a class="dropdown-item" href="#">La nostra sede</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body style="background-color: <?=$_GET['Colore']?>;"><br>
<?php
$p="info2023";
if ($_GET['Password']==$p){
  ?>
<center>
    <h1>Benvenuto 
    <?=$_GET['Nome']?>
    <?=$_GET['Cognome']?>!
    </h1><br>
    <table  style="margin: 30px;">
        <td>
            <center>
                <div style="margin: 20px;">
    <table class="table table-secondary">
<tbody>
    <tr>
    <td><b>Nome</b></td>
    <td><?=$_GET['Nome']?></td>
    </tr>
    <tr>
    <td><b>Cognome</b></td>
    <td><?=$_GET['Cognome']?></td>
    </tr>
    <tr>
    <td><b>Età</b></td>
    <td><?=$_GET['Età']?></td>
    </tr>
    <tr>
    <td><b>Sport preferito</b></td>
    <td><?=$_GET['Sport']?></td>
    </tr>
    <tr>
    <td><b>Colore</b></td>
    <td><?=$_GET['Colore']?></td>
    </tr>
    <tr>
    <td><b>Password</b></td>
    <td><?=$_GET['Password']?></td>
    </tr>
</tbody>
</table>
</div>
</center>
</td>
<td style="width:50%">
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.smartworld.it/images/2022/10/11/facetime-macos_880x495.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mac</h5>
        <p>Il nostro dispositivo più potente</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://techhub.osu.edu/sites/default/files/products/ipad_mini_wi-fi_lineup_screen_usen-2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>iPad</h5>
        <p>Il nostro dipositivo più versatile</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.docomo.ne.jp/flcache_data/english/iphone/images/12/img_main_smt.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>iPhone</h5>
        <p>Il nostro dispositivo più famoso</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</td>
</table>
</center>
<?php
}
else {
  ?>
  <center>
  <p class="text-danger" style="font-size: xxx-large"><b>La password inserita non è corretta</b></p>
  <a class="btn btn-light btn-lg" href="./index,php" role="button">Torna al form</a>
  </center>
  <?php
}
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>