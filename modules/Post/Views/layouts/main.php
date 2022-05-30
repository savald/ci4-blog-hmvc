<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $title; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/blog/img/favicon.ico">

  <!-- CSS here -->
  <link rel="stylesheet" href="<?= base_url(); ?>/blog/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/blog/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/blog/css/ticker-style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/blog/css/flaticon.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/blog/css/slicknav.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/blog/css/animate.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/blog/css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/blog/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/blog/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/blog/css/slick.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/blog/css/nice-select.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/blog/css/style.css">
</head>

<body>
  <?= $this->include('Post\Views\layouts\_header'); ?>
  <?= $this->renderSection('content') ?>
  <?= $this->include('Post\Views\layouts\_footer'); ?>

  <!-- Search model Begin -->
  <div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
      <div class="search-close-btn">+</div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Searching key.....">
      </form>
    </div>
  </div>

  <script src="<?= base_url(); ?>/blog/js/vendor/modernizr-3.5.0.min.js"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="<?= base_url(); ?>/blog/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="<?= base_url(); ?>/blog/js/popper.min.js"></script>
  <script src="<?= base_url(); ?>/blog/js/bootstrap.min.js"></script>
  <!-- Jquery Mobile Menu -->
  <script src="<?= base_url(); ?>/blog/js/jquery.slicknav.min.js"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="<?= base_url(); ?>/blog/js/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>/blog/js/slick.min.js"></script>
  <!-- Date Picker -->
  <script src="<?= base_url(); ?>/blog/js/gijgo.min.js"></script>
  <!-- One Page, Animated-HeadLin -->
  <script src="<?= base_url(); ?>/blog/js/wow.min.js"></script>
  <script src="<?= base_url(); ?>/blog/js/animated.headline.js"></script>
  <script src="<?= base_url(); ?>/blog/js/jquery.magnific-popup.js"></script>

  <!-- Scrollup, nice-select, sticky -->
  <script src="<?= base_url(); ?>/blog/js/jquery.scrollUp.min.js"></script>
  <script src="<?= base_url(); ?>/blog/js/jquery.nice-select.min.js"></script>
  <script src="<?= base_url(); ?>/blog/js/jquery.sticky.js"></script>

  <!-- contact js -->
  <script src="<?= base_url(); ?>/blog/js/contact.js"></script>
  <script src="<?= base_url(); ?>/blog/js/jquery.form.js"></script>
  <script src="<?= base_url(); ?>/blog/js/jquery.validate.min.js"></script>
  <script src="<?= base_url(); ?>/blog/js/mail-script.js"></script>
  <script src="<?= base_url(); ?>/blog/js/jquery.ajaxchimp.min.js"></script>

  <!-- Jquery Plugins, main Jquery -->
  <script src="<?= base_url(); ?>/blog/js/plugins.js"></script>
  <script src="<?= base_url(); ?>/blog/js/main.js"></script>

</body>

</html>