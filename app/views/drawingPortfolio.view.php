<?php include('partials-front/header.php'); ?>
  <body>
  <div class="site-wrap">
    <?php include('partials-front/navbar.php'); ?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Начало</a> <span class="mx-2 mb-0">/</span><a href="<?=ROOT?>/portfolio">Портфолио</a> <span class="mx-2 mb-0">/</span>  <strong class="text-black">Брезова гора</strong></div>
        </div>
      </div>
    </div> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?=ROOT?>/assets/images/<?=$drawing->image_name?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?=$drawing->name?></h2>
            <p><?=$drawing->description?></p>

            <i><b>Размери: <?=$drawing->size?></b></i> 
            <br>
            <i><b>Бои: <?=$drawing->paints?></b></i> 

            <p><strong class="text-primary h4"><?=$drawing->price?> лв.</strong></p>
            <p>Направете запитване за поръчка.
            <br>Или се обадете на следния телефон: +359 81 111 1111</p>
              <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_fname" class="text-black">Име <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_fname" name="c_fname">
                    </div>
                    <div class="col-md-6">
                      <label for="c_lname" class="text-black">Фамилия <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_lname" name="c_lname">
                    </div>
              </div>

              <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_email" class="text-black">Имейл <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                    </div>
              </div>

            <p><a href="cart.html"><input type="submit" class="buy-now btn btn-sm btn-info" value="Направи запитване "></a></p>
          </div>
        </div>
      </div>
    </div>

    <?php include('partials-front/artworks-carousel.php'); ?>
    <?php include('partials-front/footer.php'); ?>

  </div>

  <?php include('partials-front/scripts.php'); ?>
    
  </body>
</html>