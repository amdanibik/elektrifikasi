<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kabupaten extends Migration
{
    public function up()
    {
        // Field kabupaten
        $this->forge->addField([
            'id'   => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'namakabupaten'  => [
                'type'              => 'varchar',
                'constraint'        => '255'
            ],
            'jenis'  => [
                'type'              => 'varchar',
                'constraint'        => '255'
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('kabupaten', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('kabupaten');
    }
}
