<?php
    $user = $_POST['user'];
    $surname = $_POST['surname'];
    $secname = $_POST['secname'];
    $province = $_POST['province'];
    $date = $_POST['date'];
    $nadzor = $_POST['nadzor'];
    $prikaz = $_POST['prikaz'];
    print "Имя: $user<br/>";
    print "Фамилия: $surname<br/>";
    print "Отчество: $secname<br/>";
    print "Губерния: $province<br/>";
    print "Когда учрежден надзор: $date<br/>";
    print "Где учрежден надзор: $nadzor<br/>";
    print "По какому приказу $prikaz<br/>";
    $servername = "localhost";
    $database = "druzhini";
    $username = "druzhini";
    $password = "fa3Aphie";
    // Создаем соединение
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully<br/>";
    $sql = "Select * from tblPolscy WHERE txtSurname LIKE '$surname%' AND txtName LIKE '$user%' AND txtSecondname LIKE '$secname%' AND txtFrom LIKE '$province%' AND dateTime LIKE '$date%' AND txtWhere LIKE '$nadzor%'";
	if($result = $conn->query($sql)){
    	foreach($result as $row){
        $userid = $row["idPolscy"];
        $txtJob = $row["txtJob"];
        
	print "$userid ";
    print "$txtJob<br/>";
    }
} 
 
?>