<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateExpenceTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'usigned'=>true,
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => ['type' => 'VARCHAR', 'constraint' => 100],
            'price' => ['type' => 'VARCHAR', 'constraint' => 80],
            'detail' => ['type' => 'VARCHAR', 'constraint' => 200],
            'category_id' => ['type' => 'INT', 'constraint' => 5],
            'created_at datetime default current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('expances');
    }

    public function down()
    {
        //
    }
}
