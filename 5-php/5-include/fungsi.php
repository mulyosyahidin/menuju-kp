<?php

function apakah_diterima($semester)
{ //inline function
  if ($semester >= 4) {
    return 'Diterima';
  } else {
    return 'Tidak diterima';
  }
}

