<?php
require_once "./models/Tour.php";

class TourController {
    public function index() {
        require_once "./config/Database.php";
        $database = new Database();
        $db = $database->connect();

        $tour = new Tour($db);
        $result = $tour->getAll();

        $tours = $result->fetchAll(PDO::FETCH_ASSOC);

        require_once "./views/tours/index.php";
    }
    
}
