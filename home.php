<?php
session_start();

if(!isset($_SESSION['username']))
{
  header('location:login.php');
}//this will be used for removing the session and page not go back if the user logged out
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
<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light px-4 border-bottom" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php"><img src="img/logoo1.jpg" width="95" height="30"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5  text-center">
              <li class="nav-item">
                <a class="nav-link active text-primary" aria-current="page" href="#">Home</a>
              </li>&nbsp;&nbsp;&nbsp;&nbsp;
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>&nbsp;&nbsp;&nbsp;&nbsp;
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['username']; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="logout.php">logout</a></li>
                </ul>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
              </li>
            </ul>
          </div>
        </div>
      </nav> 
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/landscape1.jpg" class="d-block w-100" alt="images of car" height="750" width="150">
            <div class="carousel-caption d-none d-md-block">
              <h5>Dream</h5>
              <p>Make Your Dream Come through.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/landscape2.jpg" class="d-block w-100" alt="images of car" height="750" width="150">
            <div class="carousel-caption d-none d-md-block">
              <h5>Passionate</h5>
              <p>Develop a passion for learning. If you do, you will never cease to grow.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/wheeling.jpg" class="d-block w-100" alt="images of car" height="750" width="150">
            <div class="carousel-caption d-none d-md-block">
              <h5>Hard Work</h5>
              <p>Hard work is an essential element in tracking down and perfecting a strategy or in executing it.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>   
  </header>
  <section>
    <div class="container my-3">
      <div class="text-center">
        <h1>Shop <span class="text-primary">By</span> Category</h1>
        <hr class="w-50 m-auto"/>
      </div>
      <div class="d-flex justify-content-evenly">
            <figure class="category-image" id="bikes">
                <a href="category.php" class="d-display-block">
                  <img src="img/bike2.jpg" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
                <figcaption class="text-center">Bike</figcaption>
            </figure>
            <figure class="category-image" id="cars">
              <a href="category.php">
                <img src="img/car2.jpg" width="150" height="150" class="my-3" style="border-radius: 10%;">
              </a>
              <figcaption class="text-center">Car</figcaption>
            </figure>
            <figure class="category-image" id="electrics">
              <a href="category.php">
                <img src="img/ev1.jpg" width="150" height="150" class="my-3" style="border-radius: 10%;">
              </a>
              <figcaption class="text-center">Electrical Vechicle</figcaption>
            </figure>
      </div>
    </div>
  </section>
 <!-- <section>
    <div class="container my-3" style="background-image: url(img/car1.jpg);">
      <div class="container d-flex align-item-center justify-content-center text-white" style="background-color: rgba(13, 12, 12, 0.7);">
      <h2>Book Your Vechicle Now!!!</h2><br><br>
      <p>Choose your travel partner which give you enomorous happy and joy.Explore the world with your loved one.</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>
  </section>-->
  <section>
       <div class="container">
        <div class="text-center">
          <h1>Shop <span class="text-primary">By</span> Brand</h1>
          <hr class="w-50 m-auto"/>
         </div>
         <ul class="d-flex nav nav-pills justify-content-center">
          <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#car">Car</a></li>
          <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#bike">Bike</a></li>
          <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#electric">Electric Vechicle</a></li>
         </ul>
         <div class="tab-content">
            <div class="tab-pane active" id="car">
              <div class="row">
                <div class="d-flex justify-content-evenly">
                  <figure class="category-image">
                      <a href="audi.php" class="d-display-block">
                        <img src="logo/audi.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                      </a>
                      <figcaption class="text-center">Audi</figcaption>
                  </figure>
                  <figure class="category-image">
                    <a href="benz.php">
                      <img src="logo/benz.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">Benz</figcaption>
                  </figure>
                  <figure class="category-image">
                    <a href="bmw.php">
                      <img src="logo/bmw.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">BMW</figcaption>
                  </figure>
                  <figure class="category-image">
                    <a href="ford.php">
                      <img src="logo/ford.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">Ford</figcaption>
                  </figure>
                  <figure class="category-image">
                    <a href="honda.php">
                      <img src="logo/honda1.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">Honda</figcaption>
                  </figure>
                  <figure class="category-image">
                    <a href="hyundai.php">
                      <img src="logo/hyundai.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">Hyundai</figcaption>
                  </figure>
                  <figure class="category-image">
                    <a href="jaguar.php">
                      <img src="logo/jaguar.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">Jaguar</figcaption>
                  </figure>
            </div>
            <div class="d-flex justify-content-evenly">
              <figure class="category-image">
                  <a href="jeep.php" class="d-display-block">
                    <img src="logo/jeep.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                  </a>
                  <figcaption class="text-center">Jeep</figcaption>
              </figure>
              <figure class="category-image">
                <a href="kia.php">
                  <img src="logo/kia.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
                <figcaption class="text-center">KIA</figcaption>
              </figure>
              <figure class="category-image">
                <a href="landrover.php">
                  <img src="logo/land.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
                <figcaption class="text-center">Land Rover</figcaption>
              </figure>
              <figure class="category-image">
                <a href="mahindra.php">
                  <img src="logo/mahindra.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
                <figcaption class="text-center">Mahindra</figcaption>
              </figure>
              <figure class="category-image">
                <a href="maruthi.php">
                  <img src="logo/maruthi1.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
                <figcaption class="text-center">Maruthi</figcaption>
              </figure>
              <figure class="category-image">
                <a href="mg.php">
                  <img src="logo/mg.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
                <figcaption class="text-center">MG</figcaption>
              </figure>
            </div>
            <!--<div class="d-flex justify-content-evenly">
              <figure class="category-image">
                  <a href="#" class="d-display-block">
                    <img src="logo/skoda.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                  </a>
                  <figcaption class="text-center">Skoda</figcaption>
              </figure>
              <figure class="category-image">
                <a href="#">
                  <img src="logo/tata.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
                <figcaption class="text-center">Tata</figcaption>
              </figure>
              <figure class="category-image">
                <a href="#">
                  <img src="logo/toyota.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
                <figcaption class="text-center">Toyota</figcaption>
              </figure>
              <figure class="category-image">
                <a href="#">
                  <img src="logo/wolswagen.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
                <figcaption class="text-center">Wolswagen</figcaption>
              </figure>
        </div>-->
            </div>
            </div>
            <div class="tab-pane fade" id="bike">
              <div class="row">
                <div class="d-flex justify-content-evenly">
                  <figure class="category-image">
                      <a href="honda.php #bike" class="d-display-block">
                        <img src="logo/Honda.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                      </a>
                      <figcaption class="text-center">Honda</figcaption>
                  </figure>
                  <figure class="category-image">
                    <a href="hero.php">
                      <img src="logo/hero.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">Hero</figcaption>
                  </figure>
                  <figure class="category-image">
                    <a href="bajaj.php">
                      <img src="logo/bajaj.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">Bajaj</figcaption>
                  </figure>
                  <figure class="category-image">
                    <a href="tvs.php">
                      <img src="logo/tvs.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">Tvs</figcaption>
                  </figure>
                  <figure class="category-image">
                    <a href="yamaha.php">
                      <img src="logo/yamaha.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">Yamaha</figcaption>
                  </figure>
                  <figure class="category-image">
                    <a href="royal.php">
                      <img src="logo/royal.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">Royal Enfield</figcaption>
                  </figure>
            </div>
            <div class="d-flex justify-content-evenly">
              <figure class="category-image">
                <a href="ktm.php">
                  <img src="logo/ktm.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
                <figcaption class="text-center">Ktm</figcaption>
              </figure>
        </div>
              </div>
            </div>
            <div class="tab-pane fade" id="electric">
              <div class="row">
                <div class="d-flex justify-content-evenly">
                  <figure class="category-image">
                    <a href="audi.php #electric" class="d-display-block">
                      <img src="logo/audi.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">Audi</figcaption>
                </figure>
                <figure class="category-image">
                  <a href="landrover.php #electric" class="d-display-block">
                    <img src="logo/land.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                  </a>
                  <figcaption class="text-center">Lamd Rover</figcaption>
              </figure>
                  <figure class="category-image">
                    <a href="mahindra.php #electric">
                      <img src="logo/mahindra.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                    </a>
                    <figcaption class="text-center">Mahindra</figcaption>
                  </figure>
            </div>
              </div>
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