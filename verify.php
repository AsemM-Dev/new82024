<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $verification_code = $_POST['verification_code'];

  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND verification_code = ?");
  $stmt->bind_param("ss", $email, $verification_code);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $stmt = $conn->prepare("UPDATE users SET is_verified = 1 WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    echo "Email verified successfully!";
  } else {
    echo "Invalid verification code.";
  }
  $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="./assets/css/verify.css">

  <title>Document</title>
</head>

<body>

  <div class="container-fluid main-container">
    <div class="container-verify">
      <form method="POST">
        <div class="form-group">
          <input type="email" name="email"  required>
          <label for="">Email</label>
        </div>
        <div class="form-group">
          <input type="text" name="verification_code"  required>
          <label for="">Verification Code</label>
        </div>
        <div class="row d-flex justify-content-center text-center">
          <button type="submit" class="submit">Verify</button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>