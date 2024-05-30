<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Érick Gardin, intégrateur web</title>

    <?= css('assets/css/styles.css') ?>
  </head>

  <body>
    <a href="#content">Aller au contenu principal</a>

    <header>
      <a href="<?= $site->url() ?>" class="logo">entre-quote</a>

      <?php $menu = $site->mainNav()->toPages(); ?>

      <nav class="main-nav">
        <ul>
          <?php foreach ($menu as $menuItem) : ?>
            <li>
              <a <?php e($menuItem->isOpen(), 'aria-current="page"') ?> href="<?= $menuItem->url() ?>">
                <?= $menuItem->title() ?>
              </a>
            </li>
          <?php endforeach ?>        
        </ul>
      </nav>
    </header>