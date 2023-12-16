<?php 
    if (!$_COOKIE['user']) {
        setcookie('user', 'Да', time() + 3600, '/');
        header('Location: /');
    } else {
        setcookie('user', 'Да', time() - 3600, '/');
        header('Location: /');
    }
