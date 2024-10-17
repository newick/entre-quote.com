<?php snippet('header') ?>

  <main>
    <section>
      <h1><?= $page->title() ?></h1>
      <p>Date de la dernière modification : <?= $page->date()->toDate('d/m/Y') ?></p>
      <?= $page->text()->kirbytext() ?>
    </section>

    <?php snippet('slashpages') ?>
  </main>

<?php snippet('footer') ?>