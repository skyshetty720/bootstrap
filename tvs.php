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
                  <img src="logo/tvs.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
              </figure>
            </div>
            <div class="card-body">
              <h5 class="card-title">TVS</h5>
              <p class="card-text" style="font-size: 19px;">
                TVS Motor Company (commonly known as TVS) is an Indian multinational motorcycle manufacturer headquartered in Chennai, Tamil Nadu, India. It is the third largest motorcycle company in India with a revenue of over ₹20,000 crore (US$2.6 billion) in 2018–19. The company has an annual sales of three million units and an annual capacity of over four million vehicles. TVS Motor Company is also the second largest two-wheeler exporter in India with exports to over 60 countries.
                <br>TVS Motor Company Ltd (TVS Motor), a member of the TVS Group, is the largest company of the group in terms of size and turnover.    
            </p></div>
          </div>
    </section>
<section>
    <h3 class="text-center">Bikes</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/rr.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Apache RR 310</h5>
              <p class="card-text">
                With TVS Built to Order (BTO), the TVS Apache RR 310 is the first race machine that can be crafted-to-order. To suit your unique needs, the TVS Apache RR 310 with TVS Built to Order (BTO) comes with two pre-defined customisable performance kits. Choose between these kits or choose the best of both worlds to craft your ultimate track weapon, your way.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=Apache RR 310" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.tvsmotor.com/tvs-apache/rr-310" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/apache.jpg" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Apache RTR 165</h5>
              <p class="card-text">
                For 15 years, the TVS Apache Series has brought track-tested innovations to the road. The limited edition TVS Apache RTR 165 RP marks this unique milestone with 200 limited units. Engineered on the racetrack, the TVS Apache RTR 165 RP is inspired by the TVS Racing Group C GP 165R race machine. Saddled by K. Jagan the GP 165R has won the INMRC championship 9 times. Get ready to lapse time.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=Apache RTR 165" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.tvsmotor.com/tvs-apache/rp-165" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/Heavy Duty.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">TVS XL100 HEAVY DUTY BSVI</h5>
              <p class="card-text">
                An exclusive range of delivery boxes specially made for your TVS XL100. These boxes are designed keeping your business needs in mind. Our FRP delivery boxes are built to be more durable and compatible.These can be mounted on to your TVS XL100
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=TVS XL100 HEAVY DUTY BSVI" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.tvsmotor.com/tvs-xl100" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/ntorq.jpg" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">NTORQ</h5>
              <p class="card-text">
                Most popular brand of our product.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=NTORQ" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.tvsmotor.com/tvs-ntorq/features" class="card-link btn btn-danger" target="_blank">Know More</a>
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