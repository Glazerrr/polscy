<?php

$id = $_GET["type"];
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

$sql = "Select * from tblPolscy WHERE idPolscy = '$id'";

$info=array();
    $i=0;
    if($result = $conn->query($sql)){
    	foreach($result as $row){

            $info[0] = $row["idPolscy"];
            
            
            $info[1] = $row["txtOrder"];
            
            $info[2] = $row["txtSurname"];
           
            $info[3] = $row["txtName"];
            
            $info[4] = $row["txtSecondname"];   
            
            $info[5] = $row["txtSex"];
            
            $info[6] = $row["txtJob"];
            
            $info[7] = $row["txtFrom"];
            
            $info[8] = $row["txtDocs"];
           
            $info[9] = $row["txtArrest"];
            
            $info[10] = $row["dateTime"];
            
            $info[11] =  $row["txtWhere"];
            
            $info[12] = $row["fltMoney"];
            
            $info[13] = $row["txtFamily"];
            
            $info[14] = $row["txtInfo"];
           
            $info[15] = $row["txtAttestation"];
          

            
            }
        }
        

        ?>
        <form method="post">
        <p>id: <?php echo $info[0];?><br></p>
        Приказ<br>
        <textarea name="order" cols="40" rows="5" style="resize: none;"><?php echo $info[1]; ?></textarea><br>
        Фамилия<br>
        <textarea name="surname" cols="40" rows="5" style="resize: none;"><?php echo $info[2]; ?></textarea><br>
        Имя<br>
        <textarea name="name" cols="40" rows="5" style="resize: none;"><?php echo $info[3]; ?></textarea><br>
        Отчество<br>
        <textarea name="secondname" cols="40" rows="5" style="resize: none;"><?php echo $info[4]; ?></textarea><br>
        Пол<br>
        <textarea name="sex" cols="40" rows="5" style="resize: none;"><?php echo $info[5]; ?></textarea><br>
        Чин/Звание<br>
        <textarea name="job" cols="40" rows="5" style="resize: none;"><?php echo $info[6]; ?></textarea><br>
        Откуда родом<br>
        <textarea name="from" cols="40" rows="5" style="resize: none;"><?php echo $info[7]; ?></textarea><br>
        По какому распоряжению<br>
        <textarea name="docs" cols="40" rows="5" style="resize: none;"><?php echo $info[8]; ?></textarea><br>
        За что подвергнут надзору<br>
        <textarea name="arrest" cols="40" rows="5" style="resize: none;"><?php echo $info[9]; ?></textarea><br>
        С какого времени<br>
        <textarea name="date" cols="40" rows="5" style="resize: none;"><?php echo $info[10]; ?></textarea><br>
        Где учрежден надзор<br>
        <textarea name="where" cols="40" rows="5" style="resize: none;"><?php echo $info[11]; ?></textarea><br>
        Сколько получает содержание<br>
        <textarea name="money" cols="40" rows="5" style="resize: none;"><?php echo $info[12]; ?></textarea><br>
        Семейное положение<br>
        <textarea name="family" cols="40" rows="5" style="resize: none;"><?php echo $info[13]; ?></textarea><br>
        Дополнительная информация<br>
        <textarea name="info" cols="40" rows="5" style="resize: none;"><?php echo $info[14]; ?></textarea><br>
        Поведение<br>
        <textarea name="attestation" cols="40" rows="5" style="resize: none;"><?php echo $info[15]; ?></textarea><br>
        <input type=submit value="Сохранить" name="save"></input>
        <?php
if(isset($_POST['order'])) {
    $info[1] = $_POST['order'];
    $info[2] = $_POST['surname'];
    $info[3] = $_POST['name'];
    $info[4] = $_POST['secondname'];
    $info[5] = $_POST['sex'];
    $info[6] = $_POST['job'];
    $info[7] = $_POST['from'];
    $info[8] = $_POST['docs'];
    $info[9] = $_POST['arrest'];
    $info[10] = $_POST['date'];
    $info[11] = $_POST['where'];
    $info[12] = $_POST['money'];
    $info[13] = $_POST['family'];
    $info[14] = $_POST['info'];
    $info[15] = $_POST['attestation'];

    $sql = "Update tblPolscy 
            Set txtOrder = '$info[1]', 
            txtSurname = '$info[2]', 
            txtName = '$info[3]', 
            txtSecondname = '$info[4]', 
            txtSex = '$info[5]',
            txtJob = '$info[6]', 
            txtFrom ='$info[7]', 
             txtDocs = '$info[8]', 
            txtArrest ='$info[9]', 
             dateTime = '$info[10]', 
            txtWhere ='$info[11]', 
            fltMoney = $info[12], 
            txtFamily = '$info[13]', 
            txtInfo = '$info[14]', 
             txtAttestation = '$info[15]'
            Where idPolscy =$info[0]";
            if ($conn->query($sql) === TRUE) {
                echo "New record updated successfully";

              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
              echo('Значение текстового поля: ' . htmlspecialchars($_POST['order']));
        
        }

?>
        <input type=submit value="Отменить" name="cancel"></input>
        </form>
        

