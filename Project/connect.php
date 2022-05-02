
<?php
    $user=$_POST['user'];
    $surname=$_POST['surname'];
    $secname=$_POST['secname'];
    $province=$_POST['province'];
    $date=$_POST['date'];
    $nadzor=$_POST['nadzor'];
    print "Имя: $user<br/>";
    print "Фамилия: $surname<br/>";
    print "Отчество: $secname<br/>";
    print "Губерния: $province<br/>";
    print "Когда учрежден надзор: $date<br/>";
    print "Где учрежден надзор: $nadzor<br/>";

?>