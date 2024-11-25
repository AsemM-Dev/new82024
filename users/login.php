
<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = trim($_POST['email']);
  $password = $_POST['password'];

  // Prepare statement
  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  if (!$stmt) {
      die("Database error: " . $conn->error);
  }

  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
      $user = $result->fetch_assoc();

      // Verify password
      if (password_verify($password, $user['password'])) {
          if ($user['is_verified']) {
              session_start();
              $_SESSION['user'] = $user;
              header("Location: ../indexnew.php");
                exit; // Ensure the script stops executing after redirection
          } else {
              echo "Please verify your email before logging in.";
          }
      } else {
          echo "Invalid password.";
      }
  } else {
      echo "Invalid email or user does not exist.";
  }

  $stmt->close();
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/image.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/bootstrap-icons-1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../assets/img/image.png" alt="" width="30px"
                        height="30px"></a>
                <button class="navbar-toggler x" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <!-- <span class="navbar-toggler-icon"></span> -->
                </button>
                <div class="collapse navbar-collapse justify-content-center text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                        </li>
                    </ul>
                    <!-- <form action="" method="" class="d-flex justify-content-center">
                        <button class="button btn-button">Login</button>
                    </form> -->
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid main-container">
            <div class="container-login">
                <div class="form">
                    <a href="../indexnew.php"><img src="../assets/img/icons8-back-50.png" alt="" width="24" height="24"></a>
                    <h3 class="title">Login</h3>
                    <form method="POST" action="login.php">
                        <div class="form-group">
                            <input type="text" name="email" id="email" autocomplete="off" required /><label>Email</label>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" autocomplete="off" required /><label>Password</label>
                        </div>
                        <button type="submit" class="submit">Sign In</button>
                        <div class="row d-flex justify-content-center text-center">
                            <p>Not Yet Registered? <a href="./signup.php">Sign Up</a></p>
                        </div>
                    </form>
                </div>
                <div class="last">
                    <a href="#">Terms</a>
                    <a href="#">Policy</a>
                </div>
            </div>
        </div>
    </main>
    <!-- <footer>
        <section class="footer_sectionh">
            <div class="container-fluid d-flex"></div>
            <ul class="socials">
                <li><a class="fa-brands fa-facebook"></a></li>
                <li><a class="fa-brands fa-twitter"></a></li>
                <li><a class="fa-brands fa-linkedin"></a></li>
                <li><a class="fa-brands fa-instagram"></a></li>
            </ul>
            <ul class="links">
                <li><a href="/">Home</a></li>
                <li><a href="/">About Us</a></li>
                <li><a href="/">Contact</a></li>
                <li><a href="/">Team</a></li>
            </ul>
            <p class="legal">© 2024 All rights reserved</p>
            </div>
        </section>
    </footer> -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>