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
                  <img src="logo/ktm.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
              </figure>
            </div>
            <div class="card-body">
              <h5 class="card-title">KTM</h5>
              <p class="card-text" style="font-size: 19px;">
                KTM AG (Kraftfahrzeug Trunkenpolz Mattighofen, formerly KTM Sportmotorcycle AG) is an Austrian motorcycle, bicycle and sports car manufacturer owned by Pierer Mobility AG & Indian manufacturer Bajaj Auto International Holdings BV. It was formed in 1992 but traces its foundation to as early as 1934. Today, KTM AG is the parent company of the KTM Group, consisting of a number of motorcycle brands.
            <br>KTM is known for its off-road motorcycles (enduro, motocross and supermoto). Since the late 1990s, it has expanded into street motorcycle production and developing sports cars – namely the X-Bow. In 2015, KTM sold almost as many street as off-road bikes.
            <br>From 2012, KTM was the largest motorcycle manufacturer in Europe for four consecutive years. Globally, the company is among the leading off-road motorcycle manufacturers. In 2016, KTM sold 203,423 motor vehicles worldwide. 
            </p></div>
          </div>
    </section>
<section>
    <h3 class="text-center">Bikes</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/ktm250.jpg" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">KTM 250 DUKE </h5>
              <p class="card-text">
                If chasing thrills is your game then climb aboard the KTM 250 DUKE. It combines maximum riding exhilaration with optimum user value and is hard to beat wherever nimble handling counts. Lightweight, powerful and packed with advanced technology, it promises to deliver a thrilling ride from sunrise to sunset.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.html?bike=<?php echo "KTM 250 DUKE"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.ktm.com/en-in/models/naked-bike/ktm-250-duke-2020.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/ktm390.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">KTM 390 ADVENTURE</h5>
              <p class="card-text">
                The KTM 390 ADVENTURE takes exploration further by merging all-road versatility and proven reliability with real-world performance. Built around a compact 373 cc single-cylinder powerplant with a capable, lightweight chassis and class-leading electronics, the KTM 390 ADVENTURE encourages you to find new frontiers with the unmatched capability and excitement you'd expected from a KTM ADVENTURE machine. Featuring an updated design for 2022, the KTM 390 ADVENTURE is now also visually aligned with the Dakar winning KTM FACTORY RALLY machines.
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.html?bike=<?php echo "KTM 390 ADVENTURE"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.ktm.com/en-in/models/travel/ktm-390-adventure2022.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/ktmrc.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">KTM RC 200 </h5>
              <p class="card-text">
                The 2022 KTM RC 200 is a step forward when it comes to eye-catching race bike style and everyday performance. With a collection of essential premium parts, such as WP APEX suspension, lightweight wheels and ABS, the KTM RC 200 provides outstanding value with unmatched, class-leading performance.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.html?bike=<?php echo "KTM RC 200 "; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.ktm.com/en-in/models/supersport/ktm-rc-200-2022.html" class="card-link btn btn-danger" target="_blank">Know More</a>
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