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
                  <img src="logo/bajaj.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
              </figure>
            </div>
            <div class="card-body">
              <h5 class="card-title">Bajaj Auto</h5>
              <p class="card-text" style="font-size: 19px;">
                Bajaj Auto Limited  is an Indian multinational automotive manufacturing company based in Pune. It manufactures motorcycles, scooters and auto rickshaws. Bajaj Auto is a part of the Bajaj Group. It was founded by Jamnalal Bajaj in Rajasthan in the 1940s.
                <br>The company has plants in Chakan, Waluj and Pantnagar. The oldest plant at Akurdi in Pune houses the R&D centre 'Ahead'.
             <br>  Bajaj Auto is the world's third-largest manufacturer of motorcycles and the second-largest in India. It is the world's largest three-wheeler manufacturer. In December 2020, Bajaj Auto crossed a market capitalisation of ₹1 lakh crore (US$13.6 billion), making it the world's most valuable two-wheeler company.
            </p></div>
          </div>
    </section>
<section>
    <h3 class="text-center">Bikes</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/ns.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">NS160</h5>
              <p class="card-text">
                Ace the race with the twin spark DTS-i FI engine which produces 12.7 kW (17.2 PS) power and 14.6 Nm of peak torque. The advanced Oil Cooling system ensures optimum engine performance even at high temperatures.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?bike=<?php echo "NS160"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.bajajauto.com/bikes/pulsar/pulsar-ns160" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/dominar.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Dominar</h5>
              <p class="card-text">Get, set, vroom with this power cruiser. Enjoy higher power and torque with overhead camshaft, liquid cooled and fuel injected engine. Max Power: 29.4 kW (40 PS) @ 8800 rpm | Max Torque: 35 Nm @ 6500 rpm.</p>
            </div>
            <div class="card-body">
              <a href="buynow.php?bike=<?php echo "Dominar"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.bajajauto.com/bikes/dominar/dominar-400" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/avenger.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Avenger 160 Street</h5>
              <p class="card-text">
                Avenger 160 Street is your best city companion with its twin spark, DTS-i fuel injected air-cooled engine that offers a perfect combination of refinement, power and torque.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?bike=<?php echo "Avenger 160 Street"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.bajajauto.com/bikes/avenger/avenger-street-160" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/ct.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">CT 110X</h5>
              <p class="card-text">A powerful 115 cc DTS-i engine with great pickup and no compromise on mileage.</p>
            </div>
            <div class="card-body">
              <a href="buynow.php?bike=<?php echo "CT 110X"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.bajajauto.com/bikes/ct/ct-110x" class="card-link btn btn-danger" target="_blank">Know More</a>
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