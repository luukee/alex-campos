<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This intro snippet is reused in multiple templates.
  While it does not contain much code, it helps to keep your
  code DRY and thus facilitate maintenance when you have
  to make changes.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<header class="h1 text-zinc-900 dark:text-white">
  <h1><?= $page->headline()->or($page->title())->esc() ?></h1>
  <?php if ($page->subheadline()->isNotEmpty()) : ?>
    <p class="text-zinc-700 dark:text-zinc-400"><?= $page->subheadline()->esc() ?></p>
  <?php endif ?>
</header>