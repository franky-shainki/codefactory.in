<?php
include "partials/_dbconnect.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>codefactory-Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <?php include "partials/header.php"; ?>
    <!-- carausel -->
    <!-- https://source.unsplash.com/2400x500/?programming,java -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide_1.jfif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slide_2.jfif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slide_3.jfif" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container my-3" style="min-height: 499px;">
    <h4 class="text-center mt-3 mb-0">Browse through Languages.</h4>
    <hr class="mt-1">

    <!-- language card generator -->
    <div class="row" >
     
    <?php
    $sql = "Select * from categories";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['category_id'];
      echo '<div class="col-md-3 my-3 mx-2">
      <div class="card" style="width: 18rem;">
    <a href="threadlist.php?catid='.$id.'"><img src="img/'.$row['img_src'].'" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <a href="threadlist.php?catid='.$id.'"><h5 class="card-title">'.$row['category_name'].'</h5></a>
      <p class="card-text">'.substr($row['category_description'],0,90).'...</p>
      <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">Explore</a>
    </div>
    </div>
    </div>';
    }
    ?>
    </div>
    </div>
   <?php include "partials/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>