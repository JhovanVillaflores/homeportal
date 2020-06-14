<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Post - HomePortal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <?php include('components/user-menu-nav.php'); $uid=$_GET['uid'];$post_id=$_GET['post_id'];?>
    <main class="page blog-post">
        <section class="clean-block clean-post dark">
            <div class="container">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="home?uid=<?=$uid?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="" id="post-page"></li>
                </ol>
              </nav>
                <div class="block-content">
                    <div class="post-image" id="post-image" ></div>
                    <div class="post-body">
                        <div id="post-title"></div>
                        <div class="post-info" id="post-info"><span>By John Smith</span><span>Jan 27, 2018</span></div>
                        <div id="post-description"></div>
                        <div id="post-Location"></div>
                        <div id="post-type"></div>
                        <div id="post-contact"></div>


                    </div>
                </div>
            </div>
        </section>
    </main>
  <?php  include('components/footer.php')?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js?h=a600b8e7e9619265383470da5f98b4f6"></script>
    <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
      read_single_post(<?=$uid?>,<?=$post_id?>)
    });

    </script>
    <script src="js/post.js"></script>
</body>

</html>
