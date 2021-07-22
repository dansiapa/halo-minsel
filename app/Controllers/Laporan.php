<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class Laporan extends BaseController
{
	protected $laporanModel;
	
	public function __construck()
	{		
		$this->laporanModel = new LaporanModel();
	}
	
	public function index()
	{
		// $laporan = $this->laporanModel->findAll();
		$currentPage = $this->request->getVar('page_laporan_hm') ? $this->request->getVar('page_laporan_hm') : 1;

		$keyword = $this->request->getVar('cari');
		if ($keyword) {
			$lprn = $this->laporanModel->search($keyword);
		} else {
			$lprn = $this->laporanModel;
		}

		$data = [
			'laporan'			 	=> $lprn->paginate(1, 'laporan_hm'),
			'pager' 				=> $this->laporanModel->pager,
			'currentPage'		=> $currentPage, 
			'laporanModel'	=> $this->laporanModel->getData(),			
		];
		
		return view('halominsel/laporan', $data);
	}

	public function edit($id = null)
	{
		if ($id != null) {
			$query = $this->db->table('laporan_hm')->getWhere(['id' => $id]);
			if ($query->resultID->num_rows > 0) {
				$data['laporan'] = $query->getRow();
				return view('halominsel/editLaporan', $data);
			} else {
				throw \Codeigniter\Exceptions\PageNotFoundException::forPageNotFound();
			}
		} else {
			throw \Codeigniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function update($id)
	{
		$data = [
			'status_laporan'	=> $this->request->getVar('status_laporan'),
		];

		$this->db->table('laporan_hm')->where(['id' => $id])->update($data);

		return redirect()->to(site_url('laporan'));
	}
}