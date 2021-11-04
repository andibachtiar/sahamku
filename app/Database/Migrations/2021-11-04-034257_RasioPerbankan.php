<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RasioPerbankan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_rasio' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_saham' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'car' => [
                'type' => 'DECIMAL',
                'constraint' => '6,4',
            ],
            'nim' => [
                'type' => 'DECIMAL',
                'constraint' => '6,4',
            ],
            'npm' => [
                'type' => 'DECIMAL',
                'constraint' => '6,4',
            ],
            'eps' => [
                'type' => 'DECIMAL',
                'constraint' => '6,4',
            ],
            'ldr' => [
                'type' => 'DECIMAL',
                'constraint' => '6,4',
            ]
        ]);
        $this->forge->addPrimaryKey('id_rasio');
        $this->forge->addForeignKey('id_saham', 'saham', 'id_saham');
        $this->forge->createTable('rasio_perbankan');
    }

    public function down()
    {
        $this->forge->dropTable('rasio_perbankan');
    }
}
