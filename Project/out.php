<?php
    setcookie('user', $user['txtFIO'], time() - 3600, '/');
    header('Location: /~petrunin/project/polscy/Project/startpage.php');
?>