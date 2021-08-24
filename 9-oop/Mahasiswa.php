<?php

class Mahasiswa
{
	protected $nama;
	private $npm;

	public function __construct($nama, $npm)
	{
		// setter => memberi nilai
		// getter => mengambil nilai

		$this->nama = $nama;
		$this->npm = $npm;
	}

	public function getNama()
	{
		$nama = $this->nama;

		return $nama;
	}

	public function getNPM()
	{
		return $this->npm;
	}
}

$mahasiswa1 = new Mahasiswa('Anis', 'G1A0');
echo $mahasiswa1->getNPM();
