<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $page->metaDescription()->or($site->metaDescription()) ?>">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $page->metatitle()->or($page->title()) ?> | <?= $site->title() ?></title>
  <?= css('assets/css/bundle.css') ?>
  <?= js('assets/js/bundle.js') ?>

</head>
<body class="<?= $page->template(); ?><?= isset($class) ? ' ' . $class : null ?>">

  <?php snippet('topbar') ?>
