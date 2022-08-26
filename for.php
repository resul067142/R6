<?php

for($i=1;$i<=5; $i++){

    echo "Resul";

    echo "<br>";
}

for($i=1;$i<=20; $i++){

    $tek = $i % 2; // 2'ye tam bölünmezse tek sayı

    if($tek!=0){

        echo $i."\n";

    }
}


for ($i = 1; $i <= 9; $i++) {

    $sonuc = 5 * $i;

    echo "5 x $i = $sonuc";

    echo "<br>";
}

echo "<pre>sayı\t karesi</pre>";

for($i=5;$i<=10; $i++){

    $k = pow($i,2);

     echo "<pre> $i\t $k <br> " ;

     //5 ten 10 a kadar olan sayıların karesi
}





?>