<?php

class ilan
{

    public static function ilanEkle($data)
    {

        global $db;
        $query = $db->prepare('INSERT INTO ilanlar SET ilan_baslik = :baslik, ilan_aciklama = :aciklama, ilan_yas = :yas, ilan_cinsiyet = :cinsiyet, ilan_hayvan = :hayvan, ilan_sehir = :il, ilan_ilce = :ilce, ilan_url = :url, ilan_adsoyad = :adsoyad, ilan_telefon = :telefon, ilan_sahibi = :ilan_sahibi, ilan_kategori = :kategori');
        return $query->execute($data);

    }

}

?>

