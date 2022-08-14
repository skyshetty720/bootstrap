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
                  <img src="logo/royal.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
              </figure>
            </div>
            <div class="card-body">
              <h5 class="card-title">Royal Enfield</h5>
              <p class="card-text" style="font-size: 19px;">
                Royal Enfield was a brand name under which The Enfield Cycle Company Limited of Redditch, Worcestershire sold motorcycles, bicycles, lawnmowers and stationary engines which they had manufactured. Enfield Cycle Company also used the brand name "Enfield" without the "Royal".
<br>The first Royal Enfield motorcycle was built in 1901. The Enfield Cycle Company is responsible for the design and original production of the Royal Enfield Bullet, the longest-lived motorcycle design in history.
<br>Royal Enfield's spare parts operation was sold to Velocette in 1967, which benefitted from the arrangement for three years until their closure in early 1971. Enfield's remaining motorcycle business became part of Norton Villiers in 1967 with the business eventually closing in 1978.
            </p></div>
          </div>
    </section>
<section>
    <h3 class="text-center">Bikes</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/classic.jpg" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Classic 350</h5>
              <p class="card-text">
                Through historical references, stories and anecdotes shared by our key collaborators, we would like to take you on a wistful trip down memory lane to live the legacy of the Timeless Classic - from its inception, captured in a monochromatic photograph of the G2 Model, to the journey it took to becoming the most loved motorcycle across the globe.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?bike=<?php echo "Classic 350"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.royalenfield.com/in/en/motorcycles/classic-350/" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/bullet.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Bullet</h5>
              <p class="card-text">
                What started in 1932 continues to deliver pure motorcycling experiences across generations of riders. Bullet, the quintessential Royal Enfield, is today the longest running motorcycle in history to be in continuous production. A unique, hand-painted fuel tank, the distinct thump and a standing testimony to Royal Enfield's philosophy of simple design and resilient build make Bullet a living legacy on two wheels.
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?bike=<?php echo "Bullet"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.royalenfield.com/in/en/motorcycles/bullet-models/bullet-350/" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/himalayan.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Himalayan</h5>
              <p class="card-text">
                Decades of expeditions. Thousands of kilometers of traversing the most challenging terrain. Years of living and evolving with a machine that responds to the mountains. That's how we made the Himalayan, our first dual-purpose motorcycle.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?bike=<?php echo "Himalayan"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.royalenfield.com/in/en/motorcycles/himalayan/" class="card-link btn btn-danger" target="_blank">Know More</a>
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