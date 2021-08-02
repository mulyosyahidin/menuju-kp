<?php
session_start();

unset($_SESSION['nama']);
echo 'Berhasil menghapus session';