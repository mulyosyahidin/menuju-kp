<?php

class ContohClass
{
	public $iniPropertiPublik;
	protected $iniPropertiProtected;
	private $iniPropertiPrivate;

	public function __construct()
	{
		// ini adalah konstruktor class

		// konstruktor adalah method yang dipanggil secara otomatis saat membuat objek
	}

	public function iniMethod()
	{
		// ini adalah method dengan hak akses publik
		// hak akses method: public, protected, private (sama seperti properti)

		// method hanyalah sebuah fungsi biasa, tapi ada didalam class
	}
}

$contohObjek = new ContohClass; // ini adalah pembuatan objek dari class "ContohClass"
/**
 * $db = new mysqli() ==> ini membuat objek dari class mysqli
 */

$contohObjek->iniMethod(); // pemanggilan method "iniMethod" yang ada di dalam class "ContohClass"

$contohObjek->iniPropertiPublik; // pemanggilan properti "iniPropertiPublik" yang ada di dalam class "ContohClass"