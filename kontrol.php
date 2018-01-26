<?php
if(isset($_POST["kullanici"]) && isset($_POST["sifre"])){
	$kullanici = $_POST["kullanici"];
	$sifre = $_POST["sifre"];
	if(empty($kullanici) || empty($sifre)) {
		echo "Lütfen alanları doldurmadan işlem yapmayınız";
	}else{
		if($kullanici == "admin" && $sifre == "12345"){
			session_start();
			$_SESSION["kullanici"] = "admin";
			$_SESSION["sifre"] = "12345";
			echo "Başarıyla giriş yaptınız";
			echo "<a href='panel.php'>Panel</a>";
		}else{
			echo "Yanlış kullanıcı adı veya şifre";
		}
	}
}else{
	echo "Lütfen Formu Kullanmayı Deneyin";
}
?>