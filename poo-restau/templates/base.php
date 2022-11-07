<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Burger King</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Brand-Dark-icons.css">
    <link rel="stylesheet" href="assets/css/Projects-Grid-images.css">
</head>
<body>
    <!-- <ul>
        <li><a href="http://localhost/poo-restaurant/poo-restau/?page=menu#">Home</a></li>
        <li><a href="http://localhost/poo-restaurant/poo-restau/?page=product">Tout les Produits</a></li>
        <li><a href="http://localhost/poo-restaurant/poo-restau/?page=product_add">Ajouter un Produit</a></li>
        <li><a href="about.asp">About</a></li>
    </ul> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> Burger King</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/poo-restaurant/poo-restau/?page=menu#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/poo-restaurant/poo-restau/?page=product">Product</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="http://localhost/poo-restaurant/poo-restau/?page=product_add">Add product</a>
  </div>
</nav>
    <?= $content ?>
    <?php require(ROOT.' ./View/include/footer.php') ?>
</body>
</html>