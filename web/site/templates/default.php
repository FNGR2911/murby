<?php snippet('header')?>

<main>
  <h1 class="title">
    <?=$page->title()?>
  </h1>
  <div class="content">
    <?=$page->bodytext()->kirbytext()?>
  </div>
</main>

<?php snippet('footer')?>