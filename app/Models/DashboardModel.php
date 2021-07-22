<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model 
{
  protected $table = 'laporan_hm';

  public function countLaporan()
  {
    return $this->db->table('laporan_hm')->countAll();
  }
  
  public function countuser()
  {
    return $this->db->table('user')->countAll();
  }
  
}
