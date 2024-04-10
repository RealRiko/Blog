<?php require "view/components/head.php" ?>
<?php require "view/components/navbar.php" ?>

<form>
  <input name='id' value='<?= ($_GET["id"] ?? "") ?>'/>
  <button>Filter by ID</button>
</form>

<form>
  <input name='category' value='<?= ($_GET["category"] ?? "") ?>'/>
  <button>Filter by category</button>
</form>

<form>
  Category:
  <select name='category'>
    <option value='sport'>Sport</option>
    <option value='music'>Music</option>
    <option value='food'>Food</option>
  </select>
  <br>
  <button>Submit</button>
</form>

<h1>Posts</h1>

<ul>
<?php foreach($posts as $post) { ?>
  <li>
  <a href="/show?id=<?= ($post["id"])?><?= htmlspecialchars($post["title"])?>">
    <form class="delete-form" method="POST" action="/delete">
      <button name="id" value="<?= $post["id"] ?>">&times;</button>
    </form>
  </li>
<?php } ?>
</ul>



