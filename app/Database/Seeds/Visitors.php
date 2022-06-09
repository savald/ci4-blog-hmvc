<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Visitors extends Seeder
{
  public function run()
  {
    $faker = \Faker\Factory::create('id_ID');

    for ($i = 0; $i < 30; $i++) {
      $data = [
        'post_id' =>  mt_rand(1, 30),
        'ip_visitor' => $faker->ipv6(),
        'visited_at' => date_format($faker->dateTimeThisYear(), "Y-m-d H:i:s")
      ];

      $this->db->table('visitors')->insert($data);
    }
  }
}
