<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - HomePortal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body>
    <?php include('components/user-menu-nav.php')?>
    <main class="page blog-post-list">
        <?php $uid = $_GET['uid'];?>
        <input type="text" id="uid" value="<?=$uid?>" readonly hidden>
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="">
                          <h3 class="text-info float-left">Search</h3>
                            <div class="form-group">
                                <input type="search" id="search-keyword" class="form-control" name="" value="">
                            </div>
                            <div class="form-group">
                              <label for="#select-filter" class="text-secondary float-left">Property Type : </label><br>
                              <select class="form-control" style="width:50%" name="" id="select-filter">
                                <option value="All">All</option>
                                <option value="Rent">Rent</option>
                                <option value="Rent To Own">Rent To Own</option>
                                <option value="For Sale">For Sale</option>
                              </select>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-12" id="post-list">

                </div>

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
    <script src="js/fetch-post.js" charset="utf-8"></script>
</body>

</html>
