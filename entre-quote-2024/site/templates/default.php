<?php snippet('header') ?>

  <main id="content">
    <h1><?= $page->title() ?></h1>
    <?= $page->text()->kirbytext() ?>
  </main>

<?php snippet('footer') ?>