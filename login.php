<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - HomePortal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

</head>

<body>
    <?php include('components/sidebar.php');?>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <form id="login-form" method="POST" action="api/auth/login.php">
                    <div class="form-group"><label for="username">Username</label><input class="form-control item" name="username" type="text" id="username"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control" name="password" type="password" id="password" autocomplete></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>
                    </div><button class="btn btn-primary btn-block" type="submit">Log In</button></form>
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
                        <div class="form-group mr-1"><input class="form-control" type="email" name="email" placeholder="Your Email" /></div>
                        <div class="form-group"><button class="btn btn-primary" type="submit">Subscribe </button></div>
                    </form>
                  </div>
              </div>
          </div>
        </section>
    </main>
    <?php include('components/footer.php')?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>

</body>

</html>
