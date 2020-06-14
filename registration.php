<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - HomePortal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
</head>

<body>
    <?php include('components/sidebar.php');?>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registration</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <form id="register-form">
                    <div class="form-group ">
                      <label for="first_name">Name</label>
                      <input class="form-control item mb-2" name="first_name" type="text" id="first_name" placeholder="First Name">
                      <input class="form-control item" name="last_name" type="text" id="last_name" placeholder="Last Name">
                    </div>
                    <hr>
                    <label for="">Gender</label>
                    <div class="form-group form-check">
                      <div class="">
                        <input class="form-check-input" type="radio" name="gender" name="gender" id="r_male" value="Male">
                        <label class="form-check-label" for="r_male">Male</label>
                      </div>
                      <div class="">
                        <input class="form-check-input" type="radio" name="gender" name="gender" id="r_female" value="Female">
                        <label class="form-check-label" for="r_male">Female</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="contact">Contact Number</label>
                      <input type="text" id="contact"class="form-control"name="contact" placeholder="Enter Contact No" value="+63">
                    </div>
                    <div class="form-group">
                      <label for="contact">Address</label>
                      <textarea class="form-control" id="address" name="address" rows="5" placeholder="Enter Your Address"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="text" id="email"class="form-control" name="email" placeholder="Enter Email Address" value="">
                    </div>

                    <div class="form-group">
                      <label for="username">Username</label>
                      <input class="form-control item" type="text" id="username"name="username" placeholder="Enter Username">
                    </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control item mb-2" type="password" placeholder="Enter Password" name="password" id="password">
                        <input class="form-control item" type="password" placeholder="Confirm Password" id="password-repeater">
                      </div>
                    <button class="btn btn-primary btn-block" type="submit">Sign Up</button></form>
            </div>
        </section>
        <section class="clean-block clean-info dark bg-white">
          <div class="newsletter-subscribe p-5">
              <div class="container">
                  <div class="intro">
                      <h2 class="text-center">Subscribe for our Newsletter</h2>
                      <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
                  </div>
                  <div class="row justify-content-center">
                    <form class="form-inline" method="post">
                        <div class="form-group mr-1"><input class="form-control" type="email" name="email-subscribe" placeholder="Your Email" value=""></div>
                        <div class="form-group"><button class="btn btn-primary" type="submit">Subscribe </button></div>
                    </form>
                  </div>
              </div>
          </div>
        </section>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.min.js"></script>
        <script src="js/register.js"></script>
    </main>
    <?php include('components/footer.php')?>

</body>

</html>
