<?php

namespace Author\Database\Migrations;

use CodeIgniter\Database\Migration;

class AuthorsTable extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'name'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'email'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'password'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'about'       => [
        'type'       => 'TEXT',
      ],
      'role'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
        'default'        => 'author',
      ],
      'image'       => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
      ],
      'created_at'       => [
        'type'       => 'datetime',
        'null' => true,
      ],
      'updated_at'       => [
        'type'       => 'datetime',
        'null' => true,
      ],
      'deleted_at'       => [
        'type'       => 'datetime',
        'null' => true,
      ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('authors');
  }

  public function down()
  {
    $this->forge->dropTable('authors');
  }
}
