<section class="whats-news-area pt-50 pb-20 gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="whats-news-wrapper">
          <!-- Heading & Nav Button -->
          <div class="row justify-content-between align-items-end mb-15">
            <div class="col-xl-4">
              <div class="section-tittle mb-30">
                <h3>What's New</h3>
              </div>
            </div>
            <div class="col-xl-8 col-md-9">
              <div class="properties__button">
                <!--Nav Button  -->
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <?php foreach ($categories as $category) : ?>
                      <a class="nav-item nav-link <?= strtolower($category->category) == 'fashion' ? 'active' : ''; ?>" id="nav-<?= strtolower(str_replace(" ", "_", "$category->category")) ?>-tab" data-toggle="tab" href="#nav-<?= strtolower(str_replace(" ", "_", "$category->category")) ?>" role="tab" aria-controls="nav-<?= strtolower(str_replace(" ", "_", "$category->category")) ?>" aria-selected="<?= 'fashion' == 'fashion' ? 'true' : 'false'; ?>"><?= $category->category; ?></a>
                    <?php endforeach ?>
                  </div>
                </nav>
                <!--End Nav Button  -->
              </div>
            </div>
          </div>

          <!-- Tab content -->
          <div class="row">
            <div class="col-12">
              <!-- Nav Card -->
              <div class="tab-content" id="nav-tabContent">

                <!-- Fashion Tab -->
                <?php foreach ($postsTab as $tab) : ?>
                  <?php dd(array_keys($tab))  ?>
                  <div class="tab-pane fade <?= array_keys($tab) === 0 ? 'show active' : ''; ?>" id="nav-<?= array_keys($tab); ?>" role="tabpanel" aria-labelledby="nav-<?= array_keys($tab); ?>-tab">
                    <div class="row">

                      <!-- Left Details Caption -->
                      <div class="col-xl-6 col-lg-12">
                        <?php if (array_keys($tab)) : ?>
                          <?php foreach (array_slice($tab, 0, 1) as $news) : ?>
                            <div class="whats-news-single mb-40 mb-40">
                              <div class="whates-img">
                                <img src="<?= $news->post_image == null ? 'https://source.unsplash.com/random/800x800/?fashion' : $news->post_image; ?>" alt="">
                              </div>
                              <div class="whates-caption">
                                <h4><a href="<?= site_url('detail/' . $news->slug); ?>"><?= $news->title; ?></a></h4>
                                <span>by <?= $news->name; ?> - <?= date('d M Y', strtotime($news->published_at)); ?></span>
                                <p><?= $news->excerpt; ?>...</p>
                              </div>
                            </div>
                          <?php endforeach ?>
                        <?php else : ?>
                          <div class="whats-news-single mb-40 mb-40">
                            <div class="whates-caption">
                              <h4>No post yet</h4>
                            </div>
                          </div>
                        <?php endif ?>
                      </div>

                      <!-- Right single caption -->
                      <div class="col-xl-6 col-lg-12">
                        <div class="row">
                          <!-- single -->
                          <?php if (count($tab) > 1) : ?>
                            <?php foreach (array_slice($tab, 1, 4) as $news) : ?>
                              <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                <div class="whats-right-single mb-20">
                                  <div class="whats-right-img">
                                    <img src="<?= $news->post_image == null ? 'https://source.unsplash.com/random/800x800/?fashion' : $news->post_image; ?>" alt="">
                                  </div>
                                  <div class="whats-right-cap">
                                    <span class="<?= color(); ?>"><?= $news->category; ?></span>
                                    <h4><a href="<?= site_url('detail/' . $news->slug); ?>"><?= $news->title; ?></a></h4>
                                    <p><?= date('d M Y', strtotime($news->published_at)); ?></p>
                                  </div>
                                </div>
                              </div>
                            <?php endforeach ?>
                          <?php else : ?>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                              <div class="whats-right-single mb-20">
                                <div class="whats-right-cap">
                                  <h4>No more post</h4>
                                </div>
                              </div>
                            </div>
                          <?php endif ?>
                        </div>
                      </div>
                    </div>

                  </div>
                <?php endforeach ?>
                <!-- End Nav Card -->
              </div>
            </div>
          </div>

          <!-- Banner -->
          <!-- <div class="banner-one mt-20 mb-30">
            <img src="<?= base_url(); ?>/blog/img/gallery/body_card1.png" alt="">
          </div> -->
        </div>
      </div>

      <div class="col-lg-4">
        <!-- Flow Socail -->
        <div class="single-follow mb-45">
          <div class="single-box">
            <div class="follow-us d-flex align-items-center">
              <div class="follow-social">
                <a href="#"><img src="<?= base_url(); ?>/blog/img/news/icon-fb.png" alt=""></a>
              </div>
              <div class="follow-count">
                <span>8,045</span>
                <p>Fans</p>
              </div>
            </div>
            <div class="follow-us d-flex align-items-center">
              <div class="follow-social">
                <a href="#"><img src="<?= base_url(); ?>/blog/img/news/icon-tw.png" alt=""></a>
              </div>
              <div class="follow-count">
                <span>8,045</span>
                <p>Fans</p>
              </div>
            </div>
            <div class="follow-us d-flex align-items-center">
              <div class="follow-social">
                <a href="#"><img src="<?= base_url(); ?>/blog/img/news/icon-ins.png" alt=""></a>
              </div>
              <div class="follow-count">
                <span>8,045</span>
                <p>Fans</p>
              </div>
            </div>
            <div class="follow-us d-flex align-items-center">
              <div class="follow-social">
                <a href="#"><img src="<?= base_url(); ?>/blog/img/news/icon-yo.png" alt=""></a>
              </div>
              <div class="follow-count">
                <span>8,045</span>
                <p>Fans</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Most Recent Area -->
        <div class="most-recent-area">
          <!-- Section Tittle -->
          <div class="small-tittle mb-20">
            <h4>Most Recent</h4>
          </div>
          <!-- Details -->
          <div class="most-recent mb-40">
            <div class="most-recent-img">
              <img src="<?= base_url(); ?>/blog/img/gallery/most_recent.png" alt="">
              <div class="most-recent-cap">
                <span class="bgbeg"><?= $newest[0]->category; ?></span>
                <h4><a href="<?= site_url('detail/' . $newest[0]->slug); ?>"><?= $newest[0]->title; ?></a></h4>
                <p><?= $newest[0]->name; ?> | <?= date('d M Y', strtotime($newest[0]->published_at)); ?></p>
              </div>
            </div>
          </div>
          <!-- Single -->
          <?php foreach (array_slice($newest, 1, 2) as $news) : ?>
            <div class="most-recent-single">
              <div class="most-recent-images">
                <img src="<?= $news->post_image ?>" alt="">
              </div>
              <div class="most-recent-capt">
                <h4><a href="<?= site_url('detail/' . $news->slug); ?>"><?= $news->title ?></a></h4>
                <p><?= $news->name; ?> | <?= date('d M Y', strtotime($news->published_at)); ?></p>
              </div>
            </div>
          <?php endforeach ?>
          <!-- Single -->
        </div>
      </div>
    </div>
</section>