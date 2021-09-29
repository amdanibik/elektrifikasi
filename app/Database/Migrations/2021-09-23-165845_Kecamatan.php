<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kecamatan extends Migration
{
    public function up()
    {
        // Field kecamatan
        $this->forge->addField([
            'kecamatanid'   => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'kabupaten_id'   => [
                'type'              => 'INT',
                'constraint'        => 5,
            ],
            'namakecamatan'  => [
                'type'              => 'varchar',
                'constraint'        => '255'
            ],
        ]);
        $this->forge->addKey('kecamatanid', TRUE);
        $this->forge->createTable('kecamatan', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('kecamatan');
    }
}
