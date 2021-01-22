<?php

$meta = [
    'title' => 'Kayıt Ol'

];

if(post('submit')){
    $user_name = post("user_name");
    $surname = post("surname");
    $nickname = post('nickname');
    $email = post('email');
    $password = post('password');
    $password_again = post('password_again');

    if(!$user_name || !$surname || !$nickname || !$email || !$password || !$password_again){
        $error = 'Lütfen boş alan bırakmayınız!';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'Lütfen geçerli bir e-posta adresi yazınız.';
    } else if(strlen($password) < 8){
        $error = 'Şifreniz 8 karakterden kısa olamaz.';
    } else if ($password != $password_again){
        $error = 'Girdiğiniz şifreler eşleşmiyor.';
    }else{
        //Üyelik Kontrolü
        $row = User::userExist($nickname, $email);
        if($row){
            $error = 'Seçtiğiniz nickname ya da e-posta kullanılıyor. Lütfen yeni bir nickname ya da e-posta deneyin.  ';
        } else{
            //ÜYE EKLE
            $result = User::Register([
                'user_name' => $user_name,
                'surname' => $surname,
                'nickname' => $nickname,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'url' => permalink($nickname)
            ]);
            if($result){
                $success = 'Üyeliğiniz başarıyla oluşturuldu.';
                User::Login([
                    'user_id' => $db->lastInsertId(),
                    'user_email' => $email,
                    'user_nickname' => $nickname
                ]);
                header('Refresh:1;url=' . site_url());
            } else{
                $error = 'Bir sorun oluştu, lütfen daha sonra tekrar deneyin.';
            }
        }
    }

}

require view('register');