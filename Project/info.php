<!DOCTYPE html>
<?php 
  if(isset($_COOKIE['user']) == true): {
    header('Location: /~tiltevsk/polscy/Project/adminpage.php');}
  else: 
?>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="style2.css" type="text/css"/>
    <style>
  .btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
    background-color: #902923;
}
.btn:hover {background: #da190b;}
    </style>   
       
    <meta charset="utf-8"/>
    <title>Польские ссыльные</title>
    </head>

   
<body> 
 <header>
      <aside>
          
          <h1> База данных польских ссыльных
               <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-left: 60%; margin-top:0%;">Login</button>
            </h1>
          <div class="navbar">
  <a href="startpage.php">Главная</a>
      <a href="statistika.php">Статистика</a>
</div>
          
         <div id="centerLayer">В данном разделе представлены документы о политической ссылке в Олонецкую губернию из окраинных губерний России с 1850-1870 года.</div>

    <div id="centerLayer"> Основной контингент ссыльных составляли церковнослужители (ксендзы),
         дворяне, бывшие офицеры Польской армии. Места водворения ссыльных - уездные города Олонецкой губернии.
    </div> 
          
      </aside>
    </header>
    
    
   
    <div id="content">
        <p></p>
        
   <form id="mainForm" method="post">

        <fieldset>
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
    echo '<table border="1">';
    echo '<td>'. "Id" .'</td>';
    echo '<td>'. "Приказ" .'</td>';
    echo '<td>'. "Фамилия" .'</td>';
    echo '<td>'. "Имя" .'</td>';
    echo '<td>'. "Отчество" .'</td>';
    echo '<td>'. "Пол" .'</td>';
    echo '<td>'. "Чин, звание" .'</td>';
    echo '<td>'. "Откуда родом" .'</td>';
    echo '<td>'. "По какому распоряжению" .'</td>';
    echo '<td>'. "За что подвергнут надзору" .'</td>';
    echo '<td>'. "С какого времени" .'</td>';
    echo '<td>'. "Где учрежден надзор" .'</td>';
    echo '<td>'. "Сколько получает содержание" .'</td>';
    echo '<td>'. "Семейное положение" .'</td>';
    echo '<td>'. "Дополнительная информация" .'</td>';
    echo '<td>'. "Поведение" .'</td>';
    if($result = $conn->query($sql)){
    	foreach($result as $row){

            echo '<tr>';
            $info[0] = $row["idPolscy"];
            echo '<td>'. $info[0] .'</td>';
            $info[1] = $row["txtOrder"];
            echo '<td>'. $info[1] .'</td>';
            $info[2] = $row["txtSurname"];
            echo '<td>'. $info[2] .'</td>';
            $info[3] = $row["txtName"];
            echo '<td>'. $info[3] .'</td>';
            $info[4] = $row["txtSecondname"];
            echo '<td>'. $info[4] .'</td>';
            $info[5] = $row["txtSex"];
            echo '<td>'. $info[5] .'</td>';
            $info[6] = $row["txtJob"];
            echo '<td>'. $info[6] .'</td>';
            $info[7] = $row["txtFrom"];
            echo '<td>'. $info[7] .'</td>';
            $info[8] = $row["txtDocs"];
            echo '<td>'. $info[8] .'</td>';
            $info[9] = $row["txtArrest"];
            echo '<td>'. $info[9] .'</td>';
            $info[10] = $row["dateTime"];
            echo '<td>'. $info[10] .'</td>';
            $info[11] =  $row["txtWhere"];
            echo '<td>'. $info[11] .'</td>';
            $info[12] = $row["fltMoney"];
            echo '<td>'. $info[12] .'</td>';
            $info[13] = $row["txtFamily"];
            echo '<td>'. $info[13] .'</td>';
            $info[14] = $row["txtInfo"];
            echo '<td>'. $info[14] .'</td>';
            $info[15] = $row["txtAttestation"];
            echo '<td>'. $info[15] .'</td>';

            
            echo '</tr>';
           
          

            
            }
        }
        echo '</table>'; 


?>


<input type="button" onclick="history.back();" value="Назад"/>
            </fieldset>
    </form>
  </div>
  <div id="id01" class="modal">
  
  <form class="modal-content animate" action="auth.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
      <img src="img_admin2.png" alt="Admin" class="admin">
    </div>

    <div class="container">
      <label for="uname"><b>Логин</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Пароль</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>  
      
       
    <!-- <footer style="width: 98.5%; margin:10px"> 
        <address>      
         <p style = "float: right; "> &copy; Znatoki</p> 
        </address>
    </footer>
     -->

</body>
</html> 
<?php endif; ?>