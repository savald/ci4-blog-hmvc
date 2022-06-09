<?php

namespace Post\Models;

use CodeIgniter\Model;

class VisitorsModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'visitors';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = false;
  protected $allowedFields    = [];

  public function getPostsByPopularWeek()
  {
    return $this
      ->join('posts p', 'p.id=visitors.post_id', 'left')
      ->select('visitors.ip_visitor')
      ->where('post_id', 3)
      ->countAllResults();
      // ->select('title, body, excerpt, c.category, au.name, slug, published_at, post_image')
      // ->orderBy('post_id', 'ASC')
      // ->get(4)
      // ->getResult();
  }
}
