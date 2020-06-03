<?php

class TotalNumber
{
	private $n1;
	private $n2;
	
	public function __construct($number1 = null, $number2 = null)
	{
		$this->n1 = $number1;
		$this->n2 = $number2;
	}
	
	private function sumNumber($n1, $n2)
	{
		//return $this->n1 + $this->n2;
		return $n1 + $n2;
	}
	
	public function showResult()
	{
		return $this->sumNumber();
	}
	
	public function inputData()
	{
		if(isset($_POST['btnTong'])){
			$n1 = $_POST['number_1'] ?? '';
			$n2 = $_POST['number_2'] ?? '';
			return $this->sumNumber($n1, $n2);
		}
	}
}
$total = new TotalNumber();
echo $total->inputData();
/*
if(isset($_POST['btnTong'])){
	$n1 = $_POST['number_1'] ?? '';
	$n2 = $_POST['number_2'] ?? '';
	$total = new TotalNumber($n1, $n2);
	$result = $total->showResult();
	echo $result;
}
*/
