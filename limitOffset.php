<?php 

// All of the national parks in both indexed and associative array
// echo '<pre>';
// print_r($stmt->fetchAll(PDO::FETCH_BOTH));
// echo '</pre>';

$page = (Input::has('page')) ? Input::get('page') : 1;
$limit = 4;
$offset = ($page * $limit) - $limit;


// Query to LIMIT results for view
$stmt = $dbc->prepare("SELECT * FROM national_parks LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

// Associate Array of Parks
$nationalParks = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Total Parks
$stmt = $dbc->query("SELECT COUNT(*) FROM national_parks");
$totalParks = $stmt->fetchColumn();



?>