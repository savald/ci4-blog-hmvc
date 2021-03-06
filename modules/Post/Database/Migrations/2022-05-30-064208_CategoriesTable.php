<?php

namespace Post\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoriesTable extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id'          => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'category'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('categories');
  }

  public function down()
  {
    $this->forge->dropTable('categories');
  }
}
