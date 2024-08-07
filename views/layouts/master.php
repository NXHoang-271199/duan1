<!doctype html>
<html lang="en">


<!-- Mirrored from risingtheme.com/html/demo-grocee/grocee/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2024 07:30:13 GMT -->
<head>
  <meta charset="utf-8">
  <title>Grocee - Organic Food HTML Template</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="<?= BASE_URL ?>assets/client/assets/img/favicon.ico">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/assets/css/plugins/glightbox.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/assets/css/vendor/bootstrap.min.css">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/assets/css/style.css">
  

</head>

<body>

    <!-- Start preloader -->
        <!-- <?php require_once PATH_VIEW . 'components/preLoader.php'?> -->
    <!-- End preloader -->
     
    <?php $categoriesForMenu = listAll('categories')?>
    
    <!-- Start header area -->
        <?php require_once PATH_VIEW . 'layouts/partials/header.php' ?>
    <!-- End header area -->

    <!-- Main area -->
        <?php require_once PATH_VIEW . $view . '.php'?>
    <!-- End Main area -->
    

    <!-- Start footer section -->
    <?php require_once PATH_VIEW . 'layouts/partials/footer.php' ?>
    <!-- End footer section -->

    <!-- Quickview Wrapper -->
     
    <!-- Quickview Wrapper End -->

    <!-- Start News letter popup -->

    <!-- End News letter popup -->

     <!-- Scroll top bar -->
     <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
    
  <!-- All Script JS Plugins here  -->
   <script src="<?= BASE_URL ?>assets/client/assets/js/vendor/popper.js" defer="defer"></script>
   <script src="<?= BASE_URL ?>assets/client/assets/js/vendor/bootstrap.min.js" defer="defer"></script>
   <script src="<?= BASE_URL ?>assets/client/assets/js/plugins/swiper-bundle.min.js"></script>
   <script src="<?= BASE_URL ?>assets/client/assets/js/plugins/glightbox.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Customscript js -->
  <script src="<?= BASE_URL ?>assets/client/assets/js/script.js"></script>
  
</body>

<!-- Mirrored from risingtheme.com/html/demo-grocee/grocee/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2024 07:30:23 GMT -->
</html>