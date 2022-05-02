<?php
    $uname = filter_var(trim($_POST['uname']));
    $psw = filter_var(trim($_POST['psw']));

    $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

    $result = $mysql->query("SELECT * FROM 'users' WHERE 'uname' = '$uname' AND 'psw' = '$psw'");
    $user = $result->fetch_assoc();
    if(count($user) == 0)
    {
        echo "Пользователь не найден";
        exit();
    }
    setcookie('login', $uname['name'], time() + 3600, "/");

    $mysql->close();
    
    header('Location: /');
?>
