<?php 
  if (!isset($subpages)) $subpages = $site->children()->listed();
  $counter = 0;
  $depth = isset($depth) ? $depth : 99;

  if ($subpages->count() > 0):
?>
<ul>
  <?php if(isset($counter)) $counter++ ?>
  <?php foreach($subpages->listed() as $p): ?>
  <li class="depth-<?= $p->depth() ?>">
    <a <?php e($p->isActive(), 'class="active"') ?> href="<?= $p->url() ?>"><?= $p->title()->html() ?></a>
    <?php if($p->hasChildren() && $counter < $depth): ?>
    <?php snippet('treemenu', ['subpages' => $p->children()]) ?>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
<?php endif; ?>