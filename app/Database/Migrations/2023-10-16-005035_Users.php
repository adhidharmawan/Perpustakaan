<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [

                'type' => 'INT',

                'constraint' => 5,

                'unsigned' => true,

                'auto_increment' => true,

            ],

            'username' => [

                'type' => 'VARCHAR',

                'constraint' => '100',

            ],

            'password' => [

                'type' => 'VARCHAR',

                'constraint' => '100',

            ],

            'email' => [

                'type' => 'VARCHAR',

                'constraint' => '100',

            ],

            'avatar' => [

                'type' => 'VARCHAR',

                'constraint' => '100',

            ],

            'created_at datetime default current_timestamp',

            'updated_at datetime default current_timestamp on update current_ti
            mestamp',

        ]);

        $this->forge->addPrimaryKey('id', true);

        $this->forge->createTable('users');
    }

    public function down()
    {
        //
    }
}
