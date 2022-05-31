<?php

namespace Modules\Post\Controllers;

use App\Controllers\BaseController;
use Modules\Post\Models\CategoriesModel;
use Modules\Post\Models\PostModel;

class Post extends BaseController
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


    foreach ($data['newest'] as $post) {
      switch ($post->category) {
        case 'Fashion':
          $category = 'fashion';
          break;
        case 'Teknologi':
          $category = 'technology';
          break;
        case 'Kesehatan':
          $category = 'health';
          break;
        case 'Gaya Hidup':
          $category = 'lifestyle';
          break;
        case 'Bisnis':
          $category = 'business';
          break;
        case 'Hiburan':
          $category = 'entertainment';
          break;
        case 'Olahraga':
          $category = 'sport';
          break;

        default:
          $category = null;
          break;
      }
      $post->post_image = "https://source.unsplash.com/random/800x800/?$category";
    }

    return view('Post\Views\index', $data);
  }

  public function detail($slug)
  {
    $data = [
      'title' => 'Details',
      'post'  => $this->postModel->getDetail($slug),
    ];
    // dd($data['post']);

    return view('Post\Views\blog-details', $data);
  }

  public function about()
  {
    $faker = \Faker\Factory::create('id_ID');
    // d(date_format($faker->dateTimeThisYear(), "Y-m-d H:i:s"));

    $data = [
      'title' => 'About'
    ];

    return view('\Modules\Post\Views\about', $data);
  }

  public function category()
  {
    $data = [
      'title' => 'Categories'
    ];

    return view('\Modules\Post\Views\categories', $data);
  }

  public function latest()
  {
    $data = [
      'title' => 'Latest'
    ];

    return view('\Modules\Post\Views\latest', $data);
  }

  public function contact()
  {
    $data = [
      'title' => 'Contact'
    ];

    return view('\Modules\Post\Views\contact', $data);
  }
}
