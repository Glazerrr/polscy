<?php 
$par1_ip = "kappa.cs.petrsu.ru";
$par2_name = "druzhini";
$par3_pas = "fa3Aphie";
$par4_db = "databases";

$induction = mysqli_coonect($par1_ip,$par2_name,$par3_pas,$par4_db);

if ($induction == false)
{
    echo "Хьюстон, у нас проблемы с подключением к БД!";
}
?>
/*Подключение к БД:
*1. ssh 'name'@kappa.cs.petrsu.ru
*2. mysql -u druzhini -p
*3. Password: fa3Aphie
*MariaDB:
*1.show databases;
*2. use druzhini
*3. show tables;
*/
