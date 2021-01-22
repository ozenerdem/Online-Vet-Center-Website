<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $meta['title'] ?></title>
    <?php if (isset($meta['description'])): ?>
        <meta name="description" content="<?= $meta['description'] ?>">
    <?php endif; ?>
    <?php if (isset($meta['keywords'])): ?>
        <meta name="keywords" content="<?= $meta['keywords'] ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
        var api_url = '<?=site_url('api')?>';
    </script>
    <script src="<?= public_url('scripts/api.js') ?>"></script>

    <style>
        body {
            background: rgb(227, 202, 253);
            background: radial-gradient(circle, rgba(227, 202, 253, 0.7707457983193278) 0%, rgba(255, 255, 255, 1) 100%);;
            background-image: url(<?= public_url('images/bg.png') ?>);
            font-family: Arial, Helvetica, sans-serif;
        }

        .card {
            display: block;
            height: 330px;
            margin: 1rem;
            top: 6%;
            width: 300px;
            float: right;
            background: rgb(231, 226, 237);
            background: linear-gradient(301deg, rgba(231, 226, 237, 1) 0%, rgba(255, 255, 255, 1) 100%);
            opacity: 70%;
            box-shadow: rgb(180, 180, 180);


        }

        .card-1 {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
        }


        .card-1:hover {
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            opacity: 90%;
        }

        .container-1 {
            margin: 10%;
            color: #2c2a4a;
        }

        .container-2 {
            margin: 1rem;
            color: #2c2a4a;
        }
        .containeryuva{
            float: right;
            width: calc(100% - 15%);
            text-align: center;
            justify-content: center;
            margin: auto;
            margin-top: 2%;
        }

        .button {
            width: 100px;
            height: 40px;
            border-color: rgb(8, 8, 8);
            background: #fff;
            border-radius: 20px;
            color: #0A1128;
            box-shadow: 0 1px 3px rgba(180, 179, 179, 0.12), 0 1px 2px rgba(255, 255, 255, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
            margin-left: 30%;
        }

        .button:hover {
            box-shadow: 0 14px 28px rgba(59, 59, 59, 0.25), 0 10px 10px rgba(8, 8, 8, 0.22);
            background-color: #570b83;
            border-color: #3d0066;
        }

        .sign_in {
            display: block;
            height: auto;
            width: 350px;
            background-color: #fff;
            opacity: 70%;
            box-shadow: rgb(180, 180, 180);
            float: right;
            margin: 1rem;
            border: 5px;
            border-color: #230c33;
        }

        .sign_in:hover {
            box-shadow: 0 14px 28px rgba(29, 29, 29, 0.25), 0 10px 10px rgba(7, 7, 7, 0.22);
            opacity: 90%;
        }

        .button-2 {
            width: 150px;
            height: 40px;
            border-color: rgb(5, 5, 5);
            background: #fff;
            border-radius: 20PX;
            color: #000000;
            box-shadow: 0 1px 3px rgba(180, 179, 179, 0.12), 0 1px 2px rgba(255, 255, 255, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
            margin-right: 5%;
            font-family: Arial, Helvetica, sans-serif;
        }

        .button-2:hover {
            box-shadow: 0 14px 28px rgba(51, 51, 51, 0.25), 0 10px 10px rgba(5, 5, 5, 0.22);
            background-color: #570b83;
            border-color: #3d0066;
            color: #fff;
        }

        .button-3 {
            width: 150px;
            height: 40px;
            border-color: rgb(0, 0, 0);
            background: #fff;
            border-radius: 20px;
            color: #000000;
            box-shadow: 0 1px 3px rgba(180, 179, 179, 0.12), 0 1px 2px rgba(24, 23, 23, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
            margin-left: auto;
            margin-right: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .button-3:hover {
            box-shadow: 0 14px 28px rgba(39, 39, 39, 0.25), 0 10px 10px rgba(15, 12, 12, 0.22);
            background-color: #570b83;
            border-color: #3d0066;
            color: #fff;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #592e83;
            position: absolute;
            height: 100%;
            overflow: auto;
            opacity: 80%;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 16px;
            text-decoration: none;
        }


        .sidebar a:hover {
            background-color: #230c33;
            color: white;
            opacity: 100%;
        }
        .yuvacard {
            width: 95%;
            height: 300px;
            background-color: #592e83;
            opacity: 80%;
            border-radius: 10px;
        }

        .yuvacard:hover {
            box-shadow: 0 14px 28px rgba(59, 59, 59, 0.25), 0 10px 10px rgba(8, 8, 8, 0.22);
            opacity: 100%;
        }

        .yuvacard p {
            color: #fff;

        }
        .pagination {
            text-align: center;
            padding-top: 20px;
            line-height: 30px;
        }
        .pagination ul {
            display: inline-block;
        }
        ol, ul {
            list-style: none;
        }
        .pagination ul li {
            float: left;
            margin: 0 5px;
        }
        .pagination ul li.active a {
            background-color: #592E83;
            opacity: 80%;
            color: #fff;
        }
        .pagination ul li a {
            display: block;
            padding: 0 15px;
            line-height: 35px;
            border-radius: 2px;
            background: #eee;
            background: rgba(0,0,0,0.05);
            font-weight: 400;
            color: #222;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

<div id="app">
    <nav class="navbar navbar-expand-sm "
         style="color:#fff !important; background-color:  #592e83; border-bottom-right-radius: 20px; opacity: 80%; font-family: Arial, Helvetica, sans-serif; font-size: 20px;">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="<?= site_url() ?>">
            <img src="<?= public_url('images/LOGO.png') ?>" alt="logo"
                 style="width:100px; margin-right: 50px; margin-left: 40px;">
        </a>
        <!-- Links -->
        <ul class="navbar-nav">
            <?php foreach (menu(1) as $key => $menu): ?>
                <li class="nav-item<?= isset($menu['submenu']) ? ' dropdown' : null ?>"
                    style="margin-right: 40px; margin-left: 70px;">
                    <?php if (isset($menu['submenu'])): ?>
                        <a class="nav-link dropdown-toggle" href="<?= site_url($menu['url']) ?>"

                           data-toggle="dropdown" style="color: #fff;">

                            <?= htmlspecialchars_decode($menu['title']) ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($menu['submenu'] as $k => $submenu): ?>
                                <a class="dropdown-item"
                                   href="<?= site_url($submenu['url']) ?>"><?= htmlspecialchars_decode($submenu['title']) ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <a class="nav-link" style="color: #fff;"
                           href="<?= site_url($menu['url']) ?>"><?= htmlspecialchars_decode($menu['title']) ?></a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php if (session('user_id')): ?>
            <div class="dropdown" style="position: absolute; right: 25px;">
                <button class="button-2 btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= session('user_nickname') ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= site_url('profil') ?>">Profil</a>
                    <a class="dropdown-item" href="<?= site_url('mesajlarim') ?>">Mesajlarım</a>
                    <a class="dropdown-item" href="<?= site_url('ekleilan') ?>">İlan Ekle</a>
                    <a class="dropdown-item" href="<?= site_url('ilanlarim') ?>">İlanlarım</a>
                    <a class="dropdown-item" href="<?= site_url('cikis') ?>">Çıkış Yap</a>
                </div>
            </div>
        <?php else: ?>
            <div style="position: absolute; right: 175px;">
                <a href="<?= site_url('giris') ?>">
                    <button class="button-2" type="submit">GİRİŞ YAP</button>
                </a>
            </div>
            <div style="position: absolute; right: 25px;">
                <a href="<?= site_url('kayit') ?>">
                    <button class="button-2" type="submit">KAYIT OL</button>
                </a>
            </div>
        <?php endif; ?>
    </nav>
    <div class="sidebar">

        <?php foreach (menu(2) as $key => $menu): ?>
            <!-- <a class="<?php // isset($menu['submenu']) ? ' dropdown' : null ?>"> -->
                <?php if (isset($menu['submenu'])): ?>
                    <a class="dropdown-toggle" href="<?= site_url($menu['url']) ?>"

                       data-toggle="dropdown" style="color: #fff;">
                        <?= htmlspecialchars_decode($menu['title']) ?>
                    </a>
                    <div class="dropdown-menu">
                        <?php foreach ($menu['submenu'] as $k => $submenu): ?>
                            <a class="dropdown-item" style="color: #7A589C;"
                               href="<?= site_url($submenu['url']) ?>"><?= htmlspecialchars_decode($submenu['title']) ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <a class="nav-link" style="color: #fff;"
                       href="<?= site_url($menu['url']) ?>"><?= htmlspecialchars_decode($menu['title']) ?></a>
                <?php endif; ?>
            </a>
        <?php endforeach; ?>

    </div>