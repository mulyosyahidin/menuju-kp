<?php

class Komputer
{
	private $nama = 'Asus';
	public $penyimpanan;

	public function getNama()
	{
		return 'ABC';
	}
}

class ABC {

}

class Laptop extends Komputer
{
	public function nama()
	{
		return $this->nama;
	}
}

class XYZ extends ABC {

}

$laptop = new Laptop;
echo $laptop->nama();
