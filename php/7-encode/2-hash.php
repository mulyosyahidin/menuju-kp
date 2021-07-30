<?php
$password = '12345';

echo md5($password); //hash menggunakan md5
echo '<br>';

echo sha1($password); //hash menggunakan sha1
echo '<br>';

echo password_hash($password, PASSWORD_BCRYPT); //hash menggunakan password hash
