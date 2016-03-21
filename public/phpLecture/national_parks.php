<?php
require '../../configuration.php';
require_once '../../db_connect.php';
require_once '../../input.php';

$limit  = 4;
$offset = 0;
$page = 1;
if(Input::has('page')){
    $page = Input::get('page');
    $offset = $page * $limit - $limit;
}

$stmt   = $dbc->query("SELECT * FROM national_parks limit {$limit} offset {$offset}");
$parks  = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt   = $dbc->query("SELECT COUNT(*) FROM national_parks");
$parksFullDataBase  = $stmt->fetchColumn();

$totalPages = $parksFullDataBase / $limit;

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/">
        <meta charset="utf-8">
        <title>Parks Index</title>
    </head>
    <body>
         <?php foreach ($parks as $park): ?>
            <h1> <a href="parks_show.php?park_id=<?=$park['id'] ?>"> <?= $park['name']?></a>
            </h1>
            <h3><?= $park['location']?></h3>
         <?php endforeach; ?>
         <?php if ($page > 1) { ?>
             <a href="national_parks.php?page=<?=$page - 1 ?>">Previous</a>
         <?php } ?>
         <?php if ($page<= $totalPages) { ?>
              <a href="national_parks.php?page=<?=$page + 1 ?>">Next</a>
         <?php } ?>

        <script src="/js/jquery-1.12.0.js"></script>
        <script src="/js/"></script>
    </body>
</html>
