<?php

//cac muc truy cap private protect va public

// class Xe {
// 	private $loaixe; // Lop con va ngoai ko the su dung
// 	protected $loaixe; //Lop con co the su dung
// 	var $loaixe; //Muc public lop con hay o ngoai deu co the su dung
// 	public $loaixe; // Muc public lop con hay o ngoai deu su dung dc
// }

class Xe {
	private $loaixe; //Lop khac ko the truy cap duoc
	protected $loaixekhac; //thuoc tinh protected thi lop con co the su dung duoc nhung lop ngoai thi ko, dung de dinh nghia lai

	function getLoaiXe()
	{
		return $this->loaixe;
	}

	function setLoaiXe($loaixe) {
		$this->loaixe = $loaixe;
	}
}

class xeHonDa extends Xe {
	function HienThiThongTinXe() {
		$this->setLoaiXe("Xe HonDa");
		echo $this->getLoaiXe();

	}

	function ThongTinXeKhac() {
		$this->loaixekhac = "Yamaha";
		$this->setLoaiXe($this->loaixekhac);
		echo $this->getLoaiXe();
	}
}
// $xe = new Xe();

// //gan gia tri wave rsx cho loaixe
// $xe->setLoaiXe("Wave RSX");
// echo $xe->getLoaiXe();

$xe = new xeHonDa();

$xe->HienThiThongTinXe();

$xe->setLoaiXe("Suzuki");
echo "<br>";
echo $xe->getLoaiXe();

echo "<br>";
$xe->ThongTinXeKhac();
?>