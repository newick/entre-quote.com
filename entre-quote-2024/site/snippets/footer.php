    <footer>
      <?php $menu = $site->footerNav()->toPages(); ?>

      <nav class="footer-nav">
        <ul>
          <?php foreach ($menu as $menuItem): ?>
              <li>
                <a <?php e($menuItem->isOpen(), 'aria-current="page"') ?> href="<?= $menuItem->url() ?>">
                  <?= $menuItem->title() ?>
                </a>
              </li>
          <?php endforeach ?>        
        </ul>
      </nav>
    </footer>
  </body>
</html>