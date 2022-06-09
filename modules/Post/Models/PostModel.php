<?php

namespace Modules\Post\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'posts';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = false;
  protected $allowedFields    = [];

  // Dates
  protected $useTimestamps = true;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  // Validation
  protected $validationRules      = [];
  protected $validationMessages   = [];
  protected $skipValidation       = false;
  protected $cleanValidationRules = true;

  // Callbacks
  protected $allowCallbacks = true;
  protected $beforeInsert   = [];
  protected $afterInsert    = [];
  protected $beforeUpdate   = [];
  protected $afterUpdate    = [];
  protected $beforeFind     = [];
  protected $afterFind      = [];
  protected $beforeDelete   = [];
  protected $afterDelete    = [];

  public function getPostNewest()
  {
    return $this->join('categories c', 'c.id=posts.category_id', 'left')
      ->join('authors au', 'au.id=posts.author_id', 'left')
      ->select('title, body, excerpt, c.category, au.name, slug, published_at, post_image')
      ->orderBy('published_at', 'DESC')
      ->get(5)
      ->getResult();
  }

  public function getPostDetail($slug)
  {
    return $this->join('categories c', 'c.id=posts.category_id', 'left')
      ->join('authors au', 'au.id=posts.author_id', 'left')
      ->select('title, body, c.category, au.name, au.about, slug, published_at, post_image')
      ->where('slug', $slug)
      ->get()
      ->getRow();
  }

  public function getPostByCategory($category)
  {
    return $this
      ->join('categories c', 'c.id=posts.category_id', 'left')
      ->join('authors au', 'au.id=posts.author_id', 'left')
      ->where('c.category', $category)
      ->select('title, body, excerpt, c.category, au.name, slug, published_at, post_image')
      ->orderBy('published_at', 'DESC')
      ->get(4)
      ->getResult();
  }

  public function getPostsByPopularWeek()
  {
    return $this
      ->join('visitors v', 'v.id=posts.category_id', 'left')
      ->join('authors au', 'au.id=posts.author_id', 'left')
      ->select('title, body, excerpt, c.category, au.name, slug, published_at, post_image')
      ->orderBy('published_at', 'DESC')
      ->get(4)
      ->getResult();
  }
}
