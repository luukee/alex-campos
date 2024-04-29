<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This footer snippet is reused in all templates.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
  </main>

  <footer class="footer">
    <div class="grid">
      <div class="column" style="--columns: 8">
        <h2 class="text-zinc-900 hover:text-zinc-950 dark:text-neutral-400 dark:hover:text-neutral-200"><a href="https://getkirby.com">Made with Kirby</a></h2>
        <p>
          Kirby: the file-based CMS that adapts to any project, loved by developers and editors alike
        </p>
        <?php snippet('themeSwitch') ?>
      </div>
      <div class="column" style="--columns: 2">
        <h2 class="text-zinc-900 dark:text-neutral-400">Pages</h2>
        <ul>
          <?php foreach ($site->children()->listed() as $example): ?>
            <li class="text-zinc-900 dark:text-neutral-500 dark:hover:text-neutral-200"><a href="<?= $example->url() ?>"><?= $example->title()->esc() ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="column" style="--columns: 2">
      <h2 class="text-zinc-900 dark:text-neutral-400">Kirby</h2>
        <ul>
        <li class="text-zinc-900 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"><a href="https://getkirby.com">Website</a></li>
        <li class="text-zinc-900 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"><a href="https://getkirby.com/docs">Docs</a></li>
        <li class="text-zinc-900 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"><a href="https://forum.getkirby.com">Forum</a></li>
        <li class="text-zinc-900 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"><a href="https://chat.getkirby.com">Chat</a></li>
        <li class="text-zinc-900 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"><a href="https://github.com/getkirby">GitHub</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <?= js([
    'assets/js/prism.js',
    'assets/js/lightbox.js',
    'assets/js/index.js',
    '@auto'
  ]) ?>

</body>
</html>
