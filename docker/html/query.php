<?php
include('db_setup.php');

$results = array();

$result = $conn->query("SELECT * FROM board");
while ($row = $result->fetch_array(MYSQLI_ASSOC)) { // 컬러명을 key로 사용
  $results[] = $row;
}
header('Content-type: application/json');
echo json_encode($results, JSON_NUMERIC_CHECK); // 숫자를 숫자로 자동 변환

$conn->close();
?>