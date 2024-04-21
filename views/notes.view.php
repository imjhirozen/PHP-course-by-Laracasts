<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

<main>
  <div class="p-3 mb-2 bg-dark text-white fs-3">
    <?php foreach($notes as $note) : ?>
      <li>
        <a href="/note?id=<?= $note['id'] ?>"> <?= $note['body'] ?> </a>
      </li>
    <?php endforeach; ?>
  </div>
</main>

<?php require('partials/footer.php'); ?>

