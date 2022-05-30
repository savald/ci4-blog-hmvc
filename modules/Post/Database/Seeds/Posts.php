<?php

namespace Post\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Posts extends Seeder
{
  public function run()
  {
    $faker = \Faker\Factory::create('id_ID');

    for ($i = 0; $i < 30; $i++) {
      $data = [
        'title' => $faker->sentence(mt_rand(2, 8)),
        'slug' => $faker->slug(),
        'excerpt' => $faker->paragraph(),
        'body' => "<p>" . implode("</p><p>", $faker->paragraphs(mt_rand(5, 10))),
        'author_id' => mt_rand(1, 3),
        'category_id' => mt_rand(1, 7),
        'published_at' => date_format($faker->dateTimeThisYear(), "Y-m-d H:i:s")
      ];

      $this->db->table('posts')->insert($data);
    }
  }
}
