<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "a183b923", "wi4joomi", "a183b923");

/* check connection */
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "CREATE TABLE Users (user_id varchar(255) NOT NULL , PRIMARY KEY (user_id)) ENGINE=INNODB;";
$query = "CREATE TABLE Posts (post_id int NOT NULL AUTO_INCREMENT, content TEXT NOT NULL, author_id varchar(255), PRIMARY KEY (post_id), FOREIGN KEY (author_id) REFERENCES Users(user_id)) ENGINE=INNODB;";



/* close connection */
$mysqli->close();
?>
