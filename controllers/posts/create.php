<?php

require "Validator.php";
require "Database.php";
$config = require "config.php";
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = [];
  $title = $_POST["title"];
  if (!Validator::string($title, max: 255)) {
    $errors["title"] = "Nedrīkst būt mazs vai liels";
  }

  $max_category_id = $db->execute("SELECT MAX(id) FROM categories;", [])->fetch()["MAX(id)"];
  if ($_POST["category_id"] > $max_category_id) {
    $errors["category_id"] = "Nav atbilstošas kategorijas";
  }

  if (empty($errors)) {
    $query = "INSERT INTO posts (title, category_id)
              VALUES (:title, :category_id)";
    $params = [
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category_id"]
    ];
    $db->execute($query, $params);
    header("Location: /");
    die();
  }
}
$page_title = "Create a Post";
require "view/posts/create.view.php";

