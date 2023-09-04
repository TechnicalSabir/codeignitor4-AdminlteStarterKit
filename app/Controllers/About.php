<?php

namespace App\Controllers;

class About extends BaseController {
    public function index() {
        $db = db_connect();
        $data = $db->query("select * from brands")->getResult();
        echo "<pre>";
        print_r($data);
    }
}
