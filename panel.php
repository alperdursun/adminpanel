<?php
session_start();
if(isset($_SESSION["kullanici"]) && isset($_SESSION["sifre"])){
	if($_SESSION["kullanici"] = "admin" && $_SESSION["sifre"] = "12345"){
		echo "Panele hoşgeldiniz ! Buraya admin sayfasını include edebilirsiniz.";
	}else{
		session_destroy();
		echo "Bilgileriniz yanlış buraya sadece adminler girebilir.";
	}
}else{
	echo "Sadece giriş yapmış kişiler görebilir";
}
?>