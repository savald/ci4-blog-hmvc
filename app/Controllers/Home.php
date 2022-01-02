<?php

namespace App\Controllers;

use Modules\Post\Models\CategoriesModel;
use Modules\Post\Models\PostModel;

class Home extends BaseController
{
  protected $postModel;

  public function __construct()
  {
    $this->postModel = new PostModel();
    $this->categoriesModel = new CategoriesModel();
  }
  public function index()
  {

    $data = [
      'title'       => 'Homepage',
      'categories'  => $this->categoriesModel->getCategories(),
      'newest'      => $this->postModel->getNewest(),
      'fashion'     => $this->postModel->getByCategory('Fashion'),
      'teknologi'   => $this->postModel->getByCategory('Teknologi'),
      'kesehatan'   => $this->postModel->getByCategory('Kesehatan'),
      'gaya_hidup'  => $this->postModel->getByCategory('Gaya Hidup'),
      'bisnis'      => $this->postModel->getByCategory('Bisnis'),
      'hiburan'     => $this->postModel->getByCategory('Hiburan'),
      'olahraga'    => $this->postModel->getByCategory('Olahraga'),
    ];

    // dd($data['newest'][0]);

    return view('\Modules\Post\Views\index', $data);
  }
}
