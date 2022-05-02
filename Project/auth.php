<?php
    $uname = filter_var(trim($_POST['uname']));
    $psw = filter_var(trim($_POST['psw']));

    $servername = "localhost";
    $database = "druzhini";
    $username = "druzhini";
    $password = "fa3Aphie";
    // Создаем соединение
    $mysql = mysqli_connect($servername, $username, $password, $database);
    if (!$mysql) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully<br/>";
    $result = $mysql->query("SELECT * FROM 'tblAdmin' WHERE 'txtLogin' = '$uname' AND 'txtPassword' = '$psw'");
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
