<?php

namespace Modules\Post\Controllers;

use App\Controllers\BaseController;
use Modules\Post\Models\CategoriesModel;
use Modules\Post\Models\PostModel;
use Post\Models\VisitorsModel;

class Post extends BaseController
{
  protected $postModel;

  public function __construct()
  {
    $this->postModel = new PostModel();
    $this->categoriesModel = new CategoriesModel();
    $this->visitorsModel = new VisitorsModel();
  }

  public function index()
  {
    //  get ipAddress
    // $ipAddress = $this->request->getIPAddress();

    // dd($ipAddress);
    // $popular = $this->visitorsModel->getPostsByPopularWeek();
    // dd($popular);

    $data = [
      'title'       => 'Homepage',
      'categories'  => $this->categoriesModel->getCategories(),
      'newest'      => $this->postModel->getPostNewest(),
      'fashion'     => $this->postModel->getPostByCategory('Fashion'),
      'technology'   => $this->postModel->getPostByCategory('Teknologi'),
      'health'   => $this->postModel->getPostByCategory('Kesehatan'),
      'lifestyle'  => $this->postModel->getPostByCategory('Gaya Hidup'),
      'business'      => $this->postModel->getPostByCategory('Bisnis'),
      'entertainment'     => $this->postModel->getPostByCategory('Hiburan'),
      'sport'    => $this->postModel->getPostByCategory('Olahraga'),
    ];


    foreach ($data['newest'] as $post) {
      switch ($post->category) {
        case 'Fashion':
          $category = 'fashion';
          break;
        case 'Technology':
          $category = 'technology';
          break;
        case 'Health':
          $category = 'health';
          break;
        case 'Lifestyle':
          $category = 'lifestyle';
          break;
        case 'Business':
          $category = 'business';
          break;
        case 'Entertainment':
          $category = 'entertainment';
          break;
        case 'Sport':
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
    $post =  $this->postModel->getPostDetail($slug);
    $post->post_image = $post->post_image === null ? "https://source.unsplash.com/random/800x800/?$post->category" : $post->post_image;

    $data = [
      'title' => $post->title,
      'post'  => $post,
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
