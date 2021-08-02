<?php

function apakah_prodi_ft($kode_prodi = null)
{
  $daftar_prodi = array(
    'A' => 'Informatika',
    'B' => 'Teknik Sipil',
    'C' => 'Teknik Mesin',
    'D' => 'Teknik Elektro',
    'E' => 'Arsitektur',
    'F' => 'Sistem Informasi',
  );

  // linear search
  foreach ($daftar_prodi as $kode => $prodi) {
    if ($kode == $kode_prodi) {
      // jika $kode_prodi ada di dalam array $daftar_prodi, maka hentikan looping
      // dan kembalikan nilai fungsi "true"
      return true;
      break;
    }
  }

  // jika $kode_prodi tidak ada di dalam array $daftar_prodi,
  // kembalikan nilai fungsi "false"
  return false;
}

// Data pendaftar
$prodi = 'A';
$semester = 5;
$ip = 2;

if (apakah_prodi_ft($prodi) && $ip >= 3) {
  // operator and. pendaftar harus mahasiswa ft dan ip lebih besar atau sama dengan 3
  echo 'Anda mahasiswa Fakultas teknik dengan IP >= 3. Boleh mendaftar';
}
else {
  echo 'Anda bukan mahasiswa Fakultas teknik atau IP tidak memenuhi syarat. Tidak boleh mendaftar';
}

echo '<br>';
echo '<br>';

var_dump(!true); // negasi (membalik nilai)
?>



<!-- <table border="1">
  <thead>
    <th>p</th>
    <th>q</th>
    <th>~ p</th>
    <th>~ q</th>
    <th>p ^ q</th>
    <th>~p ^ ~q</th>
  </thead>
  <tbody>
    <tr>
      <td>
        <?php $p = true; ?>
        true
      </td>
      <td>
        <?php $q = false; ?>
        false
      </td>
      <td><?php var_dump(!$p); ?></td>
      <td><?php var_dump(!$q); ?></td>
      <td><?php var_dump($p && $q); ?></td>
      <td><?php var_dump(!$p && !$q); ?></td>
    </tr>

    <tr>
      <td>
        <?php $p = false; ?>
        false
      </td>
      <td>
        <?php $q = true; ?>
        true
      </td>
      <td>
        <?php var_dump(!$p); ?>
      </td>
      <td><?php var_dump(!$q); ?></td>
      <td><?php var_dump($p && $q); ?></td>
      <td><?php var_dump(!$p && !$q); ?></td>
    </tr>

  </tbody>
</table> -->