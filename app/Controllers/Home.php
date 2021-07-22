<?php

namespace App\Controllers;

use App\Models\DashboardModel;

class Home extends BaseController
{
	protected $dashboardModel;

	public function __construct()
	{
		$this->dashboardModel = new DashboardModel;
	}

	public function index()
	{
		$data = [
			'countLaporan' 	=> $this->dashboardModel->countLaporan(),
			'countUser' 		=> $this->dashboardModel->countUser(),
		];

		return view('halominsel/progres', $data);
	}
}
