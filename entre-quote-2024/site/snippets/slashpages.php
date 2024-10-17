<aside>
  <h3>Mes <span>slashpages</span></h3>
 <ul>
    <?php foreach($kirby->collection('slashpages') as $page):?>
      <li>
      <a href="<?= $page->url() ?>"><?= $page->title()->html() ?></a>
      </li>
    <?php endforeach ?>
  </ul>

  <p>Liste trouvée sur <a href="https://slashpages.net/">Slashpages</a></p>
</aside>