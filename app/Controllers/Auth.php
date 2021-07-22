<?php

namespace App\Controllers;

//use CodeIgniter\Database\MySQLi\Builder;

class Auth extends BaseController
{
	public function index()
	{
    return redirect()->to(site_url('login'));
	}
  
  public function login()
  {
    if (session('id_admin')) {
      return redirect()->to(site_url(''));
    }
    return view('auth/login');
  }

  public function loginProcess()
  {
    $post = $this->request->getPost();
    $query = $this->db->table('admin_hm')->getWhere(['nama_admin' => $post['name']]);
    $user = $query->getRow();
    if ($user) {
      if (password_verify($post['password'], $user->password_admin)) {
        $params = ['id_admin' => $user->id_admin, 'nama_admin' => $user->nama_admin];
        session()->set($params);
        return redirect()->to(site_url(''));
      } else {
        return redirect()->back()->with('error', 'Password Tidak Sesuai');
      }
    } else {
      return redirect()->back()->with('error', 'Nama Tidak Ditemukan');
    }
  }
  
  public function logout()
  {
    session()->remove('id_admin');
    return redirect()->to(site_url('login'));
  }
}