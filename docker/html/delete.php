<?php
include('db_setup.php');

$id = $_GET[id];

$sql = "DELETE FROM board WHERE id=$id";

if ($conn->query($sql)) {
  echo 'Deleted';
} else {
  header("HTTP/1.1 404 Not Found");
  echo $conn->error;
}

$conn->close();
?>