<?php
session_start(); //1. wajib diawali di setiap file yang akan menggunakan session

require('includes/db.php'); //2. include file koneksi database. koneksi bisa digunakan dengan variabel $db

if (isset($_POST['submit'])) { //3. pastikan form disubmit
	//4. ambil username dan password dari form
	$username = $_POST['username'];
	$password = $_POST['password']; // plain text yg diinput oleh user di form

	
	$cek_username = $db->query("SELECT * FROM users WHERE username = '$username' AND password =");


	if ($cek_username->num_rows > 0) { //5. cek apakah username yang diinput ada di database atau tidak
		$data_user = $cek_username->fetch_object(); //6. jika username ada di database, ambil data user tersebut dalam bentuk objek

		$user_password_db = $data_user->password; //7. ambil password user dari database
		//password bcrypt dari database
	
		if (password_verify($password, $user_password_db)) { //8. kemudian bandingkan, apakah password dari database sama dengan md5 password yang diinput user
			//9. set session login
			$_SESSION['is_login'] = true;
			$_SESSION['nama'] = $data_user->nama;

			//10. arahkan ke halaman crud mahasiswa
			header('Location: crud-mahasiswa/');
		} else {
			//jika password yang diinput salah
			echo 'Password salah. Silahkan ulangi.';
		}
	} else {
		//jika username tidak ada di database
		echo 'Username tidak terdaftar';
	}
}

/**
 * password_verify() adalah fungsi untuk memeriksa apakah
 * `plain password` (password yang diinput dari form)
 * sesuai dengan hash yang disimpan di database (yang dihasilkan oleh fungsi password_hash()).
 */
