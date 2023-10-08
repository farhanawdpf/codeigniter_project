<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'product_id' => [
                'type' => 'INT',
                'usigned'=>true,
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'product' => ['type' => 'VARCHAR', 'constraint' => 200],
            'category' => ['type' => 'VARCHAR', 'constraint' => 200],
            'price' => ['bigint' => 'VARCHAR', 'constraint' => 200],
            'sku' => ['type' => 'VARCHAR', 'constraint' => 200],
            'model' => ['type' => 'VARCHAR', 'constraint' => 200],
            'created_at datetime default current_timestamp',
        ]);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        //
    }
}
