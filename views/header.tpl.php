<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fresh Coffee Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Fresh Coffee Shop</span>
      <span class="site-heading-lower">Business Casual</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">FRESH COFFEE SHOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
              <!-- 
                on affiche conditionnellement la class active,
                pour que l'item du menu soit en jaune, seulement si on 
                se trouve actuellement sur cette page
            -->
            <li class="nav-item <?php if($page == "home"){ echo "active"; } ?> px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="./">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item <?php if($page == "about"){ echo "active"; } ?> px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about">About</a>
            </li>
            <li class="nav-item <?php if($page == "products"){ echo "active"; } ?> px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products">Products</a>
            </li>
            <li class="nav-item <?php if($page == "store"){ echo "active"; } ?> px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store">Store</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>