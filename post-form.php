<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - HomePortal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

</head>

<body>
    <?php include('components/user-menu-nav.php');?>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Create Post</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>

                <?php
                error_reporting(0);
                $uid = $_GET['uid'];?>
                <form id="post-form" action="api/post/insert-post.php" method="POST">
                    <input type="text" name="user_id" value="<?=$uid?>" readonly hidden>
                    <div class="form-group"><label for="username">Property Name</label><input class="form-control item" name="title" type="text" id="username" required></div>
                    <div class="form-group"><label for="password">Price (PHP)</label><input class="form-control" name="price" type="text" id="password" required></div>
                    <div class="form-group"><label for="password">Home address</label><input class="form-control" name="address" type="text" id="password" required></div>
                    <div class="form-group"><label for="password">Description</label><textarea class="form-control" name="Description" type="text" id="password" required></textarea></div>
                    <div class="form-group">
                      <label for="password">Type</label><br>
                      <select class="form-control" name="type">
                        <option value="Rent">Rent</option>
                        <option value="Rent-To-Own">Rent To Own</option>
                        <option value=For-Sale"">For Sale</option>
                      </select>
                    </div>
                    <label for="">Upload Image</label>
                    <div class="custom-file">
                      <input type="file" name="image_path"class="custom-file-input" id="validatedCustomFile" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choose file for Image</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    <div class="form-group">

                    </div><button class="btn btn-primary btn-block" style="width: 40%;" type="submit">Post</button>
                  </form>
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
