<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "vennelst";

$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset ($_GET['keyword'])) {
  $keyword = $db->escape_string($_GET['keyword']);
  $query = $db->query("
      SELECT firstname, lastname
      FROM friend
      WHERE firstname LIKE '%{$keyword}%'
      OR lastname LIKE '%{$keyword}%'
  ");
  if($query->num_rows) {
    while($r = $query->fetch_object()) {
  $result = $conn->query($sql);
       while($row = $result->fetch_assoc()) {
        $name = $row['firstname'];
        $lastname = $row['lastname'];
        $birth = $row['birth'];
      }
      }
    }
 }
 ?>
