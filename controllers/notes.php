<?php

// connector to mySQL Database
$config = require 'config.php';
$db = new Database( $config['database'] );

$heading = 'My Notes';


$notes = $db->query('SELECT * FROM notes')->fetchALL();    



require "./views/notes.view.php";