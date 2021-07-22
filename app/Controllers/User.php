<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
	protected $userModel;
	
	public function __construct()
	{		
		$this->userModel = new UserModel();
	}

	public function index()
	{
		// $user = $this->userModel->findAll();
		$currentPage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') : 1;

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$user = $this->userModel->search($keyword);
		} else {
			$user = $this->userModel;
		}

		$data = [
			'user'				=> $user->paginate(10, 'user'),
			'pager'				=> $this->userModel->pager,
			'currentPage'	=> $currentPage,
		];

		return view('halominsel/user', $data);
	}

	public function create()
	{
		return view('halominsel/tambahUser');
	}

	public function save()
	{
		$data = [
			'nik_user'			=> $this->request->getVar('nik_user'),
			'name_user'			=> $this->request->getVar('name_user'),
			'email_user'		=> $this->request->getVar('email_user'),
			'password_user' => $this->request->getVar('password_user'),
			'nomor_user'		=> $this->request->getVar('nomor_user'),
			'address_user'	=> $this->request->getVar('address_user'),
		];

		$this->db->table('user')->insert($data);

		if ($this->db->affectedRows() > 0) {
			return redirect()->to(site_url('user'))->with('success', 'Data Berhasil di Tambahkan');
		}
	}

	public function edit($id = null)
	{
		if ($id != null) {
			$query = $this->db->table('user')->getWhere(['id_user' => $id]);
			if ($query->resultID->num_rows > 0) {
				$data['user'] = $query->getRow();
				return view('halominsel/editUser', $data);
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
			'nik_user'			=> $this->request->getVar('nik_user'),
			'name_user'			=> $this->request->getVar('name_user'),
			'email_user'		=> $this->request->getVar('email_user'),
			'password_user' => $this->request->getVar('password_user'),
			'nomor_user'		=> $this->request->getVar('nomor_user'),
			'address_user'	=> $this->request->getVar('address_user'),
		];

		$this->db->table('user')->where(['id_user' => $id])->update($data);

		return redirect()->to(site_url('user'))->with('success', 'Data Berhasil di Ubah');		
	}

	public function delete($id)
	{
		$this->db->table('user')->where(['id_user' => $id])->delete();

		return redirect()->to(site_url('user'))->with('success', 'Data Berhasil di Hapus');		
	}
}
