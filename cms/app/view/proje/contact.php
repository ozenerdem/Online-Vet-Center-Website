<?php require view('static/header') ?>


<div class="container" style="margin-top: 50px">
    <form action="" id="contact-form" onsubmit="return false;">
        <div class="alert alert-danger" style="display: none" id="contact-error-msg" role="alert"></div>
        <div class="alert alert-success" style="display: none" id="contact-success-msg" role="alert"></div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Ad-Soyad</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">E-posta Adresi</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Telefon Numarası</label>
                    <input type="text" class="form-control" name="phone" id="phone">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="subject">Mesaj Konusu</label>
                    <input type="text" class="form-control" name="subject" id="subject">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="message">Mesaj İçeriği</label>
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <button type="submit" onclick="contact('#contact-form')" class="button-2">Gönder</button>
            </div>

        </div>
    </form>
</div>

<?php require view('static/footer') ?>
