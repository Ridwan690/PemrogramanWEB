<?php
function Prima($angka)
{
    if ($angka <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) {
            return false;
        }
    }

    return true;
}

$maxangka = (int)readline("Masukkan angka maksimal: ");

echo "Deret bilangan prima kurang dari atau sama dengan $maxangka: ";

for ($i = 2; $i <= $maxangka; $i++) {
    if (Prima($i)) {
        echo $i . " ";
    }
}

