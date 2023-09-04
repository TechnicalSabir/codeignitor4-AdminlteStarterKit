<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BrandProduction extends Migration {
    public function up() {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'status' => [
                'type' => 'tinyint',
                'constraint' => 1,
                'default' => 1,
                'comment' => "0=false, 1=true"
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('brands');
    }

    public function down() {
        $this->forge->dropTable('brands');
    }
}
