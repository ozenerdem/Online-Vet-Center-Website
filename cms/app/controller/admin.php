<?php

if (!route(1)){
    $route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))){
    $route[1] = 'index';
}

if (!session('user_rank') || session('user_rank') == 3){
    $route[1] = 'login';
}

$menus = [
    'index' => [
        'title' => 'Anasayfa',
        'icon' => 'tachometer',
        'permissions' => [
            'show' => 'Görüntüleme'
        ]
    ],
    'users' => [
        'title' => 'Üyeler',
        'icon' => 'user',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
//        'submenu' => [
//            'users' => 'Üyeleri Liste'
//        ]
    ],
    'contact' => [
        'title' => 'İletişim Mesajları',
        'icon' => 'envelope',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme',
            'send' => 'Gönderme',
            'delete' => 'Silme'
        ]
    ],
    'categories' => [
        'title' => 'Kategoriler',
        'icon' => 'folder',
        'permissions' => [
            'show' => 'Görüntüleme',
            'add' => 'Ekleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ],
    'pages' => [
        'title' => 'Sayfalar',
        'icon' => 'file',
        'permissions' => [
            'show' => 'Görüntüleme',
            'add' => 'Ekleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ],
    'menu' => [
        'title' => 'Menü Yönetimi',
        'icon' => 'bars',
        'permissions' => [
            'show' => 'Görüntüleme',
            'add' => 'Ekleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ],
    'settings' => [
        'title' => 'Ayarlar',
        'icon' => 'cog',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme'
        ]
    ]
];

require admin_controller(route(1));