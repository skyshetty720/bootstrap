<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>NINJA SKY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="style.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
</head>
<header>
<body style="font-family: 'Ropa Sans',sans-serif;">
    <nav class="navbar navbar-expand-lg fixed-top navbar-light px-4 border-bottom" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php"><img src="img/logoo1.jpg" width="95" height="30"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5  text-center">
              <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="home.php">Home</a>
              </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['username']; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="logout.php">logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header> <br><br>
    <section>
        <div class="card mb-3">
            <div class="text-center">
            <figure class="category-image mt-1">
                <a href="#">
                  <img src="logo/maruthi1.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
              </figure>
            </div>
            <div class="card-body">
              <h5 class="card-title">Maruthi Suzuki</h5>
              <p class="card-text" style="font-size: 19px;">
                Maruti Suzuki India Limited, formerly known as Maruti Udyog Limited, is an Indian automobile manufacturer, based in New Delhi. It was founded in 1981 and owned by the Government of India until 2003, when it was sold to the Japanese automaker Suzuki Motor Corporation. As of February 2022 Maruti Suzuki has a market share of 44.2 percent in the Indian passenger car market.</p></div>
          </div>
    </section>
<section>
    <h3 class="text-center">Cars</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/alto.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">ALTO</h5>
              <p class="card-text">
                The elegant new grille and sharp headlights bring a fresh appeal to the new Alto, while the newly designed bumper and side fender accentuate the looks.    
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=ALTO" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.marutisuzuki.com/alto" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/Swift1.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Swift</h5>
              <p class="card-text">The 2021 Swift speaks performance, style and dynamism from every angle. Its new dual-tone sporty design is sharp and purposeful, and accentuated by the Sporty Cross Mesh Grille with Bold Chrome Accent, precision cut two-tone alloy wheels and LED projector headlamps. Limitless Thrills have never looked this good!</p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=Swift" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.marutisuzuki.com/swift" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/dzire.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Dzire</h5>
              <p class="card-text">The new 2020 Dzire is the perfect blend of style that’s bold and premium. It’s a reflection of your lifestyle, with a touch of class in it.
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=Dzire" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.marutisuzuki.com/dzire" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/ciaz.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Ciaz</h5>
              <p class="card-text">Imagine a lounge. Gorgeous. Indulgent. Comfortable. Expansive. That’s the experience. The feeling of Ciaz with its luxurious interiors.
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=Ciaz" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.nexaexperience.com/ciaz" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
        </div>
</section>
<footer style="background-color:#e3f2fd;">
    <div class="text-center">
    <img src="img/logoo.jpg" class="center" height="100" width="250">
  </div>
  
  <div class="row">
    <div class="col-sm">
      <p class="text-center"><a href="about.php" class="txtunder">About Us</a>|<a href="#" class="txtunder">Contact</a> &nbsp; &copy;2022 NinjaSky.com</p>
    </div>
  </div>
  </footer>


   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
