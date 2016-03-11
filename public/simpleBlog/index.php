<?php 

require 'functions.php';
use Blog\DB;

// Connect to the db
$conn = DB\connect($config);

if ( !$conn ) die('Problem connecting to the db.');

/* Create a database/table in mysql 

/ CREATE DATABASE blog;
/ CREATE TABLE posts;
/ INSERT INTO posts(title, body) VALUES('TITLE 1', 'BODY 1');
/ INSERT INTO posts(title, body) VALUES('TITLE 2', 'BODY 2');

*/

// Fetch all the posts
$post = DB\get('posts', $conn);


// Filter through and display in the view
$view_path = 'views/index.view.php';
include 'views/layout.php';