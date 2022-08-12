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
        <style>
                .divider:after,
                .divider:before {
                content: "";
                flex: 1;
                height: 1px;
                background: #eee;
                }
                .h-custom {
                height: calc(100% - 73px);
                }
                @media (max-width: 450px) {
                .h-custom {
                height: 100%;
                }
                }

        </style>
</head>
<body>

<?php
       include 'dbcon.php';

        if(isset($_POST['submit']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];

            $emailsearch="select * from registration where email='$email' ";
            $query=mysqli_query($con,$emailsearch);

            $emailcount=mysqli_num_rows($query);

            if($emailcount)
            {
                $email_pass=mysqli_fetch_assoc($query);
                $dbpass=$email_pass['password'];

                $_SESSION['username']=$email_pass['username'];

                if($dbpass===$password)
                {

                    ?>
                    <script>
                        location.replace("home.php");
                    </script>
                    <?php
                }
                else
                {
                    echo "password incorrect!!!";
                }
            }
            else
            {
                echo "invalid user";
            }

        }



?>



<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>

      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <h2 class="text-center pb-2">LOGIN</h2>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <!-- Email input -->
            <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-at fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="email" required />
                      <label class="form-label" for="form3Example1c">Enter Email</label>
                    </div>
                  </div>

          <!-- Password input -->
          <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" name="password" required />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

          <div class="text-center  mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-lg" name="submit"
              style="padding-left: 4.5rem; padding-right: 4.5rem;" value="Login"/>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>