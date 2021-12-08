<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $mysqli = new mysqli("mysql.eecs.ku.edu", "a183b923", "wi4joomi", "a183b923");

  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $query = "SELECT * FROM Users;";
  if ($result = $mysqli->query($query)) {
    echo "<table><th>USERS</th>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["user_id"] . "</td>";
    }
  }
  else {
    printf("ERROR: %s \n", $mysqli->error);
  }

  $result->free();


  $mysqli->close();
  ?>
