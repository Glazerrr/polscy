<?php

$id = 56;
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
            echo 'id: '.$info[0].'<br>';
            
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
<textarea name="order">
    <?php echo $info[1]; ?>
</textarea>
<input type="submit" />
</form>
<?php
if(isset($_POST['order'])) {
    $info[1] = $_POST['order'];
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