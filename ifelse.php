<?php


$isim = "resul";
$sifre = "123";

if($isim == "resul" && $sifre != "123")
{
    echo "Şifreniz yanlış";

}elseif($isim != "resul" && $sifre =="123")
{
    echo "Kullanıcı adınız yanlış";
}else if($isim != "resul" && $sifre !="123")
{
    echo "Kullanıcı adınızı ve şifrenizi yanlış girdiniz.";
}
else{
    echo " $isim kardes şifreniz $sifre doğru. Hoşgeldiniz";
}

echo  '<pre>';
echo "-2. Örnek";
echo  '<pre>';


function giris($kullaniciAdi, $sifre)
{

    if($kullaniciAdi == "kod10" && $sifre =="123456")
    {
        echo "Bilgiler doğru";

    }
    else if($kullaniciAdi != "kod10" && $sifre =="123456")
    {
        echo "Kullanıcı adınız yanlış";
    }
    else if($kullaniciAdi == "kod10" && $sifre !="123456")
    {
        echo "şifreniz yanlış";
    }
    else if($kullaniciAdi != "kod10" || $sifre !="123456")
    {
        echo "kullanıcı adı veya şifre yanlış";
    }

}
giris("kod10", "123456");
?>
