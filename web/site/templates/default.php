<?php snippet('header') ?>
  <div id="container">
    <main>
      <h1 class="title"><?= $page->title() ?></h1>

      <?= $page->text()->kirbytext() ?>
    </main>
  </div>
<?php snippet('footer') ?>