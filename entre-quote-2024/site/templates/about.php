<?php snippet('header') ?>

  <main id="content">
    <section>
      <h1><?= $page->title() ?></h1>
      <?= $page->text()->kirbytext() ?>
    </section>

    <?php snippet('slashpages') ?>
  </main>

<?php snippet('footer') ?>