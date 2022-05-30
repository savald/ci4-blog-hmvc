<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Author extends Seeder
{
  public function run()
  {
    $faker = \Faker\Factory::create('id_ID');

    for ($i = 0; $i < 3; $i++) {
      $data = [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => password_hash('test', PASSWORD_BCRYPT),
        'about' => $faker->paragraph()
      ];

      $this->db->table('authors')->insert($data);
    }
  }
}
