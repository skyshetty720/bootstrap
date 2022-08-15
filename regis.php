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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> 

<?php 

include 'dbcon.php';

if(isset($_POST['submit']))
{
    $username= mysqli_real_escape_string($con, $_POST['username']);
    $mobile=mysqli_real_escape_string($con, $_POST['mobile']);
    $email=mysqli_real_escape_string($con, $_POST['email']);
    $password=mysqli_real_escape_string($con, $_POST['password']);
    $cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);

    $emailquery=" select * from registration where email='$email' ";
    $query=mysqli_query($con,$emailquery);

    $emailcount=mysqli_num_rows($query);

    if($emailcount>0)
    {
        ?>
                    <script>
                            alert("this user is already exists");
                    </script>
                <?php
    }
    else
    {
        if($password===$cpassword)
        {
            $insertquery=" insert into registration(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$password','$cpassword')";
            $iquery=mysqli_query($con,$insertquery);

            if($iquery)
            {
                ?>
                    <script>
                            alert("insertion successful!!!!!");
                    </script>
                <?php
        }else
        {
                ?>
                    <script>
                            //alert("insertion not successful!!!!!");
                            location.replace("login.php");
                    </script>
                <?php

        }

        }
        else
        {
            ?>
                    <script>
                            alert("password is not matching");
                    </script>
                <?php

        }
    }


}


?>

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="mx-1 mx-md-4" method="POST" onsubmit="return validation()">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="user" class="form-control" name="username" required /><span id="names" class="text-danger font-weight-bold"></span><br>
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="mbl" class="form-control" name="mobile" required /><span id="mbl" class="text-danger font-weight-bold"></span><br>
                      <label class="form-label" for="form3Example1c">Mobile Number</label>
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-at fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="eml" class="form-control" name="email" required /><span id="emails" class="text-danger font-weight-bold"></span><br>
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="pss" class="form-control" name="password" required /><span id="passs" class="text-danger font-weight-bold"></span><br>
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="cpss" class="form-control" name="cpassword" required />
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>


                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Register" />
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                      Have an account?<a href="login.php">Login here</a>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
    function validation()
    {
      var user=document.getElementById('user').value;
      var mbl=document.getElementById('mbl').value;
      var pass=document.getElementById('pss').value;
      var emails=document.getElementById('emails').value;
      if(user.length<=2)
      {
        document.getElementById('names').innerHTML="Enter Proper Name!!!";
        return false;
      }
      if(!isNaN(user))
      {
        document.getElementById('names').innerHTML="Enter Only The Character!!!";
        return false; 
      }
      if(pass.length<=6)
      {
        document.getElementById('passs').innerHTML="Enter The Password more than 6 letters!!!";
        return false;
      }
      if(isNaN(mbl))
      {
        document.getElementById('mbl').innerHTML="Enter Digits Only!!!";
        return false;    
      }
      if(mbl.length!=10)
      {
        document.getElementById('mbl').innerHTML="Enter Digits Only!!!";
        return false;    
      }
      if(emails.charAt(emails.length-4)!='.')
      {
        document.getElementById('mbl').innerHTML="Enter Proper ID Only!!!";
        return false;    
      }

    }

</script>
</body>
</html>