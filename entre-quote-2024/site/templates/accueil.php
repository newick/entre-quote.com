<?php snippet('header') ?>

  <main>
    <section class="intro">
      <?= $page->intro()->kirbytext() ?>
    </section>

    <section>
      <?php
        $items = $page->services()->toStructure();
        
        foreach ($items as $item): 
      ?>
        <h2><?= $item->service()->html() ?></h2>
      <?php endforeach ?>
    </section>
  </main>

<?php snippet('footer') ?>