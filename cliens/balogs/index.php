<!DOCTYPE html>
<html lang="hu">
<head>
    <title>AutóMánia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title>Automotive News</title>
    <script src="getData.js"></script>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-sm navbar-light" id="navbar">
  <a class="navbar-brand m-2">AutóMánia</a>
  <div class="navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item m-2 item">
            <a class="nav-link" href="index.php" onclick="home()">Home</a>
        </li>
        <li class="nav-item m-2 item">
            <a class="nav-link" href="index.php?prog=cikkek.php" onclick="cikk()">Cikkek</a>
        </li>
      </ul>
  </div>
  <div class="navbar-collapse justify-content-end">
    <ul class="navbar-nav">
        <li class="nav-item m-2">
            <button class="btn btn-outline-dark" id="btn">Sötét mód</button>
        </li>
      </ul>
  </div>
</nav>
<div class="div">
    <p class="fakeimg" id="ures" style="height: 56px"></p>
</div>
  <?php
    if(isset($_GET['prog'])) 
      include $_GET['prog'];
    else 
      include 'fooldal.php';
    ?>
   
<script src="mode.js"></script>
<link rel="stylesheet" href="style.css">
</body>
</html>
