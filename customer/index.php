<?php 


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
  <link rel="shortcut icon" href="../assets/assets/images/favicon.png" type="">

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
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
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

    <section class="about_section layout_padding">
      <div class="container  ">
  
        <div class="row">
          <div class="col-md-6 ">
            <div class="img-box">
              <img src="../assets/images/f1.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Today's Recipe Suggestion
                </h2>
              </div>
              <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                the middle of text. All
              </p>
              <a href="">
                View Recipe
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  <!-- about section -->


  <!-- end about section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span>
        </p>
      </div>
    </div>
  </footer>
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