<?php include('partials-front/header.php'); ?>

  <body>
  
  <div class="site-wrap">
<?php include('partials-front/navbar.php'); ?>

    <div class="site-blocks-cover" style="background-image: url(<?=ROOT?>/assets/images/background-img.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2">Галерия - Елица Кръстева</h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla. </p>
              <p>
                <a href="#" class="btn btn-sm btn-primary">Купи сега</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include('partials-front/features.php'); ?>
    <?php include('partials-front/artcategories.php'); ?>
    <?php include('partials-front/artworks-carousel.php'); ?>
    <?php include('partials-front/footer.php'); ?>
  </div>

  <?php include('partials-front/scripts.php'); ?>
    
  </body>
</html>