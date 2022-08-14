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
                  <img src="logo/land.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
              </figure>
            </div>
            <div class="card-body">
              <h5 class="card-title">Land Rover</h5>
              <p class="card-text" style="font-size: 19px;">
                Land Rover is a British brand of predominantly four-wheel drive, off-road capable vehicles, owned by multinational car manufacturer Jaguar Land Rover (JLR), since 2008 a subsidiary of India's Tata Motors. JLR currently builds Land Rovers in Brazil, China, India, Slovakia, and the United Kingdom. The Land Rover name was created in 1948 by the Rover Company for a utilitarian 4WD off-roader; yet today Land Rover vehicles comprise solely upmarket and luxury sport utility cars.
                Land Rover was granted a Royal Warrant by King George VI in 1951, and 50 years later, in 2001, it received a Queen's Award for Enterprise for outstanding contribution to international trade. Over time, Land Rover grew into its own brand (and for a while also a company), encompassing a consistently growing range of four-wheel drive, off-road capable models. Starting with the much more upmarket 1970 Range Rover, and subsequent introductions of the mid-range Discovery and entry-level Freelander line (in 1989 and 1997), as well as the 1990 Land Rover Defender refresh, the marque today includes two models of Discovery, four distinct models of Range Rover, and after a three-year hiatus, a second generation of Defenders have gone into production for the 2020 model year—in short or long wheelbase, as before.
            </p></div>
          </div>
    </section>
<section>
    <h3 class="text-center">Cars</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/rangeroversport.jpg" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Range Rover Sports</h5>
              <p class="card-text">
                With sportier design cues and a powerful, muscular stance, Range Rover Sport is designed for impact. Cleaner, more dynamic, there’s a contemporary feel everywhere you look—from the Range Rover Sport grille, redesigned bonnet vents to the refined, yet sporty wheel options.
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "Range Rover Sports"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.landrover.in/vehicles/range-rover-sport-2021/index.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/discovery.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Land Rover Discovery</h5>
              <p class="card-text">
                With seven full-size seats, five ISOFIX points and device charging for every occupant, Land Rover Discovery’s interior has been designed for all families and all occasions.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "Land Rover Discovery"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.landrover.in/vehicles/discovery/index.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
        </div>
</section>
<section id="electric">
    <h3 class="text-center">Electrical Vechicle</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/evoque.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Range Rover Evoque</h5>
              <p class="card-text">
                Range Rover Evoque is fully equipped for 21st century urban adventures. Innovative features such as Pivi, Apple Carplay®1 and Android AutoTM2 allow for enhanced connectivity, while an intuitive Touchscreen keeps it simple. Plus, MeridianTM Sound System allows for a concert hall experience on every drive.​
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?elec=<?php echo "Range Rover Evoque"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.landrover.in/vehicles/range-rover-evoque/index.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/rangeroversports.jpg" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Land Rover Sport</h5>
              <p class="card-text">
                Powerful electrifying performance, engineered to meet every challenge. Our Electric Hybrid offers optimised efficiency and extended range all-electric (EV) driving. A fully electric Range Rover Sport will join the family in 2024.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?elec=<?php echo "Land Rover Sport"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.landrover.in/vehicles/new-range-rover-sport/index.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
        </div>
        <div class="card mb-3" style="width: 22rem;">
            <img src="cars/defender.jpg" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Land Rover Defender</h5>
              <p class="card-text">
                Defender V8 Carpathian Edition features the same off-road control and on-road character as the Defender V8. The differences lie in the exterior design cues, including the exclusive combination of Carpathian Grey paint and Satin Protective film, along with a Black contrast tail door and contrast bonnet.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?elec=<?php echo "Land Rover Defender"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.landrover.in/vehicles/defender/index.html" class="card-link btn btn-danger" target="_blank">Know More</a>
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
