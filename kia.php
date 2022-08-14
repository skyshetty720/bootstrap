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
                  <img src="logo/kia.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
              </figure>
            </div>
            <div class="card-body">
              <h5 class="card-title">KIA</h5>
              <p class="card-text" style="font-size: 19px;">
                Kia Corporation, commonly known as Kia (formerly known as Kyungsung Precision Industry and Kia Motors Corporation), is a South Korean multinational automobile manufacturer headquartered in Seoul, South Korea. It is South Korea's second largest automobile manufacturer, after its parent company, Hyundai Motor Company, with sales of over 2.8 million vehicles in 2019. As of 2015, the Kia Corporation is minority owned by Hyundai, which holds a 33.88% stake valued at just over US$6 billion. Kia in turn is a minority owner of more than twenty Hyundai subsidiaries ranging from 4.9% up to 45.37%, totaling more than US$8.3 billion.    
            </p></div>
          </div>
    </section>
<section>
    <h3 class="text-center">Cars</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/KiaSonet.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Kia Sonet</h5>
              <p class="card-text">
                The Kia Sonet isn’t just all muscle. Powered by the latest evolution of Kia Connect, it offers you 58 smart ways of staying connected, making it the brainiest of all SUVs. Kia Connect advanced technology includes AI Voice Command, Voice assisted Sunroof control, OTA map updates, making your driving experience safe, convenient, and enjoyable.
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "Kia Sonet"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.kia.com/in/our-vehicles/sonet/showroom.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/seltos.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Kia Seltos</h5>
              <p class="card-text">You can’t put a price on peace of mind. Kia Connect lets you drive with confidence, knowing someone can be there to help, no matter what happens out on the road.</p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "Kia Seltos"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.kia.com/in/our-vehicles/seltos/showroom.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/carnival.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Kia Carnival</h5>
              <p class="card-text">Be it driving your colleagues for a team brunch, taking your family for a vacation or setting out on an adventure with your friends, Kia Carnival comes with versatile seating combinations to make room for everyone and almost everything you need.
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "Kia Carnival"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.kia.com/in/our-vehicles/carnival/showroom.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/carens.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Kia Carens</h5>
              <p class="card-text">Kia Carens is built extraordinarily safe for you and your family with 10 robust safety features: 6 Airbags, ABS, ESC, HAC, VSM, DBC (Downhill Brake Control), BAS, All-Wheel Disc Brakes, TPMS Highline and Rear Parking Sensors available across ALL CARENS VARIANTS.
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "Kia Carens"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.kia.com/in/our-vehicles/carens/showroom.html" class="card-link btn btn-danger" target="_blank">Know More</a>
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
