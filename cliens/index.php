<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="vieoort" content="width=device-width, initial-scale=1.0">
    <title>Kint-bent Sport</title>
<link rel="stylesheet" href="css/navbar.css" media="screen">
<link rel="stylesheet" href="css/fa.min.css" media="screen">
<link rel="stylesheet" href="css/gfonts.min.css" media="screen">
<link rel="icon" type="image/png" href="https://i.ibb.co/Dr8X0yS/logomini.png">
<link rel="stylesheet" href="css/fooldal.css">
<link rel="stylesheet" href="css/o2.css">
<link rel="stylesheet" href="css/o.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/termek.css">
<link rel="stylesheet" href="css/bongesz.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="getData.js"></script>


</head>
<body>
    
<header class="switcher-bar ssss clearfix sticky-header">

<nav class="navbar pull-left">
  <div class="container">
 <!--  <button class="navbar-toggle" id="navbar-toggle">&#9776;</button> lines icon -->
    
<div id="ikszdiv" class="remove-btn header-btn pull-left">
<a href="#" title="Close this bar" id="iksz" class="icon-remove"></a>
</div>
    <ul class="nav-links pull-left">
      
      <li><div class="purchase-btn header-btn pull-left">
<a href="index.php?prog=bongesz.php" title="Buy now" class="icon-shopping-cart"></a>
</div></li>
      <li><div class="mobile-btn header-btn pull-left hidden-xs">
<a href="#" title="Smartphone View" class="icon-mobile-phone" id="mobile-view"></a>
</div></li>
      <li><div class="tablet-btn header-btn pull-left hidden-xs"  id="tablet-view">
<a href="#" title="Tablet View" class="icon-tablet"></a>
</div></li>
<li><div class="desktop-btn header-btn pull-left hidden-xs" id="desktop-view">
<a href="#" title="Desktop View" class="icon-desktop"></a>
</div> </li>
<li><div class=" pull-left hidden-xs" id="desktop-view">
<p class=""> </p>
</div> </li>
    </ul>
    <div class="menu-toggle"></div>
  </div>
</nav>

<div  class="logo pull-right " id="logolinkdiv"> 
<a href="index.php" title="Logo" id="logolinka"> 
<img id="thelogo" src="https://i.ibb.co/CMkVwWR/logomid.png" alt="logomid" >
</a>
</div>

</header>


<?php
    if(isset($_GET['prog'])) 
      include $_GET['prog'];
    else 
      include 'fooldal.php';
    ?>
    <footer>
<div class="container footer">
<div class="row">
<h5 class="o-block-heading" id="footcím"><strong>Kint-bent Sport</strong></h5>



<p class=""><a href="#">Kiszállítás</a> </p>



<p class=""><a href="#" >Visszatérítés</a></p>



<p class=""><a href="#">FAQ</a></p>
</div>



<div class="row">
<h5 class="o-block-heading" id="social-media"><strong>Média:</strong></h5>

<p class="has-text-color "><a href="#">Facebook</a></p>



<p class=""><a href="#">Instagram</a></p>



<p class=""><a href="#">Pinterest</a></p>
</div>
</div>

</footer>



</body>

<script src="js/navbar.js"></script>
</html>




