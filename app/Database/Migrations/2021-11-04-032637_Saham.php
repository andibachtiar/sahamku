<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Saham extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_saham' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kode_saham' => [
                'type' => 'CHAR',
                'constraint' => 4,
            ],
            'kategori' => [
                'type' => 'ENUM',
                'constraint'  => ['perbankan', 'non perbankan'],
            ],
            'nama_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'sektor_perusahaan' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'nilai_vikor' => [
                'type' => 'DECIMAL',
                'constraint' => '6,4',
                'null' => false,
                'default' => 0.0000
            ]
        ]);
        $this->forge->addPrimaryKey('id_saham');
        $this->forge->createTable('saham');
    }

    public function down()
    {
        $this->forge->dropTable('saham');
    }
}
