<?php

//Khi nao su dung private public protected

//Ten bien thong thuong la danh tu hoac tinh tu, ten ham (phuong thuc) thuong la dong tu
class A {

	public $username;
	public $password;

	public function setUserName()
	{

	}

	public function checkPassword() 
	{

	}

	public function getUserName()
	{

	}

	public function checkLogin()
	{

	}

}

class B {

	 // Ten bien hay ten ham (phuong thuc) dat kieu private thi thuong co 2 dau gach duoi ngoai truoc

	private $__private;
	private function __func_private() 
	{

	}
}

class C {
	//Theo protect thi ten bien hoac ten thuoc tinh dat mot dau gach duoi
	protected $_protected;
	protected function _func_protected() {

	}
}

class D {
	//Theo puclic thi dat theo ten binh thuong 
	public $public;
	public function func_public()
	{

	}
}

class SetandGet {
	private $__username;
	private $__password;

	public function getUserName() 
	{
		return "Xin chao ".$this->__username;	
	}
	public function setUserName ($username)
	{
		$this->__username = $username;
	}
	public function getPassword() 
	{
		return $this->__password;
	}
	public function setPassword($password) {
		$this->__password = md5($password."ki tu muon them");
	}
}

$user = new SetandGet();
$user->setUserName("Jack Thinh");
echo $user->getUserName();
echo "<br>";
$user->setPassword("123456");
echo $user->getPassword();
?>