<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $mysqli = new mysqli("mysql.eecs.ku.edu", "a183b923", "wi4joomi", "a183b923");
  $user = $_POST["users"];

  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  echo $user . "'s Posts";

    echo "<table border=1 ><tr><th>Post Number</th><th>Content</th>";

  $query = "SELECT * FROM Posts WHERE author_id='$user';";
  if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["post_id"] . "</td><td>" . $row["content"];
    }
  }
  else {
    printf("ERROR: %s \n", $mysqli->error);
  }

  $result->free();


  $mysqli->close();
  ?>
