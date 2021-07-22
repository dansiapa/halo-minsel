<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'user';

  protected $primaryKey = 'id_user';

  public function search($keyword)
  {
    // $builder = $this->table('user');

    // $builder->like('name_user', $keyword);
    // // $builder->like('email_user', $keyword);

    // return $builder;

    return $this->table('user')->like('nik_user', $keyword)->orLike('name_user', $keyword)->orLike('email_user', $keyword);
  }
}