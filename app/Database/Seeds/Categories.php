<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categories extends Seeder
{
  public function run()
  {
    $data = [
      ['category' => 'Fashion'],
      ['category' => 'Teknologi'],
      ['category' => 'Kesehatan'],
      ['category' => 'Gaya Hidup'],
      ['category' => 'Bisnis'],
      ['category' => 'Hiburan'],
      ['category' => 'Olahraga'],
    ];

    $this->db->table('categories')->insertBatch($data);
  }
}
