<?php
$heading = 'Notes';
$config = require 'config.php';

$database = new Database($config['database']);

$notes = $database->query('select * from notes where user_id = 3')->fetchAll();


require "./views/notes.view.php";
?>