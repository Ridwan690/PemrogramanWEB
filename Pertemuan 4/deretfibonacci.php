<?php
// Inisialisasi bilangan pertama dan kedua
$a = 0;
$b = 1;

// Tampilkan deret Fibonacci dari 1 hingga 20
echo "Deret Fibonacci dari 1 hingga 20 adalah: ";
for ($i = 1; $i <= 20; $i++) {
  echo "$b ";

  // Hitung bilangan Fibonacci berikutnya
  $c = $a + $b;
  $a = $b;
  $b = $c;

  // Cek apakah sudah mencapai angka 20
  if ($b > 20) {
    break;
  }
}
?>
