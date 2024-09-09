<div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Нови картини</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="<?=ROOT?>/assets/images/test_draw_swan.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Лебедово езеро test</a></h3>
                    <p class="mb-0">Размери: 25см / 34см</p>
                    <p class="text-primary font-weight-bold">80 лв.</p>
                  </div>
                </div>
              </div>

              <?php
                 for($i = 0; $i < $carouselData['countRows']; $i++){
                  $drawingArr = $carouselData['drawingArr'];
                     //show($drawingArr[$i]['name']);
                     ?>
                <div class="item">
                  <div class="block-4 text-center">
                    <figure class="block-4-image">
                    <a href="<?=ROOT?>/artshop/drawing?id=<?=$drawingArr[$i]['id']?>"><img src="<?=ROOT?>/assets/images/<?=$drawingArr[$i]['image_name']?>" alt="Image placeholder" class="img-fluid"></a>
                    </figure>
                    <div class="block-4-text p-4">
                      <h3><a href="<?=ROOT?>/artshop/drawing?id=<?=$drawingArr[$i]['id']?>"><?=$drawingArr[$i]['name']?></a></h3>
                      <p class="mb-0">Размери: <?=$drawingArr[$i]['size']?></p>
                      <p class="text-primary font-weight-bold"><?=$drawingArr[$i]['price']?> лв.</p>
                    </div>
                  </div>
                </div>

            <?php } ?>
            
            </div>
          </div>
        </div>
      </div>
    </div>

        <!--
    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Big Sale!</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="#"><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2><a href="#">50% less in all items</a></h2>
            <p class="post-meta mb-4">By <a href="#">Carl Smith</a> <span class="block-8-sep">&bullet;</span> September 3, 2018</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iste dolor accusantium facere corporis ipsum animi deleniti fugiat. Ex, veniam?</p>
            <p><a href="#" class="btn btn-primary btn-sm">Shop Now</a></p>
          </div>
        </div>
      </div>
    </div>
    -->