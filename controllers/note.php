<?php
$heading = 'Note';
$config = require 'config.php';
$database = new Database($config['database']);

$id = $_GET['id'];

$note = $database->query('select * from notes where id = :id',['id' => $id])->fetch();

require "./views/note.view.php";
?>