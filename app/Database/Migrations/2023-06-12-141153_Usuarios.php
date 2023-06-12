<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    { $this->forge->addField([
        'idUsuarios'=>[
            'type'=>' int',
            'auto_increment' => true,
            'null' => false
        ],
        'NameUsuarios'=>[
            'type'=>' varchar',
            'constraint' => 50,
            'null' => false
        ],        
        'ApUsuarios'=>[
            'type'=>' varchar',
            'constraint' => 50,
            'null' => false
        ],
        'emailUsuarios'=>[
            'type'=>' varchar',
            'constraint' => 50,
            'null' => false
        ],
        
        'passUsuarios'=>[
            'type'=>'varchar',
            'constraint' => 50,
            'null' => false
        ],
        
            'supperUsuarios'=>[
                'type'=>'varchar',
                'constraint' => 50,
                'null' => false
            ],
        ]);
           $this->forge->addKey('idUsuarios', true);
           $this->forge->createTable('Usuarios'); 
    }

    public function down()
    {
        $this->forge->dropTable('Usuarios');
    }
}
