<?php
require_once 'db.php'
if (isset ($_GET['keyword'])) {
  $keyword = $db->escape_string($_GET['keyword']);
  $query = $db->query("
      SELECT firstname, lastname
      FROM friend
      WHERE firstname LIKE '%{$keyword}%'
      OR lastname LIKE '%{$keyword}%'
  ");
  ?>

<div class="result-count">
   Found<?php echo $->num_rows; ?>
</div>

  <?php
  if($query->num_rows) {
    while($r = $query->fetch_object()) {
      ?>
   }
  }
