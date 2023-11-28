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
<div class="container" style="min-height: 545px;">
    <?php
    $id = $_GET['catid'];
    $sql = "Select * from categories where category_id=$id";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $category_name = $row['category_name'];
      $category_description = $row['category_description'];
    }
      echo '
    <h2 class="text-center">welcome to ' . $category_name . ' forums.</h2>
    <p> '.$category_description.'</p><hr>
    <p class="text-center"> <span style="font-weight: bold;"> Forum rules and posting guidelines:</span><br>
       | Keep it friendly.
       | Be courteous and respectful. Appreciate that others may have an opinion different from yours.
       | Stay on concepts related to coding.
       | Share your knowledge of programming.
       | Refrain from demeaning, discriminatory, or harassing behaviour and speech.
    </p>';
     ?>
    <hr>
    <!-- question generator template -->
    <?php
    $showresult = false;
      $sql = "Select * from questions where question_category_id='$id'";
      $result = mysqli_query($conn,$sql);
      while ($row = mysqli_fetch_assoc($result)) {
      $showresult = true;
      $id = $row['question_id'];
        $title = $row['question_title'];
        $description = $row['question_description'];


      echo '<div class="d-flex my-3">
      <div class="flex-shrink-0">
        <img src="img/images.jfif" class="mx-2" style="width: 34px; height: 34px;" alt="this is user image">
      </div>
      <div class="flex-grow-1 ms-3">
        <a href="thread.php?ques_id=' . $id . '"><span style="font-weight: bold;">' . $title . '</span></a><br>
        ' . $description . '
      </div>
      </div>
      <div class="container">
        <a  href="treadlist.php"><img src="img/like.png" style="width:25px; margin-left:45px;" alt="like"></a>
        <a href="thread.php" class="dark">  Anwser</a>
      </div>';
    
  }
  if(!$showresult){
      echo '<b>no results found!</b>
      <br><p>Be the first person to ask in this section.</p>';
  }
      ?>
  <!-- question template ends -->
</div>
    <?php include "partials/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>