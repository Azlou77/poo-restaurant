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
<ul>
        <li><a href="http://localhost/poo-restaurant/poo-restau/?page=menu#">Home</a></li>
        <li><a href="http://localhost/poo-restaurant/poo-restau/?page=product">Tout les Produits</a></li>
        <li><a href="http://localhost/poo-restaurant/poo-restau/?page=product_add">Ajouter un Produit</a></li>
        <li><a href="about.asp">About</a></li>
    </ul>
    <?= $content ?>
    <?php require(ROOT.' ./View/include/footer.php') ?>
</body>
</html>