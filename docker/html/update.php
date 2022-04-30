<?php
include('db_setup.php');

$id = $_GET[id];
$content = $_GET[content];

$sql = "UPDATE board SET content='$content', update_time=CURRENT_TIMESTAMP WHERE id=$id";

if ($conn->query($sql)) {
  header("HTTP/1.1 200 OK");
  echo 'Updated';
} else {
  header("HTTP/1.1 400 Not Found");
  echo $conn->error;
}

$conn->close();
?>