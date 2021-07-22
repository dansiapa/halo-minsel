<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
  protected $table = 'laporan_hm';

  // public function search($keyword)
  // {
  //   return $this->table('laporan_hm')->like('id_user', $keyword);
  // }

  public function getData()
  {
    return $this->db->table('laporan_hm')
    ->join('user', 'user.id_user = laporan_hm.id_user', 'inner')
    ->get()->getResultArray();
  }
}