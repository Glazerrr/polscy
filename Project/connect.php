<?php

    $user = $_POST['user'];
    $surname = $_POST['surname'];
    $secname = $_POST['secname'];
    $province = $_POST['province'];
    $date = $_POST['date'];
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
    
    $sql = "Select * from tblPolscy WHERE txtSurname LIKE '$surname%' AND txtName LIKE '$user%' AND txtSecondname LIKE '$secname%' AND txtFrom LIKE '$province%' AND dateTime LIKE '$date%' AND txtWhere LIKE '$nadzor%' AND txtOrder LIKE '$prikaz%'";

    $info=array();
    $i=0;
    echo '<table border="1">';
    echo '<td>'. "Id" .'</td>';
    echo '<td>'. "Приказ" .'</td>';
    echo '<td>'. "Фамилия" .'</td>';
    echo '<td>'. "Имя" .'</td>';
    echo '<td>'. "Отчество" .'</td>';
    // echo '<td>'. "Пол" .'</td>';
    // echo '<td>'. "Чин, звание" .'</td>';
    echo '<td>'. "Губерния" .'</td>';
    // echo '<td>'. "По какому распоряжению" .'</td>';
    // echo '<td>'. "За что подвергнут надзору" .'</td>';
    echo '<td>'. "С какого времени" .'</td>';
    echo '<td>'. "Где учрежден надзор" .'</td>';
    // echo '<td>'. "Сколько получает содержание" .'</td>';
    // echo '<td>'. "Семейное положение" .'</td>';
    // echo '<td>'. "Дополнительная информация" .'</td>';
    // echo '<td>'. "Поведение" .'</td>';
    if($result = $conn->query($sql)){
    	foreach($result as $row){

            echo '<tr>';
            $info[0] = $row["idPolscy"];
            echo '<td>'.'<a href="info.php?type='. $info[0] .'">'. $info[0] . '</a>'.'</td>';
            $info[1] = $row["txtOrder"];
            echo '<td>'. $info[1] .'</td>';
            $info[2] = $row["txtSurname"];
            echo '<td>'. $info[2] .'</td>';
            $info[3] = $row["txtName"];
            echo '<td>'. $info[3] .'</td>';
            $info[4] = $row["txtSecondname"];
            echo '<td>'. $info[4] .'</td>';
            // $info[5] = $row["txtSex"];
            // echo '<td>'. $info[5] .'</td>';
            // $info[6] = $row["txtJob"];
            // echo '<td>'. $info[6] .'</td>';
            $info[7] = $row["txtFrom"];
            echo '<td>'. $info[7] .'</td>';
            // $info[8] = $row["txtDocs"];
            // echo '<td>'. $info[8] .'</td>';
            // $info[9] = $row["txtArrest"];
            // echo '<td>'. $info[9] .'</td>';
            $info[10] = $row["dateTime"];
            echo '<td>'. $info[10] .'</td>';
            $info[11] =  $row["txtWhere"];
            echo '<td>'. $info[11] .'</td>';
            // $info[12] = $row["fltMoney"];
            // echo '<td>'. $info[12] .'</td>';
            // $info[13] = $row["txtFamily"];
            // echo '<td>'. $info[13] .'</td>';
            // $info[14] = $row["txtInfo"];
            // echo '<td>'. $info[14] .'</td>';
            // $info[15] = $row["txtAttestation"];
            // echo '<td>'. $info[15] .'</td>';

            
            echo '</tr>';
           
          

            
            }
        }
        echo '</table>'; 

 
?>