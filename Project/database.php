<?php 
$par1_ip = "";
$par2_name = "";
$par3_pas = "";
$par4_db = "";

$induction = mysqli_coonect($par1_ip,$par2_name,$par3_pas,$par4_db);

if ($induction == false)
{
    echo "Хьюстон, у нас проблемы с подключением к БД!";
}
?>
