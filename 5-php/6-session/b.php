<?php
session_start();

/**
 * 1. periksa apakah session ada atau tidak
 */

if (isset($_SESSION['nama'])) {
  //diisni kode kalau session ada
  echo $_SESSION['nama'];
} else {
  echo 'Session tidak ada';
  //disini kode kalau session tidak ada
}