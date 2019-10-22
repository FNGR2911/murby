<div id="container">
  <?php snippet('header') ?>
    <main>
      <h1 class="title"><?= $page->title() ?></h1>
      <?= $page->text()->kirbytext() ?>
    </main>
  <?php snippet('footer') ?>
</div>