<!DOCTYPE html>
<html>
function delete(id) {
    header('Location: /');
         }
</html>

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
    $mysqli = new mysqli($servername, $username, $password, $database);
    // Проверяем соединение
    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "Select * from tblPolscy WHERE txtSurname LIKE '$surname%' AND txtName LIKE '$user%' AND txtSecondname LIKE '$secname%' AND txtFrom LIKE '$province%' AND dateTime LIKE '$date%' AND txtWhere LIKE '$nadzor%' AND txtOrder LIKE '$prikaz%'";

    $info=array();
    echo '<table border="1">';
    echo '<td>'. "Id" .'</td>';
    echo '<td>'. "Приказ" .'</td>';
    echo '<td>'. "Фамилия" .'</td>';
    echo '<td>'. "Имя" .'</td>';
    echo '<td>'. "Отчество" .'</td>';
    echo '<td>'. "Губерния" .'</td>';
    echo '<td>'. "С какого времени" .'</td>';
    echo '<td>'. "Где учрежден надзор" .'</td>';
    echo '<td>'. "Редактировать" .'</td>';
    echo '<td>'. "Удалить" .'</td>';
    if($result = $mysqli->query($sql)){
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
            $info[7] = $row["txtFrom"];
            echo '<td>'. $info[7] .'</td>';
            $info[10] = $row["dateTime"];
            echo '<td>'. $info[10] .'</td>';
            $info[11] =  $row["txtWhere"];
            echo '<td>'. $info[11] .'</td>';
            echo '<td>'. '<input type="submit" name="red" class="button" value="Редактировать" />'  .'</td>';                  
            echo '<td>'. '<input type="submit" name="delete" class="button" value="Удалить" onclick= return delete($info[0])/>'  .'</td>';
            echo '</tr>';  
            }
        }
        echo '</table>'; 
    ?>
