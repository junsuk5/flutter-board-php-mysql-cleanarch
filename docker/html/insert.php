<?php
include('db_setup.php');

$content = $_GET[content];

$sql = "INSERT INTO board (update_time, content) VALUES (CURRENT_TIMESTAMP(), '$content')";

if ($conn->query($sql) === TRUE) {
  echo 'Insert New Record';
} else {
  echo $conn->error;
}

$conn->close();
?>