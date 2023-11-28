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
    <?php include "partials/header.php";?>
<div class="container "style="min-height: 528px;">
    <?php
    $id = $_GET['ques_id'];
    $sql = "Select * from questions where question_id=$id";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $title = $row['question_title'];
      $question_description = $row['question_description'];
    }

   
    echo '<div class="d-flex my-3">
      <div class="flex-shrink-0">
        <img src="img/images.jfif" class="mx-2" style="width: 34px; height: 34px;" alt="this is user image">
      </div>
      <div class="flex-grow-1 ms-3">
        <a href="thread.php"><span style="font-weight: bold;">'.$title.'</span></a><br>
        '.$question_description.'
      </div>
      </div>
      <div class="container">
        <a href="treadlist.php"><img src="img/like.png" style="width:25px" alt="like"></a>
        <a href="thread.php">  Anwser</a>
      </div>'
    
    ;
  ?>
  <!-- question template ends -->
</div>
    <?php include "partials/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>