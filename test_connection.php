<?php
require_once('db_config.php');

$db = new Database();

if ($db->connection) {
    echo "Connected to the database successfully!";
} else {
    echo "Failed to connect to the database.";
}
?>
