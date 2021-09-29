<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Status extends Migration
{
    public function up()
    {
        // Field Status
        $this->forge->addField([
            'statusid'   => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'namastatus'  => [
                'type'              => 'VARCHAR',
                'constraint'        => '200'
            ],
            'listrik'  => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
        ]);
        $this->forge->addKey('statusid', TRUE);
        $this->forge->createTable('status', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('status');
    }
}
