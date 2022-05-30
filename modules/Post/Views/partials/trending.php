<div class="trending-area fix pt-25 gray-bg">
  <div class="container">
    <div class="trending-main">
      <div class="row">
        <div class="col-lg-8">
          <!-- Trending Top -->
          <div class="slider-active">
            <!-- Single -->
            <?php foreach (array_slice($newest, 0, 3) as $new) : ?>
              <div class="single-slider">
                <div class="trending-top mb-30">
                  <div class="trend-top-img">
                    <img src="<?= base_url(); ?>/blog/img/trending/trending_top2.jpg" alt="">
                    <div class="trend-top-cap">
                      <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms"><?= $new->category; ?></span>
                      <h2><a href="<?= site_url('detail/' . $new->slug); ?>" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms"><?= $new->title; ?></a></h2>
                      <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by <?= $new->name; ?> - <?= date('d M Y', strtotime($new->published_at)); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>

        <!-- Right content -->
        <div class="col-lg-4">
          <!-- Trending Top -->
          <div class="row">
            <?php foreach (array_slice($newest, 3) as $new) : ?>
              <div class="col-lg-12 col-md-6 col-sm-6">
                <div class="trending-top mb-30">
                  <div class="trend-top-img">
                    <img src="<?= base_url(); ?>/blog/img/trending/trending_top3.jpg" alt="">
                    <div class="trend-top-cap trend-top-cap2">
                      <span class="<?php bgCategory($new->category) ?>"><?= $new->category; ?></span>
                      <h2><a href="<?= site_url('detail/' . $new->slug); ?>"><?= $new->title; ?></a></h2>
                      <p>by <?= $new->name; ?> - <?= date('d M Y', strtotime($new->published_at)); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>