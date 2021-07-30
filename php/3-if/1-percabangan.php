<?php

$a = 10;
$b = 11;

//percabangan if
if ($a == $b) {
  // jika true $a sama dengan $b
}


//if else
if ($a == $b) {
  // jika true $a sama dengan $b
}
else {
  // jika false $a sama dengan $b
}


//if else if dan seterusnya
if ($a == $b) {
  // jika true $a sama dengan $b (urutan pertama)
}
else if ($a > $b) {
  // jika false $a sama dengan $b (urutan kedua)
}
else if ($a > 20) {
  // jika $a lebih besar dari 20 (urutan ketiga)
}
else if ($a > 20) {
  // jika $a lebih besar dari 20 (urutan ketiga)
}
else if ($a > 20) {
  // jika $a lebih besar dari 20 (urutan ketiga)
}
else if ($a > 20) {
  // jika $a lebih besar dari 20 (urutan ketiga)
}
else {
  // jika tidak ada satupun evaluasi yang true
}


//nested if
if ($a > $b) {
  if ($a == 20) {
    //
  }
  else {
    if ($a > 100) {
      
    }
    else if ($a <= 200) {
      //
    }
    else {
      //
    }
  }
}
else if ($b == 20) {
  //
}
else {
  if ($a == $b && $a == 10) {
    //
  }
  else {
    //
  }
}

// kita bisa membuat nested if dengan kedalaman berapapun
// tapi jika mengaktifkan ekstensi xdebug, maksimalnya 100
