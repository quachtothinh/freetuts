<?php

//Tinh da hinh

class DongVat {
	public function an() 
	{
		echo "Dong vat dang an";
	}
}
class ConHeo extends DongVat {
	public function an() 
	{
		parent::an();
		echo "Con heo an cam";
	}
}

//$heo = new ConHeo();
//$heo->an();

class HinhHoc {
	function Ve()
	{

	}
	function tinh_Dien_Tich()
	{

	}
}

class HinhVuong extends HinhHoc {
	public $canh;
	function Ve()
	{

	}
	function tinh_Dien_Tich()
	{
		return $this->canh * $this->canh;
	}
}

class HinhChuNhat extends HinhHoc {
	public $chieuDai;
	public $chieuRong;

	function Ve()
	{

	}
	function tinh_Dien_Tich()
	{
		return $this->chieuDai * $this->chieuRong;
	}
}

$hinhVuong = new HinhVuong();
$hinhVuong->canh = "3";
echo $hinhVuong->tinh_Dien_Tich()."<br>";

$hinhChuNhat = new HinhChuNhat();
$hinhChuNhat->chieuDai = "4";
$hinhChuNhat->chieuRong = "5";
echo $hinhChuNhat->tinh_Dien_Tich()."<br>";

?>