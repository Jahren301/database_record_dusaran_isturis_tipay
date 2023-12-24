<?php
require_once "db.php";

$record_id = $_GET['record_id'];

$sql = "DELETE FROM club_organization_tbl WHERE club_id = '$record_id'";
$result = $connect->query($sql);
echo '<meta http-equiv="refresh" content="0; url=readorg.php">';

?>