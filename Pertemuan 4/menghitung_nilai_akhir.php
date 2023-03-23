<?php
$nilaiMatematika = 80;
$nilaiFisika = 70;
$nilaiBiologi = 90;
 
$nilaiRataRata = ($nilaiMatematika + $nilaiFisika + $nilaiBiologi) / 3;
 
if ($nilaiRataRata >= 60) {
    echo "Dani lulus dengan nilai rata-rata ".$nilaiRataRata;
} else {
    echo "Dani tidak lulus dengan nilai rata-rata ".$nilaiRataRata;
}
