<?php

namespace App\Controllers;


class Api extends BaseController {
    protected $db;
    function __construct() {
        $this->db = db_connect();
    }

    public function brands() {
        $data = $this->db->query("SELECT * from brands")->getResult();
        echo $this->print_data($data);
        exit;
    }

    public function brand_products(int $brand_id) {
        // 
    }
}
