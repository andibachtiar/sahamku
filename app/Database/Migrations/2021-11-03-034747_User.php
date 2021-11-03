<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'index' => 'UNIQUE'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'role' => [
                'type' => 'ENUM',
                'constraint' => ['admin', 'user'],
                'default' => 'user'
            ]
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
        //
    }
}
