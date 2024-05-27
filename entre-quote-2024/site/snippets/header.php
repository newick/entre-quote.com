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
      
      <nav class="main-nav">
        <ul>
          <?php foreach ($site->children()->listed() as $item): ?>
              <li>
                <a <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>">
                  <?= $item->title()->esc() ?>
                </a>
              </li>
          <?php endforeach ?>
        </ul>
      </nav>
    </header>