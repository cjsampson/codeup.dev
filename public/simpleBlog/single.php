<?php 

require 'functions.php';

use Blog\DB;

// Connect to the db
$conn = DB\connect($config);
if ( !$conn ) die('Problem connecting to the db.');

// Fetch all the posts
$post = DB\query('SELECT * FROM posts WHERE id = :id LIMIT 1',
				  array('id' => $_GET['id']), 
				  $conn)[0];

// Filter through and display in the view
$view_path = 'views/index.view.php';
include 'views/layout.php';


