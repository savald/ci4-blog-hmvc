<?php

namespace Post\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostsTable extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id'          => [
        'type'           => 'INT',
        'constraint'     => 20,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'category_id'          => [
        'type'           => 'INT',
        'constraint'     => 1,
        'unsigned'       => true,
      ],
      'author_id'          => [
        'type'           => 'INT',
        'constraint'     => 20,
        'unsigned'       => true,
      ],
      'title'       => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
      ],
      'slug'       => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
      ],
      'excerpt'       => [
        'type'       => 'TEXT',
      ],
      'body'       => [
        'type'       => 'TEXT',
      ],
      'post_image'       => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
        'null' => true,
      ],
      'published_at'       => [
        'type'       => 'datetime',
        'null' => true,
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
    $this->forge->createTable('posts');
  }

  public function down()
  {
    $this->forge->dropTable('posts');
  }
}
