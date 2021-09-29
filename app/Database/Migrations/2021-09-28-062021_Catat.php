<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Catat extends Migration
{
    public function up()
    {
        // Field tahun
        $this->forge->addField([
            'idcatat'   => [
                'type'              => 'INT',
                'constraint'        => 10,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'iddesa'  => [
                'type'              => 'INT',
                'constraint'        => 10
            ],
            'idtahun'  => [
                'type'              => 'INT',
                'constraint'        => 10
            ],
            'idstatus'  => [
                'type'              => 'INT',
                'constraint'        => 10
            ],
        ]);
        $this->forge->addKey('idcatat', TRUE);
        $this->forge->createTable('catat', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('catat');
    }
}
