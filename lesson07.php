﻿<?php
// 以下をfor文を使用して表示してください。
// ヒント: forの中でforを３回使用

// ***1
// **121
// *12321
// 1234321

for($i = 1; $i <= 4; $i++) {
  $a = 0;
  for($j = 3; $j >= $i; $j--) {
    echo "*";
  }
  for($j = 1; $j <= $i; $j++) {
    $a ++;
    echo $a;
  }
  for($j = 1; $j <= $i-1; $j++) {
    $a --;
    echo $a;
  }
  echo "<br>";
}