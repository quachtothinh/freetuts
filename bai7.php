<?php

//ke thua long trong php
class A {
	private $private_a = "Private";
	protected $protected_a = "Protected";
	public $public_a = "Public";

	private function showPrivate() {
		echo $this->private_a;
	}

	protected function showProtected() {
		echo $this->protected_a;
	}

	public function showPublic() {
		echo $this->public_a;
	}

}

class B extends A {
	public function ClassB()
	{
		echo $this->protected_a = "Da chuyen thanh B";
	}
}

class C extends B {
	public function ClassC() 
	{
		$this->public_a = "Da Chuyen thanh C";
	}

}

$c = new C();
$c->ClassC();
$c->showPublic();

$c->ClassB();


?>
