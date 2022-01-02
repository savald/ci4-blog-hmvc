<?php

namespace Modules\Post\Controllers;

use App\Controllers\BaseController;
use Modules\Post\Models\PostModel;

class Post extends BaseController
{
  protected $postModel;

  public function __construct()
  {
    $this->postModel = new PostModel();
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

  public function details()
  {
    $data = [
      'title' => 'Details'
    ];

    return view('\Modules\Post\Views\blog-details', $data);
  }
}
