<?php

require "Database.php";
$config = require "config.php";
$db = new Database($config);


    $query = "SELECT FROM posts WHERE id = :id";
    $params = [ ":id" => $_GET["id"]];
  
   $post= $db->execute($query, $params)->fetch();
   dd($post);

















require "view/posts/show.view.php";