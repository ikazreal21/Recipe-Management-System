<?php
session_start();

require_once '../dbconn.php';
require_once '../randomstring.php';

$errors = [];

$recipe_name = '';
$image = '';
$procedure = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $recipe_name = ucwords($_POST['recipe_name']);
    $procedure = $_POST['procedure'];

    if (!is_dir('../upload/recipe')) {
        mkdir('../upload/recipe');
    }

    if (empty($errors)) {
        $image = $_FILES['image'];
        $imagePath1 = '';

        if ($image) {
            $imagePath1 = '../upload/recipe/' . randomString(8, 1) . '/' . $image['name'];
            mkdir(dirname($imagePath1));
            move_uploaded_file($image['tmp_name'], $imagePath1);
        }
        $statement = $pdo->prepare("INSERT INTO tbl_recipe (recipe_name, image, procedures, user_id)
                VALUES (:recipe_name, :image, :procedures, :user_id)"
        );

        $statement->bindValue(':recipe_name', $recipe_name);
        $statement->bindValue(':image', $imagePath1);
        $statement->bindValue(':procedures', $procedure);
        $statement->bindValue(':user_id', $_SESSION["user_id"]);
        $statement->execute();
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="">

  <title> Recipe </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../assets/css/styles2.css" />

  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../assets/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="../assets/images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Recipe's
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="input_recipe.php">Add Recipe's</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view_recipe.php">Recipe's</a>
              </li>
            </ul>
            <div class="user_option">
              <!-- <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a> -->
              <!-- <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form> -->
              <a href="../logout.php" class="order_online">
                Logout
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <section class="book_section layout_padding">
        <div class="container">
          <div class="heading_container">
            </div>
            <div class="row">
              <div class="col-md-3">

                </div>
            <div class="col-md-6">
              <h2 style="text-align:center; color:white;">
                Add Recipe
              </h2>
              <div class="form_container">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div>
                    <input type="text" class="form-control" name="recipe_name" placeholder="Name of the Dish" />
                  </div>
                  <div>
                    <label style="color:white;" for="">Picture of the Dish</label>
                    <input type="file" class="form-control" name="image" placeholder="Picture of the Dish" />
                  </div>
                  <div>
                    <textarea name="procedure" cols="55" rows="20" placeholder="Procedure"></textarea>
                  </div>
                  <div class="btn_box">
                    <button type="submit" name="login">
                      Save
                    </button>
                    <button type="reset" name="login">
                      Reset
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-3">

              </div>
          </div>
        </div>
      </section>

  </div>

  <!-- about section -->


  <!-- end about section -->

  <!-- footer section -->
  <!-- <footer class="footer_section">
    <div class="container">
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span>
        </p>
      </div>
    </div>
  </footer> -->
  <!-- footer section -->

  <!-- jQery -->
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- custom2 js -->
  <script src="../assets/js/custom2.js"></script>
  <!-- isotope js -->
  <script src="../assets/js/custom3.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="../assets/js/custom.js"></script>

</body>

</html>
