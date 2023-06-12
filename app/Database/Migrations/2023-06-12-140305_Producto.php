<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Producto extends Migration
{
    public function up()
    { $this->forge->addField([
        'ID'=>[
            'type'=>' INT',
            'auto_increment' => true,
            'null' => false
        ],
        'Nombre'=>[
            'type'=>' VARCHAR',
            'constraint' => 50,
            'null' => false
        ],        
        'Precio'=>[
            'type'=>' DECIMAL',
            'constraint' => 10.2,
            'null' => false
        ],
        'Descripcion'=>[
            'type'=>' VARCHAR',
            'constraint' => 50,
            'null' => false
        ],
        
        'Stock'=>[
            'type'=>'INT',
            'constraint' => 50,
            'null' => false
            ]
        ]);
           $this->forge->addKey('ID', true);
           $this->forge->createTable('Producto'); 
    }

    public function down()
    {
        $this->forge->dropTable('Producto');
    }
}
