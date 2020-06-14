<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - HomePortal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body id="page-top">
        <?php include('components/user-menu-nav.php')?>
        <?php $uid=$_GET['uid'];?>
        <main class="page bg-light">

        <div class="d-flex flex-column " id="content-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-left mt-5">
                  <div class="col-10">
                      <h3 class="text-primary mb-4">Profile</h3>
                  </div>

                </div>

                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="assets/img/avatars/avatar3.jpg" width="160" height="160">
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">User Settings</p>
                                    </div>
                                    <div class="card-body">
                                        <form action="api/user/update-user.php" post>
                                            <input type="text" name="user_id" id="user_id" name="" value="<?=$uid?>" readonly hidden>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="username"><strong>Username</strong></label><input id="username-input" class="form-control" type="text" placeholder="user.name" name="username"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Email Address</strong></label><input id="email-input" class="form-control" type="email" placeholder="user@example.com" name="email"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="firstname"><strong>First Name</strong></label><input  id="firstname-input" class="form-control" type="text" placeholder="John" name="firstname"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="lastname"><strong>Last Name</strong></label><input id="lastname-input" class="form-control" type="text" placeholder="Doe" name="lastname"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">

                                              <div class="col">
                                                  <div class="form-group"><label for="address"><strong>Address</strong></label><textarea id="address-input" class="form-control" type="text" placeholder="Address" name="address"></textarea></div>
                                              </div>
                                              <div class="col">
                                                  <div class="form-group"><label for="address"><strong>Contact</strong></label><input id="contact-input" class="form-control" type="text" name="contact" placeholder="Contact Number" ></input></div>
                                              </div>
                                            </div>
                                            <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" id="update-profile">Save Profile</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                          <div class="container">
                                <h4 class="text-primary">My Post</h4>
                                <div class="row justify-content-center mb-3" id="no-post-label">

                                </div>
                                <div class="row justify-content-left mb-5 ml-3">
                                  <?php $uid = $_GET['uid'];?>
                                  <a href="post-form?uid=<?=$uid?>" class="btn align-center btn-primary" name="button">Create Post</a>
                                </div>
                                <div class="" id="post-list">

                                </div>
                          </div>
                        </div>
                    </div>
                </div>

            </div>
<?php include('components/footer.php')?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js?h=a600b8e7e9619265383470da5f98b4f6"></script>
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function() {
          read_profile(<?=$uid?>);
          read_user_post(<?=$uid?>);
      });

    </script>
    <script src="js/profile.js" charset="utf-8"></script>

</body>

</html>
