<?php require admin_view('static/header') ?>

<!--login screen-->
<body style="background: black">
<div class="login-screen" style="background: black">

    <!--login logo-->
    <div class="login-logo">
        <a href="#">
            <img src="<?= public_url('images/LOGO.png') ?>" alt="">
        </a>
    </div>

    <?php if (isset($error)): ?>
        <div class="message error box-">
            <?= $error ?>
        </div>
    <?php endif; ?>

    <form action="" method="post" style="background: black">
        <ul>
            <li>
                <label for="username">Kullanıcı Nickname</label>
                <input type="text" name="user_nickname">
            </li>
            <li>
                <label for="password">Şifreniz</label>
                <input type="password" name="user_password">
            </li>
            <li>
                <button name="submit" value="1" type="submit">Giriş Yap</button>
            </li>
        </ul>
    </form>

</div>
</body>
<?php require admin_view('static/footer') ?>