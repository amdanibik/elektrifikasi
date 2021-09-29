<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tahun extends Migration
{
    public function up()
    {
        // Field tahun
        $this->forge->addField([
            'tahunid'   => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'tahun'  => [
                'type'              => 'INT',
                'constraint'        => 5
            ],
            'capaian'  => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
        ]);
        $this->forge->addKey('tahunid', TRUE);
        $this->forge->createTable('tahun', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('tahun');
    }
}
