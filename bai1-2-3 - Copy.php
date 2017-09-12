<?php 
/*
class DongVat {

	//Cac thuoc tinh
	var $mat;
	var $tai;
	var $mui; 
	var $chan;
	function an() {

	}
	function uong() {

	}
	function sua() {

	}
} */

//Khai bao lop doi tuong dong vat
class DongVat {
	var $hello = "Xin chao cac ban toi dang an nhe";
	var $mat;
	var $tai;
	var $mui;
	var $chan;
	function an($thucan)
	{
		echo $this->hello;  // hàm trong đối tượng được gọi đến các thuộc tính của chính mình bằng cú pháp như sau $this->ten_thuoc_tinh
		echo "<br>";
		echo "Hom nay an mon $thucan";
	}
	function uong()
	{

	}
	function chay() 
	{

	}
}

//Khoi tao lop doi tuong
$concho = new DongVat();
$conbo = new DongVat();
$conga = new DongVat();

$concho->mui = "Dep nhe";
$concho->mat = "Mat 2 mi";

echo $concho->mui;
echo "<br>";
echo $concho->mat;

echo "<br>";
$conbo->an("Co");

//
?>