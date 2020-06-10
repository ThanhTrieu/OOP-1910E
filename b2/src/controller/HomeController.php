<?php

namespace src\controller;

use src\model\ProductModel;

// lazyloading : ten file va ten class trung nhau
class HomeController
{
	private $db;
	public function __construct()
	{
		$this->db = new ProductModel();
	}
	
	public function index()
	{
		return $this->db->getAllData();
	}
}