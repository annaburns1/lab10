<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $mysqli = new mysqli("mysql.eecs.ku.edu", "a183b923", "wi4joomi", "a183b923");

  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $userName = $_POST["userName"];
  $post = $_POST["post"];

  $query = "INSERT INTO Posts (content, author_id) VALUES ('$post','$userName')";
  if ($result = $mysqli->query($query)) {
    echo "Hello " . $userName . ", your post was successful!";
  }
  else {
    printf("POST NOT SAVED. ERROR: %s\n", $mysqli->error);
  }


  $mysqli->close();
  ?>
