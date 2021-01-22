<?php

$meta = [
    'title' => 'İlan Ekle'

];
if ($_SESSION['user_id']) {
    if (post('submit')) {
        $baslik = post("baslik");
        $aciklama = post("aciklama");
        $yas = post('yas');
        $cinsiyet = post('cinsiyet');
        $hayvan = post('hayvan');
        $il = post('il');
        $ilce = post('ilce');
        $adsoyad = post('adsoyad');
        $telefon = post('telefon');
        $ilan_sahibi = $_SESSION['user_id'];
        $kategori = post('kategori');

        if (!$baslik || !$aciklama || !$aciklama || !$cinsiyet || !$hayvan || !$il || !$ilce || !$adsoyad || !$telefon) {
            $error = 'Lütfen boş alan bırakmayınız!';
        } else if (strlen($telefon) < 10) {
            $error = 'Lütfen geçerli bir telefon numarası giriniz.';
        } else {
            //İLAN EKLE
            $result = ilan::ilanEkle([
                'baslik' => $baslik,
                'aciklama' => $aciklama,
                'yas' => $yas,
                'cinsiyet' => $cinsiyet,
                'hayvan' => $hayvan,
                'il' => $il,
                'ilce' => $ilce,
                'url' => permalink($_SESSION['user_nickname'] . $baslik),
                'adsoyad' => $adsoyad,
                'telefon' => $telefon,
                'ilan_sahibi' => $ilan_sahibi,
                'kategori' => $kategori
            ]);

            if ($result) {
                $success = 'İlan başarıyla oluşturuldu.';
                header('Refresh:2;url=' . site_url());
            } else {
                $error = 'Bir sorun oluştu, lütfen daha sonra tekrar deneyin.';
            }
        }


    }

    require view('ilanEkle');
} else{
    header('Refresh:1;url=' . site_url());
}
