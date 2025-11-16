<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'tour';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($controller == 'tour') {
    require_once "./controllers/TourController.php";
    $ctr = new TourController();
    $ctr->$action();
}
