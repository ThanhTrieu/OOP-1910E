<?php

namespace src\model;

class ProductModel
{
	public function getAllData()
	{
		return [
			[
				'id' => 1,
				'name' => 'AAAA',
				'price' => 1111
			],
			[
				'id' => 2,
				'name' => 'BBBB',
				'price' => 3333
			]
		];
	}
}
