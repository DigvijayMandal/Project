<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Building Permit</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>
  </head>
  <body>

<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
          <h1> <a class="navbar-brand" href="index.php">
                  <span class="fa fa-home"></span> Building Permit
              </a></h1>
          <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-lg-5 mr-auto">
                  <li class="nav-item @@home__active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="listing.php">Listing</a>
                  </li>
                  <li class="nav-item @@about__active">
                      <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./Login/index.php">Sign in</a>
                </li>
              </ul>
              <div class="top-quote mt-lg-0">
                  <a href="#buytheme" class="btn btn-style btn-primary"><span class="fa fa-home"></span> Add
                      sites</a>
              </div>
              <!--/search-right-->
              <div class="search mx-3">
                  <input class="search_box" type="checkbox" id="search_box">
                  <label class="fa fa-search" for="search_box"></label>
                  <div class="search_form">
                      <form action="error.html" method="GET">
                          <input type="text" placeholder="Search"><input type="submit" value="search">
                      </form>
                  </div>
              </div>
              <!--//search-right-->
          </div>

          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
<!--/header-->
<?php
shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['new_phones_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about pt-5">
        <div class="container pt-lg-5 py-3">
        </div>
    </div>
</section>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Listing</li>
        </ul>
    </div>
</section>
<section class="locations-1" id="locations">
    <div class="locations py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
            <?php foreach ($product_shuffle as $item) { ?>
                <div class="col-lg-4 col-md-6 listing-img mt-5 pt-md-2">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>">
                        <div class="box16">
                            <div class="rentext-listing-category"><span>Buy</span></div>
                            <img class="img-fluid" src="<?php echo $item['pic'] ; ?>" alt="">
                            <div class="box-content">
                                <h3 class="title">$ <?php echo $item['price'] ; ?>.00</h3>

                            </div>
                        </div>
                    </a>
                    <div class="listing-details blog-details align-self">
                        <h4 class="user_title agent">
                            <a href="#url"><?php echo $item['name'] ; ?></a>
                        </h4>
                        <p class="user_position"><?php echo $item['release1'] ; ?></p>
                        <div class="author align-items-center mt-4">
                            <ul class="blog-meta">
                                <li>
                                    <a href="#url"><?php echo $item['sell'] ; ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } // closing foreach function ?>
            </div>

            <!-- pagination -->
            <div class="pagination-wrapper mt-5 pt-lg-3 text-center">
                <ul class="page-pagination">
                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                    <li><a class="page-numbers" href="./listing1.php">2</a></li>
                    <li><a class="page-numbers" href="#url">3</a></li>
                    <li><a class="page-numbers" href="#url">...</a></li>
                    <li><a class="page-numbers" href="#url">6</a></li>
                    <li><a class="next" href="./listing1.php">Next <span class="fa fa-angle-right"></span></a></li>
                </ul>
            </div>
            <!-- //pagination -->
        </div>
    </div>
</section>
 <!-- footers 20 -->
 <section class="w3l-footers-20">
  <div class="footers20">
    <div class="container">
      <div class="footers20-content">
        <div class="d-grid grid-col-4 grids-content">
          <div class="column">
            <a href="#url" class="link"><span class="fa fa-comments"></span></a>
            <a href="#url" class="title-small">Free consultation</a>
            <h4>Schedule a free consultation with our specialist.</h4>
            <a href="#buytheme" class="btn btn-style btn-primary"> Schedule now
              <span class="fa fa-long-arrow-right ml-2"></span> </a>
          </div>
          <div class="column">
            <a href="#url" class="link"><span class="fa fa-phone"></span></a>
            <a href="#url" class="title-small">help desk</a>
            <h4>Do you have questions or want more infomation? Call Now</h4>
            <a href="tel:+1-2345-678-11">
              <p class="contact-phone mt-2"><span class="lnr lnr-phone-handset"></span> +1-2345-678-11
              </p>
            </a>
          </div>
          <div class="column mt-lg-0 mt-md-5">
            <h4 class="mb-1">Signup for newsletter</h4>
            <p>and get latest news and updates</p>
            <form action="#" class="subscribe-form mt-4" method="post">
              <div class="form-group">
                <input type="email" name="subscribe" placeholder="Enter your email" required="">
                <button class="btn btn-style btn-primary">Subscribe</button>
              </div>
            </form>
            <ul class="footers-17_social">
              <h4 class="d-inline mr-4">Follow us</h4>
              <li><a href="#url" class="twitter"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#url" class="facebook"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#url" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#url" class="instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="d-grid grid-col-3 grids-content1 bottom-border">
          <div class="columns copyright-grid align-self">
            <p class="copy-footer-29">?? 2021 Building Permit. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>

<!-- jQuery and Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- owlcarousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for blog post slider -->
<script>
  $(document).ready(function () {
    $('.owl-blog').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        700: {
          items: 1,
          nav: true
        },
        1090: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for blog post slider -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      nav: false,
      margin: 50,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- MENU-JS -->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!-- //MENU-JS -->

<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>