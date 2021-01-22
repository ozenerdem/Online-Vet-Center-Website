<?php

class User
{
    public static function Login($data)
    {
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['user_email'] = $data['user_email'];
        $_SESSION['user_nickname'] = $data['user_nickname'];
        $_SESSION['user_rank'] = $data['user_rank'];
        $_SESSION['user_permissions'] = $data['user_permissions'];

    }

    public static function userExist($nickname, $email)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE user_nickname = :nickname || user_email = :email');
        $query->execute([
            'nickname' => $nickname,
            'email' => $email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);

    }

    public static function Register($data)
    {
        global $db;
        $query = $db->prepare('INSERT INTO users SET user_name = :user_name, user_surname = :surname, user_nickname = :nickname, user_url = :url, user_email = :email, user_password = :password');
        return $query->execute($data);
    }

    public static function mailExist($email)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE user_email = :email');
        $query->execute([
            'email' => $email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);

    }


}