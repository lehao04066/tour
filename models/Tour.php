<?php
class Tour {
    private $conn;
    private $table = "tour";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT t.id, t.ten_tour, t.mo_ta, t.hinh_anh, d.ten AS danh_muc
                  FROM tour t
                  LEFT JOIN danh_muc_tour d ON t.danh_muc_id = d.id
                  ORDER BY t.id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
}
