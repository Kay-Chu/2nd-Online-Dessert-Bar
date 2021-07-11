<!doctype html>
<html lang="en">
  <?php
  require_once '../php/connection.php';
  $conn = connectMysql();
  session_start();
  ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../bootstrap-5.0.1-dist/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="../bootstrap-5.0.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!--=== Main Style CSS ===-->
    <link href="../style/style.css" rel="stylesheet">

    <!-- Font Awesome styles CDN Link -->
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <title>New Moon Dessert Bar</title>
  </head>

<body class="shopping_body">

  <div class="container-fluid">

    <div class="sectionShopping">
      <div class="row">
        <div class="col-sm-12">
          <h1> Shopping </h1>
          <p>| · Click on the picture to add to the cart · |</p>
        </div>
      </div>
      
      <div class="row">
        <?php 
            $products = getAllProducts($conn); 
            foreach ($products as $product): 
        ?>
        <div class="col-sm-12 col-lg-6 col-xl-3">
          <div class="my-img-class">
            <img class="imgItem" src="../img/<?= $product['Product_Name']; ?>.jpg" alt="<?=$product['Product_Name']?>">
            <p><?= $product['Product_Name']; ?></p> 
            <p class="price">&dollar;<?= $product['Product_Price']; ?></p>
          </div>
        </div>
        <?php endforeach; ?> 
      </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
          <div class="footer">
            <p> @ Created by KCHU · 2021 </p>
          </div>
        </div>
      </div>
  </div>
  
</body>

</html>