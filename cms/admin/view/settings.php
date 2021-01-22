<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Ayarlar
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-" tab>

        <div class="admin-tab">
            <ul tab-list>
                <li>
                    <a href="#">Genel</a>
                </li>
                <li>
                    <a href="#">Bakım Modu</a>
                </li>
                <li>
                    <a href="#">SMTP Mail</a>
                </li>
                <li>
                    <a href="#">Tema</a>
                </li>
            </ul>
        </div>

        <form action="" method="post" class="form label">
            <div class="tab-container">
                <div tab-content>
                    <ul>
                        <li>
                            <label>Site Title</label>
                            <div class="form-content">
                                <input type="text" name="settings[title]" value="<?= setting('title') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Site Description</label>
                            <div class="form-content">
                                <input type="text" name="settings[description]" value="<?= setting('description') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Site Keywords</label>
                            <div class="form-content">
                                <input type="text" name="settings[keywords]" value="<?= setting('keywords') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Site Teması</label>
                            <div class="form-content">
                                <select name="settings[theme]">
                                    <option value="">- tema seç -</option>
                                    <?php foreach ($themes as $theme): ?>
                                        <option <?=setting('theme') == $theme ? ' selected ' : null?> value="<?= $theme ?>"><?=$theme?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
                <div tab-content>
                    <ul>
                        <li>
                            <label>Bakım Modu Açık mı?</label>
                            <div class="form-content">
                                <select name="settings[maintenance_mode]">
                                    <option <?=setting('maintenance_mode') == 1 ? ' selected ' : null?> value="1">Evet</option>
                                    <option <?=setting('maintenance_mode') == 2 ? ' selected ' : null?> value="2">Hayır</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>Bakım Modu Title</label>
                            <div class="form-content">
                                <input type="text" name="settings[maintenance_mode_title]" value="<?= setting('maintenance_mode_title') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Bakım Modu Açıklama</label>
                            <div class="form-content">
                                <textarea name="settings[maintenance_mode_description]" cols="30" rows="5"><?= setting('maintenance_mode_description') ?></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
                <div tab-content>
                    <ul>
                        <li>
                            <label>SMTP Host</label>
                            <div class="form-content">
                                <input type="text" name="settings[smtp_host]" value="<?= setting('smtp_host') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP E-posta Adresi</label>
                            <div class="form-content">
                                <input type="text" name="settings[smtp_email]" value="<?= setting('smtp_email') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP E-posta Şifresi</label>
                            <div class="form-content">
                                <input type="password" id="password" name="settings[smtp_password]" value="<?= setting('smtp_password') ?>">
                                <img src="https://img.icons8.com/material-rounded/20/000000/visible.png" onclick="togglePassword()"/>
                            </div>
                        </li>
                        <li>
                            <label>SMTP Post</label>
                            <div class="form-content">
                                <input type="text" name="settings[smtp_port]" value="<?= setting('smtp_port') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Secure</label>
                            <div class="form-content">
                                <select name="settings[smtp_secure]">
                                    <option <?= setting('smtp_secure') == 'ssl' ? ' selected' : null ?> value="ssl">SSL</option>
                                    <option <?= setting('smtp_secure') == 'tls' ? ' selected' : null ?> value="tls">TLS</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>SMTP Gönderen <br> E-posta Adresi</label>
                            <div class="form-content">
                                <input type="text" name="settings[smtp_send_email]" value="<?= setting('smtp_send_email') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Gönderen <br> Ad-Soyad</label>
                            <div class="form-content">
                                <input type="text" name="settings[smtp_send_name]" value="<?= setting('smtp_send_name') ?>">
                            </div>
                        </li>
                    </ul>
                </div>
                <div tab-content>
                    <ul>
                        <li>
                            <label>Logo Başlığı</label>
                            <div class="form-content">
                                <input type="text" name="settings[logo]" value="<?= setting('logo') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Arama Input Placeholder</label>
                            <div class="form-content">
                                <input type="text" name="settings[search_placeholder]" value="<?= setting('search_placeholder') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Footer Hakkımda Yazısı</label>
                            <div class="form-content">
                                <textarea name="settings[about]" cols="30" rows="5"><?= setting('about') ?></textarea>
                            </div>
                        </li>
                        <li>
                            <label>Facebook URL</label>
                            <div class="form-content">
                                <input type="text" name="settings[facebook]" value="<?= setting('facebook') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Twitter URL</label>
                            <div class="form-content">
                                <input type="text" name="settings[twitter]" value="<?= setting('twitter') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Instagram URL</label>
                            <div class="form-content">
                                <input type="text" name="settings[instagram]" value="<?= setting('instagram') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Linkedin URL</label>
                            <div class="form-content">
                                <input type="text" name="settings[linkedin]" value="<?= setting('linkedin') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Hoşgeldin Başlığı</label>
                            <div class="form-content">
                                <input type="text" name="settings[welcome_title]" value="<?= setting('welcome_title') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Hoşgeldin İçeriği</label>
                            <div class="form-content">
                                <textarea name="settings[welcome_text]" cols="30" rows="5"><?= setting('welcome_text') ?></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Ayarları Kaydet</button>
                    </li>
                </ul>
            </div>
        </form>
    </div>

<?php require admin_view('static/footer') ?>