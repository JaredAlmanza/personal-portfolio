<?php
include("functions.php");
$dblink = db_connect("contact_data");

$sql = "SELECT first_name, last_name, email, phone, comments FROM contact_info ORDER BY auto_id DESC";
$result = $dblink->query($sql) or
    die("<h2>Something went wrong with:<br>$sql<br>".$dblink->error.'</h2>');

while ($data = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td><p>'.$data['first_name'].'</p></td>';
    echo '<td><p>'.$data['last_name'].'</p></td>';
    echo '<td><p>'.$data['email'].'</p></td>';
    echo '<td><p>'.$data['phone'].'</p></td>';
    echo '<td><p>'.$data['comments'].'</p></td>';
    echo '</tr>';
}
?>
