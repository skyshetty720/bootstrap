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
                  <img src="logo/hyundai.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
              </figure>
            </div>
            <div class="card-body">
              <h5 class="card-title">Hyundai Motor Company</h5>
              <p class="card-text" style="font-size: 19px;">
                Hyundai Motor Company, often abbreviated to Hyundai Motors and commonly known as Hyundai  is a South Korean multinational automotive manufacturer headquartered in Seoul, South Korea. Hyundai Motor Company was founded in 1967. Currently, the company owns 33.88 percent of Kia Corporation,and also fully owns two marques including its luxury cars subsidiary, Genesis Motor, and an electric vehicle sub-brand, Ioniq. Those three brands altogether comprise the Hyundai Motor Group.
                Hyundai operates the world's largest integrated automobile manufacturing facility in Ulsan, South Korea which has an annual production capacity of 1.6 million units.The company employs about 75,000 people worldwide. Hyundai vehicles are sold in 193 countries through 5,000 dealerships and showrooms.
            </p></div>
          </div>
    </section>
<section>
    <h3 class="text-center">Cars</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/hyundai1.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Grand i10 NIOS</h5>
              <p class="card-text">
                Step into the world of high-powered executives with the bold Grand i10 NIOS corporate edition. A seamless blend of cutting-edge technology and new age style makes it the perfect statement for the young professional. Subtle details accentuate the corporate edition, like all-black interiors with red inserts, elegant chrome garnish and a 17.14cm touchscreen infotainment system, ensuring that you’ll have a truly extraordinary driving experience.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "Grand i10 NIOS"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.hyundai.com/in/en/find-a-car/grand-i10-nios/highlights" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/i20.jpg" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">i20</h5>
              <p class="card-text">The all-new i20 has been inspired from Hyundai’s design DNA of “sensuous sportiness” with a dynamic look on the outside & luxurious feeling on the inside. Its breathtaking presence casts a magnetic charm; while its connected and intuitive features enhance your comfort and convenience. Truly a class above the rest.</p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "i20"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.hyundai.com/in/en/find-a-car/i20/highlights" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/creta.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Creta</h5>
              <p class="card-text">With a breathtakingly beautiful and edgy design, the All-new CRETA has been crafted to command respect. The bold exterior and the new masculine stance will set you apart from every other SUV on the road.
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "Creta"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.hyundai.com/in/en/find-a-car/creta/highlights" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/venue.jpg" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Venue</h5>
              <p class="card-text">What do you get when you combine advanced technology, incredible connectivity, and new-age style? The Lit SUV, Introducing the new Hyundai VENUE. The lit life is all about setting the trends, being connected to everything, and stealing the show wherever you go. The new Hyundai VENUE is the perfect addition to do all that and more.
            </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=<?php echo "Venue"; ?>" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.hyundai.com/in/en/find-a-car/venue/highlights" class="card-link btn btn-danger" target="_blank">Know More</a>
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
