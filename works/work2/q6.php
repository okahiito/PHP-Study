<?php

// 以下の配列をの要素のうち文字数が偶数のもののみ表示するループを書いてください
$fruits = array("Apple", "Banana", "Cherry");

foreach ($fruits as $fruit) {
    if (strlen($fruit) % 2 === 0) {
        echo $fruit . "\n";
    }
}
