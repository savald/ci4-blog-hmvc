<?= $this->extend('\Modules\Post\Views\layouts\main') ?>

<?= $this->section('content') ?>

<main>
  <!-- Trending in the Week Area Start -->
  <?= $this->include('\Modules\Post\Views\partials\trending'); ?>
  <!-- Trending Area End -->

  <!-- Whats New Start -->
  <!-- <?//= $this->include('\Modules\Post\Views\partials\new');  ?> -->
  <!-- Whats New End -->

  <!--   Weekly2-News start -->
  <!-- <? //= $this->include('\Modules\Post\Views\partials\weekly-news'); 
        ?> -->
  <!-- End Weekly-News -->

  <!--  Recent Articles start -->
  <!-- <?//= $this->include('\Modules\Post\Views\partials\recent'); ?> -->
  <!--Recent Articles End -->

  <!-- Start Video Area -->
  <!-- <? // = $this->include('\Modules\Post\Views\partials\video'); 
        ?> -->
  <!-- End Start Video area-->

  <!--   Weekly3-News start -->
  <!-- <? //= $this->include('\Modules\Post\Views\partials\weekly-news-2'); 
        ?> -->
  <!-- End Weekly-News -->

</main>

<?= $this->endSection() ?>