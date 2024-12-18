<?php
session_start();
?>


<!doctype html>
<html lang="en">

<head>
  <title>new</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" type="image/x-icon" href="./assets/img/image.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap"
    rel="stylesheet">




  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="./assets/bootstrap-icons-1.10.5/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/navbar.css">
  <link rel="stylesheet" href="./assets/css/section_1.css">
  <link rel="stylesheet" href="./assets/css/section_2.css">
  <link rel="stylesheet" href="./assets/css/section_3.css">
  <link rel="stylesheet" href="./assets/css/footer.css">


  <script src="https://kit.fontawesome.com/19b5aa178c.js" crossorigin="anonymous"></script>



</head>

<body>
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="logo">
          <a class="navbar-brand" href="#"><img src="./assets/img/image.png" alt="" width="30px"
              height="30px"></a>
        </div>
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Dashbord</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
            </li>
          </ul>

          <div class="d-flex justify-content-center btn-login">
            <?php if (isset($_SESSION['user'])): ?>
              <p style="position: absolute; color: #fda521; font-size: 14px !important;margin-top: 60px">
                Welcome, <?php echo htmlspecialchars($_SESSION['user']['username']); ?>!</p>
              <a href="./users/logout.php" class="button btn-button">Sign Out</a>
            <?php else: ?>
              <a href="./users/login.php" class="button btn-button">Login</a>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container-fluid main-container">
      <section class="section_1">
        <div class=" d-flex justify-content-center mx-auto mb-5">
          <h1 class="display-5 fw-bold mb-3 h1-animation">CRUNCH AGGREGATOR</h1>
        </div>

        <div class="row row-mediaQ" style="padding-top: 100px;margin: 30px;">
          <div class="col">
            <div class="col-animation">
              <h3 class="text-light" style="font-size:clamp(12px, 3vw, 32px);">Lorem ipsum, dolor sit amet
                consectetur adipisicing elit.</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              <div class="col2">
                <button class="btn btn-primary btn-lg px-4 me-sm-2" type="button">See More</button>
              </div>
            </div>
          </div>
          <!-- <div class="col"></div> -->
          <div class="col">
            <div class="d-flex features">
              <div class="card-animation">
                <p class="title">CRUNCH</p>
                <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="card-animation">
                <p class="title">AGRREGATOR</p>
                <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <section class="section_2">
    <h1 class="text-center text-dark">Crunch Agrregator</h1>
    <h2 class="text-center text-black-50">List Price</h2>
    <p class="text-center text-black-50  justify-content-center">Lorem ipsum dolor sit amet consectetur
      adipisicing elit. Nemo eos atque maiores id fugiat.</p>
    <div class="pricing-table">
      <div class="pricing-card">
        <h3 class="pricing-card-header">Personal</h3>
        <div class="price"><sup>$</sup>15<span>/MO</span></div>
        <ul>
          <li><strong>3</strong> Websites</li>
          <li><strong>20 GB</strong> SSD</li>
          <li><strong>1</strong> Domain Name</li>
          <li><strong>5</strong> Email</li>
          <li><strong>1x</strong> CPU & RAM</li>
        </ul>
        <a href="#" class="order-btn">Checkout</a>
      </div>

      <div class="pricing-card">
        <h3 class="pricing-card-header">Professional</h3>
        <div class="price"><sup>$</sup>30<span>/MO</span></div>
        <ul>
          <li><strong>10</strong> Websites</li>
          <li><strong>50 GB</strong> SSD</li>
          <li><strong>1</strong> Domain Name</li>
          <li><strong>20</strong> Email</li>
          <li><strong>1.5x</strong> CPU & RAM</li>
        </ul>
        <a href="#" class="order-btn">Checkout</a>
      </div>

      <div class="pricing-card">
        <h3 class="pricing-card-header">Premium</h3>
        <div class="price"><sup>$</sup>50<span>/MO</span></div>
        <ul>
          <li><strong>30</strong> Websites</li>
          <li><strong>150 GB</strong> SSD</li>
          <li><strong>1</strong> Domain Name</li>
          <li><strong>40</strong> Email</li>
          <li><strong>2x</strong> CPU & RAM</li>
        </ul>
        <a href="#" class="order-btn">Checkout</a>
      </div>

      <div class="pricing-card">
        <h3 class="pricing-card-header">Ultimate</h3>
        <div class="price"><sup>$</sup>80<span>/MO</span></div>
        <ul>
          <li><strong>100</strong> Websites</li>
          <li><strong>500 GB</strong> SSD</li>
          <li><strong>1</strong> Domain Name</li>
          <li><strong>100</strong> Email</li>
          <li><strong>4x</strong> CPU & RAM</li>
        </ul>
        <a href="#" class="order-btn">Checkout</a>
      </div>
    </div>
  </section>

  <section class="section_3">
    <div class="container">
      <main class="row">
        <section class="col left">
          <div class="contactTitle">
            <h2 class="text-dark">Get In Touch</h2>
            <p class="text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod.</p>
          </div>
          <div class="contactInfo">
            <div class="iconGroup">
              <div class="icon">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="details">
                <span>Phone</span>
                <span>+2 01009111400</span>
              </div>
            </div>
            <div class="iconGroup">
              <div class="icon">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <div class="details">
                <span>Email</span>
                <span>ca@gmail.com</span>
              </div>
            </div>
            <div class="iconGroup">
              <div class="icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="details">
                <span>Location</span>
                <span>Egypt Alexandria</span>
              </div>
            </div>
          </div>
          <div class="socialMedia">
            <a href="#" id="facebook"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" id="twitter"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#" id="linkedin"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#" id="instagram"><i class="fa-brands fa-instagram"></i></a>

          </div>
        </section>
        <section class="col right">
          <form class="messageForm">
            <div class="inputGroup halfWidth">
              <input type="text" name="" required="required">
              <label>Your Name</label>
            </div>
            <div class="inputGroup halfWidth">
              <input type="email" name="" required="required">
              <label>Email</label>
            </div>
            <div class="inputGroup fullWidth">
              <input type="text" name="" required="required">
              <label>Subject</label>
            </div>
            <div class="inputGroup fullWidth">
              <textarea required="required"></textarea>
              <label>Say Something</label>
            </div>
            <div class="inputGroup fullWidth">
              <button>Send Message</button>
            </div>
          </form>
        </section>
      </main>
    </div>
  </section>

  <footer>
    <section class="footer_sectionh">
      <div class="container-fluid d-flex"></div>
      <!-- <ul class="socials">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul> -->
      <ul class="links">
        <li><a href="/">Home</a></li>
        <li><a href="/">About Us</a></li>
        <li><a href="/">Contact</a></li>
        <li><a href="/">Team</a></li>
      </ul>
      <p class="legal">© 2024 All rights reserved</p>

    </section>
  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/CSSRulePlugin.min.js"></script>
  <script src="./assets/js/main_section.js"></script>
  <script src="./assets/js/section-2.js"></script>
  <!-- RoughEase, ExpoScaleEase and SlowMo are all included in the EasePack file -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EasePack.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>

</html>