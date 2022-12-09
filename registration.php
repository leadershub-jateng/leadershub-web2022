<!doctype html>
<html lang="en">
  <head>
    <!-- Start Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- End Meta Data -->

    <!-- Start Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- End Bootstrap -->

    <!-- Start API Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700&display=swap" rel="stylesheet">
    <!-- End API Google font -->


    <!-- Start Style -->
    <link rel="stylesheet" href="style.css">
    <!-- End Style -->

    <title>Leadershub Jawa Tengah</title>
    <link rel="icon" href="img/icon.png">

  </head>
  <body>
    <!-- Registration Page -->
    <section class="vh-100" id="regis-page">
      <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

                <?php
                if(isset($_GET["error"])){
                $error = $_GET["error"];
                }else{
                $error = "";
                }
                $message = "";
                if($error == "failed"){
                $message = "Registration failed, please try again!";
                }
                ?>
                <p><?php echo $message;?></p>

                <form method="post" href="regisAct.php" action="regisAct.php">
    
                  <div class="row">
                    <div class="col-md-6 mb-4">
    
                      <div class="form-outline">
                        <input type="text" id="firstName" class="form-control form-control-lg" name="firstName"/>
                        <label class="form-label" for="firstName">First Name</label>
                      </div>
    
                    </div>
                    <div class="col-md-6 mb-4">
    
                      <div class="form-outline">
                        <input type="text" id="lastName" class="form-control form-control-lg" name="lastName" />
                        <label class="form-label" for="lastName">Last Name</label>
                      </div>
    
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">
    
                    <div class="form-outline">
                        <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="phoneNumber"/>
                        <label class="form-label" for="phoneNumber">Phone Number</label>
                      </div>
    
                    </div>
                    <div class="col-md-6 mb-4">
    
                      <h6 class="mb-2 pb-1">Gender: </h6>
    
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender"
                          value="F"/>
                        <label class="form-check-label" for="femaleGender">Female</label>
                      </div>
    
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender"
                          value="M"/>
                        <label class="form-check-label" for="maleGender">Male</label>
                      </div>
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
    
                      <div class="form-outline">
                        <input type="email" id="emailAddress" class="form-control form-control-lg" name="emailAddress"/>
                        <label class="form-label" for="emailAddress">Email</label>
                      </div>
    
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
    
                      <div class="form-outline">
                        <input type="password" id="password" class="form-control form-control-lg" name="password" />
                        <label class="form-label" for="password">Password</label>
                      </div>
    
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-12">
    
                    </div>
                  </div>
                  <div class="mt-0 pt-0">
                    <button class="btn btn-danger btn-lg btn-block" type="submit">Sign Up</button>
                  </div>
                  <p class="mb-5 pb-lg-2 pt-4" style="color: #393f81;">Already have an account? <a href="login.php"
                    style="color: #393f81;">Login here</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Registration Page -->

  <!-- Start Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- End Script Bootstrap -->
</body>
</html>