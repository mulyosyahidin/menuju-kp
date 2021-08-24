<?php

class Dosen
{
	protected $nama;
	protected $nip;
	protected $jenisKelamin;

	public function setNama($nama)
	{
		$this->nama = $nama;

		return $this;
	}

	public function setNIP($nip)
	{
		$this->nip = $nip;
	}

	public function getNIP()
	{
		return $this->nip;
	}
}

$dosen = new Dosen();

$dosen->setNama('Yudi')
	->setNIP('1234');

echo $dosen->getNIP();
