<?php
    setcookie('user', $user['txtFIO'], time() - 3600, '/');
    header('Location: /~tiltevsk/polscy/Project/startpage.php');
?>