<?php

namespace Post\Database\Migrations;

use CodeIgniter\Database\Migration;

class VisitorsTable extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id'          => [
        'type'           => 'INT',
        'constraint'     => 10,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'post_id'       => [
        'type'       => 'INT',
        'constraint' => '10',
      ],
      'ip_visitor'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'visited_at'       => [
        'type'       => 'datetime',
        'null' => true,
      ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('visitors');
  }

  public function down()
  {
    $this->forge->dropTable('visitors');
  }
}
