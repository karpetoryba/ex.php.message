<?php
session_start();
require_once 'parts/header.php';

?>

<form method="POST" class="card p-3 col-4" action="/scripts/create-post.php">
  <div class="form-group">
    <label for="username">username</label>
    <input name="nom" type="text" class="form-control" id="username" placeholder="username">
  </div>
  <div class="form-group">
    <label for="email"></label>
    <input name="email" type="text" class="form-control" id="email" placeholder="email">
  </div>
  <div class="form-group">
    <label for="message">message</label>
    <input name="steps" type="text" class="form-control" id="message" placeholder="message">
  </div>
  <input name="id" type="hidden">
  <button type="submit" class="btn btn-primary">Soumettre</button>
</form>

<?php require_once 'parts/footer.php' ?>