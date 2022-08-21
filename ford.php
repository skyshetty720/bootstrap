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
                  <img src="logo/ford.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
              </figure>
            </div>
            <div class="card-body">
              <h5 class="card-title">FORD Motor Company</h5>
              <p class="card-text" style="font-size: 19px;">Ford Motor Company (commonly known as Ford) is an American multinational automobile manufacturer headquartered in Dearborn, Michigan, United States. It was founded by Henry Ford and incorporated on June 16, 1903. The company sells automobiles and commercial vehicles under the Ford brand, and luxury cars under its Lincoln luxury brand. Ford also owns Brazilian SUV manufacturer Troller, an 8% stake in Aston Martin of the United Kingdom and a 32% stake in China's Jiangling Motors. It also has joint ventures in China (Changan Ford), Taiwan (Ford Lio Ho), Thailand (AutoAlliance Thailand), Turkey (Ford Otosan), and Russia (Ford Sollers). The company is listed on the New York Stock Exchange and is controlled by the Ford family; they have minority ownership but the majority of the voting power.
                Ford introduced methods for large-scale manufacturing of cars and large-scale management of an industrial workforce using elaborately engineered manufacturing sequences typified by moving assembly lines; by 1914, these methods were known around the world as Fordism. Ford's former UK subsidiaries Jaguar and Land Rover, acquired in 1989 and 2000 respectively, were sold to the Indian automaker Tata Motors in March 2008. Ford owned the Swedish automaker Volvo from 1999 to 2010. In 2011, Ford discontinued the Mercury brand, under which it had marketed entry-level luxury cars in the United States, Canada, Mexico, and the Middle East since 1938.
            </p></div>
          </div>
    </section>
<section>
    <h3 class="text-center">Cars</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/ford1.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Ford EcoSport</h5>
              <p class="card-text">
                Ford has subtly updated the EcoSport line-up with the introduction of a new SE variant. Based on the Titanium trim, the SE sits below the range-topping S and offers the customers a choice of doing away with the tailgate-mounted spare wheel. We drove it a few weeks back and you can read our first drive review over here. This time around we take a deeper look at the EcoSport SE and tell you five things we still like about it and two things that could have been better.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=Ford EcoSport" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.carwale.com/ford-cars" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/ford2.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title"> Ford Endrover</h5>
              <p class="card-text">The Ford Endeavour is the best full-sized SUV in it class. It has the road presence, a fantastic ride quality, and even though it has a smaller engine compared to its competition, it doesn’t feel slow or boring. Additionally, it might not command as high a resale value as say the Toyota Fortuner, but its relatively upmarket interiors, better on-road dynamics, and the higher comfort co-efficient give it enough of an advantage.</p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=Ford Endrover" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.carwale.com/ford-cars" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/ford3.webp" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Ford Figo</h5>
              <p class="card-text">The introduction of an automatic is the first update Figo has received since its 2019 facelift. Although it hasn’t been able to set the sales numbers rolling, the Figo comes across as an overall package for someone looking to buy a family hatchback that’s safe, built well and has a good amount of driving fun thrown in the mix. The addition of the two-pedal setup was a much-needed one as all its competitors already have an automatic option, even if it’s an AMT in the least. The 1.2-litre torque converter might not impress with its outright performance but is adequate for everyday usability.</p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=Ford EcoSport" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.carwale.com/ford-cars" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
        </div>
</section>
<section>
    <div class="d-flex justify-content-center">
      <div class="card text-white bg-danger mb-3" style="width: 18rem;">
        <div class="card-header">Info</div>
        <div class="card-body">
          <p class="card-text">Ford is no longer producing any new cars in India.</p>
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
