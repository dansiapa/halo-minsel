<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
  protected $table = 'laporan_hm';

  public function search($keyword)
  {
    $builder = $this->table('laporan_hm');
    $builder->like('nik_user', $keyword);
    $builder->orLike('name_user', $keyword);
    $builder->orLike('nomor_user', $keyword);
    $builder->orLike('isi_laporan', $keyword);    
    $builder->orLike('tgl_laporan', $keyword);    
    $builder->orLike('status_laporan', $keyword);    
    return $builder;
  }

  public function getData()
  {
    return $this->db->table('laporan_hm')
    ->join('user', 'user.id_user = laporan_hm.id_user')
    ->get()->getResultArray();
  }
}