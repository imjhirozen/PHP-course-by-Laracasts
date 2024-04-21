<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

<main>
  <div>
    <a href="/notes" class="p-3 fs-2 bg-dark mt-2 link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"> GO BACK </a>
  </div>
  <div class="p-3 mb-2 bg-dark text-white fs-3">
    <p><?= $note['body'] ?></p>  
  </div>
</main>

<?php require('partials/footer.php'); ?>

