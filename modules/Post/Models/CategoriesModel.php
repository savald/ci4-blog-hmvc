<?php

namespace Modules\Post\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'categories';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = [];

  public function getCategories()
  {
    return $this->get()->getResult();
  }
}
