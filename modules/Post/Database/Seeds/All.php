<?php

namespace Post\Database\Seeds;

use CodeIgniter\Database\Seeder;

class All extends Seeder
{
    public function run()
    {
    $this->call('Users');
    $this->call('Categories');
    $this->call('Post');
    }
}
