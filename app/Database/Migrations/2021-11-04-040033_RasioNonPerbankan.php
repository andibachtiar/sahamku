<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RasioNonPerbankan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_rasio' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true,
                'unsigned' => true
            ],
            'id_saham' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'roa' => [
                'type' => 'DECIMAL',
                'constraint' => '6,4'
            ],
            'roe' => [
                'type' => 'DECIMAL',
                'constraint' => '6,4'
            ],
            'eps' => [
                'type' => 'DECIMAL',
                'constraint' => '6,4'
            ],
            'eva' => [
                'type' => 'DECIMAL',
                'constraint' => '6,4'
            ],
            'tato' => [
                'type' => 'DECIMAL',
                'constraint' => '6,4'
            ]
        ]);
        $this->forge->addPrimaryKey('id_rasio');
        $this->forge->addForeignKey('id_saham', 'saham', 'id_saham');
        $this->forge->createTable('rasio_non_perbankan');
    }

    public function down()
    {
        $this->forge->dropTable('saham_non_perbankan');
    }
}
