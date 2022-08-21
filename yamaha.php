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
            <figure class="category-image">
                <a href="#">
                  <img src="logo/yamaha.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
              </figure>
            </div>
            <div class="card-body">
              <h5 class="card-title">Yamaha</h5>
              <p class="card-text" style="font-size: 19px;">
                YAMAHA, is a Japanese multinational corporation and conglomerate with a very wide range of products and services. It is one of the constituents of Nikkei 225 and is the world's largest musical instrument manufacturing company. The former motorcycle division was established in 1955 as Yamaha Motor Co., Ltd., which started as an affiliated company but later became independent, although Yamaha Corporation is still a major shareholder.
            </p></div>
          </div>
    </section>
<section>
    <h3 class="text-center">Bikes</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/rs.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">R15 S</h5>
              <p class="card-text">
                Yamaha’s racing DNA now comes with the comfort of the Unibody Seat. The manifestation of legends like M1 and R1, the R15S is installed with the Unibody Seat that offers comfort and ease not just to the rider but the pillion too.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=R15 S" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.yamaha-motor-india.com/yamaha-r15s.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/mt15.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">MT-15</h5>
              <p class="card-text">
                Carrying the legacy of MT series, the new MT-15 Ver 2.0 brings more aggression and agility with its Upside Down front forks, Aluminium Swingarm, 155cc LC 4V FI engine and other exciting features. Stay connected with your Dark Warrior through Y-Connect even on the move.
                <br>Swing a leg over the saddle and explore the Dark Side Of Japan.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=MT-15" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.yamaha-motor-india.com/yamaha-mt-15-ver2.0.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/fz.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">FZ-FI</h5>
              <p class="card-text">
                The new FZFI with a Blue Core concept driven 149 cc engine now with "Side stand engine cutoff switch" and Bluetooth-enabled "Yamaha Motorcycle Connect X". The FZFI has compression ratio of 9.6:1 and delivering a maximum 12.4 PS power @ 7,250 r/min and 13.3 N.m torque @ 5,500 r/min with single channel ABS with disc brakes in the front & rear wheel along with negative LCD instrument cluster and a single piece two level seat.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=FZ-FI" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.yamaha-motor-india.com/yamaha-fz-fi.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/fascino.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Fascino 125</h5>
              <p class="card-text">
                The Yamaha Fascino has already won hearts with its unique appearance and slick design. The new Fascino 125 Fi Hybrid comes with the visual impression of a Classic European styling along with new features and technologies as it gets an all-new exterior design, higher quality bodywork, newly designed headlight and Bluetooth connectivity to create a strong bond between scooter and Rider.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=Fascino 125" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.yamaha-motor-india.com/yamaha-fascino125fi-new.html" class="card-link btn btn-danger" target="_blank">Know More</a>
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