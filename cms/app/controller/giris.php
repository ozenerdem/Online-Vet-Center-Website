<?php

$meta = [
    'title' => 'Giriş Yap'

];

if(post('submit')){
    $email = post('email');
    $password = post('password');


    if(!$email){
        $error = 'Lütfen e-posta adresinizi giriniz.';
    } elseif(!$password){
        $error = 'Lütfen şifrenizi giriniz.';
    }else{
        //Üyelik kontrolü
        $row = User::mailExist($email);
        if ($row){
            //parola kontrolü
            $password_verify = password_verify($password, $row['user_password']);
            if($password_verify){
                $success = 'Başarıyla giriş yaptınız.';
                User::Login($row);
                header('Refresh:2;url=' . site_url());
            }else{
                $error = 'Hatalı parola';
            }
        }else{
            $error = 'Hatalı email.';
        }
    }

}

require view('login');