<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Desa extends Migration
{
    public function up()
    {
        // Field Desa
        $this->forge->addField([
            'desaid'   => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'kecamatan_id'   => [
                'type'              => 'INT',
                'constraint'        => 5,
            ],
            'kabupaten_id'   => [
                'type'              => 'INT',
                'constraint'        => 5,
            ],
            'namadesa'  => [
                'type'              => 'varchar',
                'constraint'        => '255'
            ],
            'jenisdesa'  => [
                'type'              => 'varchar',
                'constraint'        => '255'
            ],
        ]);
        $this->forge->addKey('desaid', TRUE);
        $this->forge->createTable('desa', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('desa');
    }
}
