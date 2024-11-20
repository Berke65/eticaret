<?php 
include 'baglan.php';

// GENEL AYAR GÜNCELLEME İSLEMİ BASLANGIC
if (isset($_POST['genelayarkaydet']))
{

	$ayarkaydet=$db->prepare("UPDATE ayar SET 
		ayar_title=:ayar_title,
		ayar_description=:ayar_description,
		ayar_keywords=:ayar_keywords,
		ayar_author=:ayar_author
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute([
		'ayar_title' => $_POST['ayar_title'],
		'ayar_description' => $_POST['ayar_description'],
		'ayar_keywords' => $_POST['ayar_keywords'],
		'ayar_author' => $_POST['ayar_author']
	]);

	if($update)
	{
		header("Location: ../production/genel-ayar.php?durum=ok");
	}
	else
	{
		header("Location: ../production/genel-ayar.php?durum=no");
	}

}
// GENEL AYAR GÜNCELLEME İSLEMİ BİTİS


// İLETİSİM AYAR GÜNCELLEME İSLEMİ BASLANGIC
	if(isset($_POST['iletisimayarkaydet']))
	{
		$ayarkaydet=$db->prepare("UPDATE ayar SET
			ayar_tel=:ayar_tel,
			ayar_gsm=:ayar_gsm,
			ayar_faks=:ayar_faks,
			ayar_mail=:ayar_mail,
			ayar_ilce=:ayar_ilce,
			ayar_il=:ayar_il,
			ayar_adres=:ayar_adres,
			ayar_mesai=:ayar_mesai
			WHERE ayar_id=0");

		$update=$ayarkaydet->execute([
			'ayar_tel' => $_POST['ayar_tel'],
			'ayar_gsm' => $_POST['ayar_gsm'],
			'ayar_faks' => $_POST['ayar_faks'],
			'ayar_mail' => $_POST['ayar_mail'],
			'ayar_ilce' => $_POST['ayar_ilce'],
			'ayar_il' => $_POST['ayar_il'],
			'ayar_adres' => $_POST['ayar_adres'],
			'ayar_mesai' => $_POST['ayar_mesai']
	]);
		if($update)
		{
			header("Location: ../production/iletisim-ayar.php?durum=ok");
		}
		else
		{
			header("Location: ../production/iletisim-ayar.php?durum=no");
		}

	}
// İLETİSİM AYAR GÜNCELLEME İSLEMİ BİTİS

 ?>
