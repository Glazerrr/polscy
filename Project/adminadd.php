<?php

    $user = $_POST['user'];
    $surname = $_POST['surname'];
    $secname = $_POST['secname'];
    $province = $_POST['province'];
    $date = $_POST['date'];
    $sex = $_POST['sex'];
    $chin = $_POST['chin'];
    $forwhat = $_POST['forwhat'];
    $dengi = $_POST['dengi'];
    $rasp = $_POST['rasp'];
    $sp = $_POST['sp'];
    $dop = $_POST['dop'];
    $pov = $_POST['pov'];
    $nadzor = $_POST['nadzor'];
    $prikaz = $_POST['prikaz'];
    
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
    $sql = "Select count(idPolscy) From tblPolscy";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $count = $row["count(idPolscy)"];
      }
    }
    $count=$count+1;
    
    $sql = "insert into tblPolscy(idPolscy , txtOrder, txtSurname , txtName, txtSecondname, txtSex, txtJob, txtFrom, txtDocs, txtArrest, dateTime, txtWhere, fltMoney, txtFamily, txtInfo, txtAttestation) VALUES ('$count','$prikaz','$surname','$user','$secname','$sex', '$chin', '$province', '$rasp', '$forwhat', '$date', '$nadzor', $dengi, '$sp', '$dop','$pov')";
    echo '<table border="1">';
    echo '<td>'. "Id" .'</td>';
    echo '<td>'. "Приказ" .'</td>';
    echo '<td>'. "Фамилия" .'</td>';
    echo '<td>'. "Имя" .'</td>';
    echo '<td>'. "Отчество" .'</td>';
    echo '<td>'. "Губерния" .'</td>';
    echo '<td>'. "С какого времени" .'</td>';
    echo '<td>'. "Где учрежден надзор" .'</td>';
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

 
?>