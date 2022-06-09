<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categories extends Seeder
{
  public function run()
  {
    $data = [
      ['category' => 'Fashion'],
      ['category' => 'Technology'],
      ['category' => 'Health'],
      ['category' => 'Lifestyle'],
      ['category' => 'Business'],
      ['category' => 'Entertainment'],
      ['category' => 'Sport'],
    ];

    $this->db->table('categories')->insertBatch($data);
  }
}
