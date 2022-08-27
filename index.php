<?php

include_once 'geometry/geometry/php';
include_once 'geometry/rectangle.php';
include_once 'geometry/Square.php';

$params = [
    'figure' => $_GET['figure']
];

$figure = new $params['figure']();

echo $figure;