<?php
session_start();

require_once 'dbconn.php';

try {
    if (isset($_POST["login"])) {
        if (empty($_POST["username"]) || empty($_POST["password"])) {
            $message = '<label>All fields are required</label>';
        } else {
            $query = "SELECT * FROM tbl_user  WHERE username = :username AND password = :password ";
            $statement = $pdo->prepare($query);
            $statement->execute(
                array(
                    'username' => $_POST["username"],
                    'password' => $_POST["password"],
                )
            );
            $count = $statement->rowCount();
            $user = $statement->fetchAll(PDO::FETCH_ASSOC);
            // echo '<pre>';
            // var_dump($user[0]["roles"]);
            // echo '<pre>';

            if ($count > 0) {
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["user_id"] = $user[0]["user_id"];
                $_SESSION["roles"] = $user[0]["role"];
                // $_SESSION["status"] = $user[0]["status"];
                header("location:validation.php");
            } else {
                echo "<script>alert('Invalid Username or Password'); window.location = 'login.php';</script>";
            }
        }
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
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
  <link rel="shortcut icon" href="assets/images/favicon.png" type="">

  <title> Recipe </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="assets/css/styles2.css" />

  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="assets/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="assets/images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <section class="book_section layout_padding">
        <div class="container">
          <div class="heading_container">
            </div>
            <div class="row">
              <div class="col-md-3">

                </div>
            <div class="col-md-6">
              <h2 style="text-align:center; color:white;">
                Login
              </h2>
              <div class="form_container">
                <form action="" method="POST">
                  <div>
                    <input type="text" class="form-control" name="username" placeholder="Username" />
                  </div>
                  <div>
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                  </div>
                  <div class="btn_box">
                    <button type="submit" name="login">
                      Login
                    </button>
                   <p>Not Registered? Click <a href="register.php">Here.</a> </p>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-3">

              </div>
          </div>
        </div>
      </section>
    </header>
    <!-- end header section -->
  </div>
  <!-- book section -->
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
  <script src="assets/js/custom2.js"></script>
  <!-- isotope js -->
  <script src="assets/js/custom3.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="assets/js/custom.js"></script>

</body>

</html>
