<?php

require 'config.php';
require 'db_connect.php';

$stmt = $dbc->query('SELECT id, name, email FROM users');