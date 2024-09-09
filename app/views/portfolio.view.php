<?php include('partials-front/header.php'); ?>
  <body>
  
  <div class="site-wrap">
    <?php include('partials-front/navbar.php'); ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Начало</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Портфолио</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-12 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Портфолио - всички</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                  <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Сортиране</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Име, А до Я</a>
                      <a class="dropdown-item" href="#">Име, Я до А</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Цена, възходяща</a>
                      <a class="dropdown-item" href="#">Цена, низходяща</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">

              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.html"><img src="<?=ROOT?>/assets/images/test_draw.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html">Брезова гора test</a></h3>
                    <p class="mb-0">Размери: 25см / 34см</p>
                    <p class="text-primary font-weight-bold">100 лв.</p>
                  </div>
                </div>
              </div>

              <?php     
                 $countRows = count($drawingArr);
                 for($i = 0; $i < $countRows; $i++){
                     //show($drawingArr[$i]['name']);
                     ?>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                  <div class="block-4 text-center border">
                    <figure class="block-4-image">
                      <a href="<?=ROOT?>/portfolio/drawingPortfolio?id=<?=$drawingArr[$i]['id']?>"><img src="<?=ROOT?>/assets/images/<?=$drawingArr[$i]['image_name']?>" alt="Image placeholder" class="img-fluid"></a>
                    </figure>
                    <div class="block-4-text p-4">
                      <h3><a href="<?=ROOT?>/portfolio/drawingPortfolio"><?=$drawingArr[$i]['name']?></a></h3>
                      <p class="mb-0">Размери: <?=$drawingArr[$i]['size']?></p>
                      <p class="text-primary font-weight-bold"><?=$drawingArr[$i]['price']?> лв.</p>
                    </div>
                  </div>
                </div>
            <?php } ?>

            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>

        
        
      </div>
    </div>

    <?php include('partials-front/artcategories.php'); ?>
    <?php include('partials-front/footer.php'); ?>
  </div>

  <?php include('partials-front/scripts.php'); ?>
    
  </body>
</html>