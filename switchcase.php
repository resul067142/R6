<?php
$sayi=1;
switch ($sayi){
    case 0: echo "Sayı 0'dır."; break;
    case 1: echo "Sayı 1'dir."; break;
    case 2: echo "Sayı 2'dir."; break;
    case 3: echo "Sayı 3'dir."; break;
default: echo "Sayı belli değildir.";
}
echo  '<pre>';
echo "-2. Örnek";
echo  '<pre>';

$notu = 68;
switch ($notu) {
    case 90 <= $notu:
        echo "AA - aldınız";
        break;
    case 70 <= $notu:
        echo "CC - aldınız";
        break;
    case 65 <= $notu:
        echo "DC - aldınız";
        break;
    case 50 <= $notu:
        echo "DF - aldınız";
        break;
    case 10 <= $notu:
        echo "FF - aldınız";
        break;
    default:
        echo "Başarısız";
}





?>
