<?php require "view/components/head.php" ?>
<?php require "view/components/navbar.php" ?>


<h1>Create a Post</h1>

<form method="POST">
  <label>Title:
    <input name="title" value="<?= $_POST["title"] ?? "" ?>"/>
    <?php if (isset($errors["title"])) {?>
    <p><?= $errors["title"] ?></p>
    <?php } ?>
  </label>
  <label>
    <span>Category ID:</span>
    <select name="category_id">
      <option value="1">sport</option>
      <option value="2">music</option>
      <option value="3">food</option>
    </select>
    <?php if (isset($errors["category_id"])) { ?>
      <p><?= $errors["category_id"] ?></p>
      <?php } ?>
  </label>
  <button>Save</button>
</form>
