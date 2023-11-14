<?php
session_start();
require_once 'dbconn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['firstname'] != "" || $_POST['username'] != "" || $_POST['password'] != "") {
        try {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $usertype = 'customer';
            $statement = $pdo->prepare("INSERT INTO tbl_user (username, email, password, role)
            VALUES (:username, :email, :password, :roles)"
            );

            $statement->bindValue(':username', $username);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':password', $password);
            $statement->bindValue(':roles', $usertype);
            $statement->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        header('location:login.php');
    } else {
        echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'register.php'</script>
			";
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
  <link rel="shortcut icon" href="assets/assets/images/favicon.png" type="">

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
                Register
              </h2>
              <div class="form_container">
                <form action="" method="POST">
                  <div>
                    <input type="text" class="form-control" name="username" placeholder="Username" required />
                  </div>
                  <div>
                    <input type="email" class="form-control" name="email" placeholder="Email" required />
                  </div>
                  <div>
                    <input type="password" class="form-control" name="password" placeholder="Password" required />
                  </div>
                  <div class="btn_box">
                    <button type="submit" name="login">
                      Register
                    </button>
                  </div>
                  <p>Already registered? Click <a href="login.php">Here.</a> </p>
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