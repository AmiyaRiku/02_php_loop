<?php
// 以下をfor文を使用して表示してください。

// 321
// 21
// 1

for($i = 3; $i >= 1; $i--) {
  $a = $i;
  for($j = 1; $j <= $i; $j++) {
    echo $a;
    $a --;
  }
  echo "<br>";
}