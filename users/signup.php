<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $age = intval($_POST['age']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $verification_code = rand(100000, 999999);

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, phone_number, age, password, verification_code) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiss", $username, $email, $phone_number, $age, $hashed_password, $verification_code);

    if ($stmt->execute()) {
        // Send verification email
        $subject = "Verify Your Email Address";
        $message = "Your verification code is: $verification_code";
        $headers = "From: no-reply@lms.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "Registration successful! Check your email for the verification code.";
        } else {
            echo "Failed to send verification email.";
        }
    } else {
        echo "Registration failed: " . $stmt->error;
    }

    $stmt->close();
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Sign-Up</title>
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
  <link rel="stylesheet" href="../assets/css/signup.css">
  <link rel="stylesheet" href="../assets/css/navbar.css">
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
      <div class="container-signup">
        <div class="form">

          <a href="../indexnew.php"><img src="../assets/img/icons8-back-50.png" alt="" width="24" height="24"></a>
          <h3 class="title">Sign Up</h3>

          <form method="post">

            <div class="row g-2">
              <div class="col-6">
                <div class="p-3 border ">
                  <div class="form-group">
                    <input type="text" name="username" id="username" autocomplete="off"
                      required /><label>Username</label>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="p-3 border ">
                  <div class="form-group">
                    <input type="email" name="email" id="email" autocomplete="off"
                      required /><label>Email</label>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="p-3 border ">
                  <div class="form-group">
                    <input type="text" name="phone_number" required /><label>Phone Number</label>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="p-3 border ">
                  <div class="form-group">
                    <input type="number" name="age" id="age" autocomplete="off"
                      required /><label>Age</label>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="p-3 border ">
                  <div class="form-group">
                    <input type="password" name="password" id="password" autocomplete="off"
                      required /><label>Create Password</label>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="p-3 border ">
                  <div class="form-group">
                    <input type="password" name="confirm_password" required /><label>Confirm Password</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row d-flex justify-content-center text-center">
              <button type="submit" class="submit">Create Account</button>
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
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>