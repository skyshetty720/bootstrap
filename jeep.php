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
                  <img src="logo/jeep.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
              </figure>
            </div>
            <div class="card-body">
              <h5 class="card-title">Jeep</h5>
              <p class="card-text" style="font-size: 19px;">
                Jeep is an American automobile marque, now owned by multi-national corporation Stellantis.Jeep has been part of Chrysler since 1987, when Chrysler acquired the Jeep brand, along with remaining assets, from its previous owner American Motors Corporation (AMC).
                <br>Jeep's current product range consists solely of sport utility vehicles – both crossovers and fully off-road worthy SUVs and models, including one pickup truck. Previously, Jeep's range included other pick-ups, as well as small vans, and a few roadsters. Some of Jeep's vehicles—such as the Grand Cherokee—reach into the luxury SUV segment, a market segment the 1963 Wagoneer is considered to have started. Jeep sold 1.4 million SUVs globally in 2016, up from 500,000 in 2008, two-thirds of which in North America, and was Fiat-Chrysler's best selling brand in the U.S. during the first half of 2017. In the U.S. alone, over 2400 dealerships hold franchise rights to sell Jeep-branded vehicles, and if Jeep were spun off into a separate company, it is estimated to be worth between $22 and $33.5 billion—slightly more than all of FCA (US). Christian Meunier is the current President of the Jeep brand worldwide.
                <br>Prior to 1940 the term "jeep" had been used as U.S. Army slang for new recruits or vehicles, but the World War II "jeep" that went into production in 1941 specifically tied the name to this light military 4x4, arguably making them the oldest four-wheel drive mass-production vehicles now known as SUVs. The Jeep became the primary light 4-wheel-drive vehicle of the United States Armed Forces and the Allies during World War II, as well as the postwar period. The term became common worldwide in the wake of the war. Doug Stewart noted: "The spartan, cramped, and unstintingly functional jeep became the ubiquitous World War II four-wheeled personification of Yankee ingenuity and cocky, can-do determination." It is the precursor of subsequent generations of military light utility vehicles such as the Humvee, and inspired the creation of civilian analogs such as the original Series I Land Rover. Many Jeep variants serving similar military and civilian roles have since been designed in other nations.
            </p></div>
          </div>
    </section>
<section>
    <h3 class="text-center">Cars</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/jeep1.jpg" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Jeep Compass</h5>
              <p class="card-text">
                The Jeep Compass is refined and ready to impress. With a two-toned dark grey contrast roof, full LED package projector headlamps and a striking alloy design available in a variety of body-coloured styles and finishes, the Jeep Compass Stands apart from the ordinary.
                Our latest addition, the Jeep Compass Trailhawk, is a sure-shot head-turner with its aggressive stature and a signature black Hood Decal. Having earned the Trail Rated badge, there is no terrain too tough to conquer for this SUV.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "Jeep Compass"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.jeep-india.com/new-compass.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/meridian.jpg" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Jeep Meridian</h5>
              <p class="card-text">The new Jeep Meridian embodies a unique duality of characteristics; it is big yet sporty, elegant yet rugged, and bold yet sophisticated. Also featuring the iconic seven-slot Jeep grille, the new Jeep Meridian is truly design redefined.</p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "Jeep Meridian"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.jeep-india.com/new-jeep-meridian.html" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/wrangler.jpg" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Jeep® Wrangler Unlimited</h5>
              <p class="card-text">State-of-the-art technology and connectivity, innovative features, and improved convenience are all included in its heritage-inspired design. Add high-quality materials and precise technical details to it, and drivers all around enjoy more storage, more comfort, more visibility, and a quieter ride in the All-New Wrangler.
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "Jeep® Wrangler Unlimited"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.jeep-india.com/wrangler-jl.html" class="card-link btn btn-danger" target="_blank">Know More</a>
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
