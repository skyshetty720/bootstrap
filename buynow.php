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
<body style="font-family: 'Ropa Sans',sans-serif;">
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
    </header> <br><br><br>
    <center>
    <?php
     include 'dbcon.php';
         #$model="null";   
        $car=isset($_GET['car'])?$_GET['car'] : NULL;
        #echo $car;
        $elec=isset($_GET['elec'])?$_GET['elec'] : NULL;
        #echo $car;
        $bike=isset($_GET['bike'])?$_GET['bike'] : NULL;
        #echo $car;
        if($car)
        {
          global $model;
          $model=$car;
        }elseif($elec)
        {
          global $model;
          $model=$elec;
        }else
        {
          global $model;
          $model=$bike;
        }

        
        
        if(isset($_POST['submit']))
          { 
             $cars=isset($_GET['car'])?$_GET['car'] : NULL;
            #echo $car;
            $elecs=isset($_GET['elec'])?$_GET['elec'] : NULL;
            #echo $car;
            $bikes=isset($_GET['bike'])?$_GET['bike'] : NULL;
            #echo $car;
        if($cars)
        {
          $models=$cars;
        }elseif($elecs)
        {
          $models=$elecs;
        }else
        {
          $models=$bikes;
        }
        echo $models;
                global $models;
                #echo " ".$_POST['yr'];
                #$models=$GLOBALS['model'];
                #$models=mysqli_real_escape_string($con, $_POST['model']);
                $yrs=mysqli_real_escape_string($con, $_POST['yr']);
                $varient=mysqli_real_escape_string($con,$_POST['varient']);
                $kmss=mysqli_real_escape_string($con,$_POST['kms']);
                $regs=mysqli_real_escape_string($con,$_POST['reg']);


                $insquery=" insert into buynow(model, yrs, varient, kmss, regs) values('$models','$yrs','$varient','$kmss','$regs')";
                $inquery=mysqli_query($con,$insquery);
                if($inquery)
                {
                  echo "inserted!!";
                  echo $GLOBALS['models'];
                  echo $models;
                }


              }

      ?>
             

               
      <h3>Enter The Details Of Vechicle</h3>
      <hr class="w-50 m-auto"/><br>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
      <h4>Name Of The Model</h4>
      <select class="form-control " style="width:250px;" name="model">
      <option value="<?php $model; ?>" selected disabled><?php echo $model; ?></option>  
    </select>
    <br>
    <h4>Model Year</h4>
    <select class="form-control " style="width:250px;" name="yr" > <span class="caret"></span>
    <option selected disabled>Select the year</option>
    <option value="2022">2022</option>
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
</select>
<br>
<h4>Model Varient</h4>
<select class="form-control " style="width:250px;" name="varient" >
<option selected disabled>Select the varient</option>
<option value="LX">LX</option>
<option value="LXI">LXI</option>
 <option value="LXI ABS">LXI ABS</option>
<option value="LXI OPT">LXI OPT</option>
<option value="VXI">VXI</option>
<option value="VXI ABS">VXI ABS</option>
<option value="VXI ABS AIR BAG">VXI ABS AIR BAG</option>
<option value="VXI OPT">VXI OPT</option>
<option value="VXI PLUS">VXI PLUS</option>
<option value="VXI+ O MT">VXI+ O MT</option>
<option value="VXI OPT AMT">VXI+OPT . AMT</option>
<option value="LXI CNG">LXI CNG</option>
<option value="VXI AMT">VXI AMT</option>
</select>
<br>
<h4>Kms Driven</h4>
<select class="form-control " style="width:250px;" name="kms" required>
<option selected disabled>Select the kms</option>
<option value="5000">Upto 10,000kms</option>
<option value="15000"> 10,000kms-20,000kms</option>
<option value="30000"> 20,000kms-40,000kms</option>
<option value="55000"> 40,000kms-70,000kms</option>  
<option value="15000"> 70,000kms-1,00,000kms</option>
<option value="110000"> 1,00,000kms-1,20,000kms</option>
<option value="250000"> Above 1,30,000kms</option>
</select>
<br>
<h4>Registered State</h4>
<select class="form-control " style="width:250px;" name="reg" >
<option selected disabled>Select the state</option>
<option value="KA">KARNATAKA</option>
<option value="MH">MAHARASTRA</option>
<option value="DL">DELHI</option>
<option value="KL">KERALA</option>
<option value="TN">TAMILNADU</option>
<option value="UP">UTTAR PRADESH</option>
<option value="GA">GOA</option>
</select>
<br>
<br>
<input type="submit" name="submit" value="Confirm Order" class="btn btn-danger" />
</form>
<?php 


?>
</center>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body></html>