<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BobotPerbankan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bobot' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'car' => [
                'type' => 'INT',
                'constraint' => 5,
                'default' => 30
            ],
            'nim' => [
                'type' => 'INT',
                'constraint' => 5,
                'default' => 24
            ],
            'npm' => [
                'type' => 'INT',
                'constraint' => 5,
                'default' => 18
            ],
            'ldr' => [
                'type' => 'INT',
                'constraint' => 5,
                'default' => 14
            ],
            'eps' => [
                'type' => 'INT',
                'constraint' => 5,
                'default' => 14
            ]
        ]);
        $this->forge->addPrimaryKey('id_bobot');
        $this->forge->addForeignKey('id_user', 'users', 'id_user');
        $this->forge->createTable('bobot_perbankan');
    }

    public function down()
    {
        $this->forge->dropTable('bobot_perbankan');
    }
}
