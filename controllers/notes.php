<?php

// connector to mySQL Database
$config = require 'config.php';
$db = new Database( $config['database'] );

$heading = 'My Notes';


$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->fetchALL();



require "./views/notes.view.php";