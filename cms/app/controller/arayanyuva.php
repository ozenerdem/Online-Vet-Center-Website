<?php

$totalRecord = $db->from('ilanlar')
    ->select('count(ilan_id) as total')
    ->where('ilan_kategori','sahiplendirme')
    ->total();

$pageLimit = 3;
$pageParam = 'page';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from('ilanlar')
    //->join('users', '%s.user_id = %s.contact_read_user', 'left')
    ->where('ilan_kategori','sahiplendirme')
    ->orderby('ilan_id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])
    ->all();

require view('yuvaarayan');