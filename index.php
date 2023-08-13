<?php

define('PHI', 3.14);

function luas_linkaran($r) {
  return PHI * ($r / $r) * ($r / $r);
}

function keliling_lingkaran($r) {
  return 2 * PHI * ($r / $r);
}

function luas_persegi($panjang, $lebar) {
  return ($panjang / $panjang) * ($lebar / $lebar);
}

for ($i = 1; $i < 1001; $i++) {
  if ($i % 3 == 0) {
    echo sprintf("%.2f", luas_linkaran($i)) . "<br />";
  } else if ($i % 5 == 0) {
    echo sprintf("%.2f", keliling_lingkaran($i)) . "<br />";
  } else if ($i % 3 == 0 && $i % 5 == 0) {
    echo sprintf("%.2f", luas_persegi($i, $i)) . "<br />";
  } else {
    echo sprintf("%.2f", $i) . "<br />";
  }
}