<?php
    session_start();
    $uname = filter_var(trim($_POST['uname']), FILTER_SANITIZE_STRING);
    $psw = filter_var(trim($_POST['psw']), FILTER_SANITIZE_STRING);


    $servername = "localhost";
    $database = "druzhini";
    $username = "druzhini";
    $password = "fa3Aphie";
    // Создаем соединение
    $mysql = mysqli_connect($servername, $username, $password, $database);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    if (!$mysql) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else echo "Connected successfully<br/>";
    $result = $mysql->query("SELECT * FROM `tblAdmin` WHERE `txtLogin` = '$uname' AND `txtPassword` = '$psw'");
    
    $user = $result->fetch_assoc();
    if(empty($user) or count($user) == 0)
    {
        echo "Пользователь не найден";
        exit();
    }
    // print_r($user);
    setcookie('user', $user['txtFIO'], time() + 3600, '/');

    $mysql->close();
    
    header('Location: /~petrunin/project/polscy/Project/adminpage.php');
?>
