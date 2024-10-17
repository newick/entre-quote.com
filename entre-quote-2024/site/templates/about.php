<?php snippet('header') ?>

  <main>
    <section>
      <h1><?= $page->title() ?></h1>
      <?= $page->text()->kirbytext() ?>
    </section>

    <?php snippet('slashpages') ?>
  </main>

<?php snippet('footer') ?>