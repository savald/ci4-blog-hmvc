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
      'newest'      => $this->postModel->getPostNewest(),
      'fashion'     => $this->postModel->getPostByCategory('Fashion'),
      'teknologi'   => $this->postModel->getPostByCategory('Teknologi'),
      'kesehatan'   => $this->postModel->getPostByCategory('Kesehatan'),
      'gaya_hidup'  => $this->postModel->getPostByCategory('Gaya Hidup'),
      'bisnis'      => $this->postModel->getPostByCategory('Bisnis'),
      'hiburan'     => $this->postModel->getPostByCategory('Hiburan'),
      'olahraga'    => $this->postModel->getPostByCategory('Olahraga'),
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

    return view('Post\Views\pages\index', $data);
  }

  public function detail($slug)
  {
    $data = [
      'title' => 'Details',
      'post'  => $this->postModel->getPostDetail($slug),
    ];

    return view('Post\Views\pages\blog-details', $data);
  }

  public function about()
  {

    $data = [
      'title' => 'About'
    ];

    return view('\Modules\Post\Views\pages\about', $data);
  }

  public function category()
  {
    $data = [
      'title' => 'Categories'
    ];

    return view('\Modules\Post\Views\pages\categories', $data);
  }

  public function latest()
  {
    $data = [
      'title' => 'Latest'
    ];

    return view('\Modules\Post\Views\pages\latest', $data);
  }

  public function contact()
  {
    $data = [
      'title' => 'Contact'
    ];

    return view('\Modules\Post\Views\pages\contact', $data);
  }
}
