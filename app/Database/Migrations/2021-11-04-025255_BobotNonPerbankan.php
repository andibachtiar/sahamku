<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BobotNonPerbankan extends Migration
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
            'roa' => [
                'type' => 'INT',
                'constraint' => 5,
                'default' => 35
            ],
            'roe' => [
                'type' => 'INT',
                'constraint' => 5,
                'default' => 28
            ],
            'eps' => [
                'type' => 'INT',
                'constraint' => 5,
                'default' => 15
            ],
            'eva' => [
                'type' => 'INT',
                'constraint' => 5,
                'default' => 15
            ],
            'tato' => [
                'type' => 'INT',
                'constraint' => 5,
                'default' => 7
            ],
        ]);
        $this->forge->addPrimaryKey('id_bobot');
        $this->forge->addForeignKey('id_user', 'users', 'id_user');
        $this->forge->createTable('bobot_non_perbankan');
    }

    public function down()
    {
        $this->forge->dropTable('bobot_non_perbankan');
    }
}
