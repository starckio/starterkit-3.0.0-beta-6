<?php snippet('header') ?>

<main class="one-pager">
  <?php snippet('intro') ?>
  <?php foreach ($page->children()->listed() as $section): ?>
  <section class="section <?= $section->intendedTemplate() ?>">
    <?php snippet(str_replace("one-pager-", "one-pager/", $section->intendedTemplate()), ['section' => $section]) ?>
  </section>
  <?php endforeach ?>
</main>

<?php snippet('footer') ?>
