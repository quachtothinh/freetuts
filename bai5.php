<?php

//Tinh ke thua

// class classCon extends classCha {
	
// }
class DongVat {
	var $mat;
	var $mui;
	var $tai;

	function an() {
		echo "Co";
	}
	function uong() {

	}
	function chay() {

	}
}

//Class ke thua
class conTrau extends DongVat {
	//tat ca cac thuoc tinh khac deu ke thua tu lop dong vat
	//chi rieng thuoc tinh $sung la cha ko co nen phai khai bao
	var $sung;

	//tat ca phuong thuc deu ke thua tu cha

	//Goi phuong thuc cha o trong phuong thuc con thi dung parent::thuoctinh, parent::phuongthuc()
	function gioi_thieu()
	{
		echo "Con nay la con Trau";
		echo "thuc an la".parent::an();
	}

}

$contrau = new conTrau();

$contrau->gioi_thieu();


echo $contrau->mui = "nhon";
echo $contrau->sung = "sung to";
?>