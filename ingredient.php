<?php 

include 'config.php';

$id_cookie = $_GET['id_cookie'];
$select_ingredient = mysqli_query($conn,"SELECT * FROM cookie WHERE id_cookie = $id_cookie");
$res_ingredient = mysqli_fetch_assoc($select_ingredient);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Ingredient</title>
  </head>

  <body>
    <div class="container mt-4 d-flex align-items-center justify-content-center" style="height:500px">
  <div class="card mb-3" style="max-width: 100vh;margin-left:40px;" >
  <div class="row">
    <div class="col-6 ">
      <img width="200px" src="assets/img/<?= $res_ingredient['img_cookie'] ?>" alt="...">
    </div>
    <div class="col-6 bg-dark text-light">
      <div class="card-body " >
        <h5 class="card-title">Ingredients</h5>
        <p class="card-text"><?= $res_ingredient['ingredient_cookie'] ?></p>
        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
      </div>
    </div>
    <a href="product.php"  class=" ml-3 btn btn-md btn-block btn-warning">Back</a>

</div></div>

</div>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>