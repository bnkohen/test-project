<?php
$json = file_get_contents('cars.json');


if (!$json) {
    die('No data found');
}

$data = json_decode($json, true);

if (!isset($_GET['sortBy']) || !in_array($_GET['sortBy'], ['price'])) {
    die('Invalid sort by field');
}

if (!isset($_GET['order']) || !in_array($_GET['order'], ['asc', 'dsc'])) {
    die('Invalid sort by field');
}

if ($_GET['sortBy'] === 'price') {
    $_GET['order'] === 'asc' ?
        usort($data, function ($a, $b) {
            return $a['price'] - $b['price'];
        }) : usort($data, function ($a, $b) {
            return $b['price'] - $a['price'];
        });
}

require 'components/header.php';
require 'components/table.php';
require 'components/footer.php';
