<?php
require_once "db.php";

$record_id = $_GET['record_id'];

$sql = "DELETE FROM achievement_tbl WHERE achievement_id = '$record_id'";
$result = $connect->query($sql);
echo '<meta http-equiv="refresh" content="0; url=readachie.php">';

?>