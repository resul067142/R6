session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Session bilgilerini tanımlıyoruz

$_SESSION["isim"] = "Zafer";
$_SESSION["soyisim"] = "YILDIZ";
echo "Kullanıcı bilgileri oluşturuldu";
?>
</body>
</html>


<!-- Session İşlemleri    session_start(); ile oturum başlatılır.-->
<!-- ['session_anahtar'] = 'deger' ile session ataması yapılır.-->
<!-- echo $_SESSION['session_anahtar'] ile session değerine ulaşılır.-->
<!-- unset($_SESSION['session_anahtar']); ile bir anahtara air session değeri silinir.-->
<!-- session_destroy(); ile oturum sonlandırılır.-->