<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Post extends Seeder
{
  public function run()
  {
    $faker = \Faker\Factory::create('id_ID');

    for ($i = 0; $i < 30; $i++) {
      $data = [
        'author_id' => mt_rand(1, 3),
        'category_id' => mt_rand(1, 7),
        'title' => $faker->sentence(mt_rand(2, 8)),
        'slug' => $faker->slug(),
        'excerpt' => $faker->paragraph(),
        'body' => "<p>" . implode("</p><p>", $faker->paragraphs(mt_rand(8, 20))),
        'published_at' => date_format($faker->dateTimeThisYear(), "Y-m-d H:i:s")
      ];

      $this->db->table('posts')->insert($data);
    }
  }
}
