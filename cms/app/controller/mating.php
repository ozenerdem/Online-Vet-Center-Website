<?php

$totalRecord = $db->from('ilanlar')
    ->select('count(ilan_id) as total')
    ->where('ilan_kategori','ciftlestirme')
    ->total();

$pageLimit = 3;
$pageParam = 'page';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from('ilanlar')
    ->where('ilan_kategori','çiftleştirme')
    //->join('users', '%s.user_id = %s.contact_read_user', 'left')
    ->orderby('ilan_id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])
    ->all();

require view('ciftlestirme');