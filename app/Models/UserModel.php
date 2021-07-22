<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'user';

  protected $primaryKey = 'id_user';

  public function search($keyword)
  {
    $builder = $this->table('user');
    $builder->like('nik_user', $keyword);
    $builder->orLike('name_user', $keyword);
    $builder->orLike('email_user', $keyword);
    $builder->orLike('nomor_user', $keyword);
    $builder->orLike('address_user', $keyword);
    return $builder;
  }
}