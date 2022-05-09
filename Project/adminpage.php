<!DOCTYPE html>
<?php 
  if(isset($_COOKIE['user']) == false): {
    header('Location: /~petrunin/project/polscy/Project/startpage.php');}
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
          
        <form action="out.php">
          <h1> База данных польских ссыльных            
            <button style="width:auto; margin-left: 60%; margin-top:0%;">Logout</button>            
          </h1>
        </form>
          <div class="navbar">
  <a href="startpage.php">Главная</a>
  <div class="dropdown">
    <button class="dropbtn"> Статистика 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="statistika.php">Статистика 1</a>
      <a href="#">Статистика 2</a>
      <a href="#">Статистика 3</a>
    </div>
  </div> 
</div>
          
         <div id="centerLayer">В данном разделе представлены документы о политической ссылке в Олонецкую губернию из окраинных губерний России с 1850-1870 года.</div>

    <div id="centerLayer"> Основной контингент ссыльных составляли церковнослужители (ксендзы),
         дворяне, бывшие офицеры Польской армии. Места водворения ссыльных - уездные города Олонецкой губернии.
    </div> 
          
      </aside>
    </header>
    
    
   
    <div id="content">
        <p></p>
        
   <form id="mainForm" onsubmit="mainFunс()"  method="post">
        
       
             
            <fieldset>
                

                <p><input type="text" placeholder="Имя" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="user" name="user" autocomplete="on"  autofocus>

                <input type="text" placeholder="Фамилия" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="surname" name="surname" >

                <input type="text" placeholder="Отчество" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="secname" name="secname" >


                <input type="text" placeholder="Губерния" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="province" name="province" >

                <input type="text" placeholder="С какого времени под надзором" id="date" name="date" >

                <input type="text" placeholder="Пол" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="sex" name="sex" >
                <input type="text" placeholder="Чин, звание" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="chin" name="chin" >
                <input type="text" placeholder="По какому распоряжению" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="forwhat" name="rasp" >
                <input type="text" placeholder="За что подвергнут" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="forwhat" name="forwhat" >
                <input type="text" placeholder="Сколько получает содержание" id="dengi" name="dengi" >
                <input type="text" placeholder="Семейное положение" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="sp" name="sp" >
                <input type="text" placeholder="Дополнительная информация" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="dop" name="dop" >
                <input type="text" placeholder="Поведение" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="pov" name="pov" >
                <input type="text" placeholder="Где учрежден надзор" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="nadzor" name="nadzor" >
                    <label for="prikaz">По какому приказу</label>
  <select name="prikaz" id="prikaz">
    <option value="">-</option>
    <option value="Ф., 1 Оп. 67, ед. хр. ½, 162 листа, за 1868 год">Ф., 1 Оп. 67, ед. хр. ½, 162 листа, за 1868 год</option>
    <option value="Ф., 1 Оп. 67, ед. хр. 1/3, 138 листа, за 1864 год">Ф., 1 Оп. 67, ед. хр. 1/3, 138 листа, за 1864 год</option>
    <option value="Ф., 1 Оп. 67, ед. хр. 1/4, 105 листа, за 1872 год">Ф., 1 Оп. 67, ед. хр. 1/4, 105 листа, за 1872 год</option>
    <option value="Ф., 1 Оп. 67, ед. хр. 1/5, 91 листа, за 1873 год">Ф., 1 Оп. 67, ед. хр. 1/5, 91 листа, за 1873 год</option>
    <option value="Ф., 1 Оп. 67, ед. хр. 1/7, 112 листов, за 1874 год">Ф., 1 Оп. 67, ед. хр. 1/7, 112 листов, за 1874 год</option>
    <option value="Ф., 1 Оп. 67, ед. хр. 1/11, 165 листов, за 1878 год">Ф., 1 Оп. 67, ед. хр. 1/11, 165 листов, за 1878 год</option>
    <option value="Ф., 1 Оп. 67, ед. хр. 1/8, 98 листов, за 1875 год">Ф., 1 Оп. 67, ед. хр. 1/8, 98 листов, за 1875 год</option>
    <option value="Ф., 1 Оп. 69, ед. хр. 1/2, 90 листов, за 1881 год">Ф., 1 Оп. 69, ед. хр. 1/2, 90 листов, за 1881 год</option>    
    <option value="Ф., 1 Оп. 69, ед. хр. 1/5, 49 листов, за 1893 год">Ф., 1 Оп. 69, ед. хр. 1/5, 49 листов, за 1893 год</option>
    <option value=">Ф., 1 Оп. 69, ед. хр. 1/6, 47 листов, за 1894 год">Ф., 1 Оп. 69, ед. хр. 1/6, 47 листов, за 1894 год</option>
    <option value="Ф., 1 Оп. 69, ед. хр. 1/8, 76 листов, за 1898 год">Ф., 1 Оп. 69, ед. хр. 1/8, 76 листов, за 1898 год</option>
    <option value="Ф., 1 Оп. 69, ед. хр. 1/9, 78 листов, за 1900 год">Ф., 1 Оп. 69, ед. хр. 1/9, 78 листов, за 1900 год</option>    
    <option value="Ф., 1 Оп. 69, ед. хр. 1/11, 292 листов, за 1907 год">Ф., 1 Оп. 69, ед. хр. 1/11, 292 листов, за 1907 год</option>
  </select>
  <?php
  if(isset($_POST['button1'])) {
      echo
      include 'adminconnect.php';
  }
  if(isset($_POST['button2'])) {
    echo
    include 'adminadd.php';
}

?>
  <input type="submit" name="button1"
  class="button" value="Поиск" />
  <input type="submit" name="button2"
  class="button" value="Добавить" />
                
            </fieldset>
    </form>
  </div>
  <div id="id01" class="modal">
  
  <form class="modal-content animate" action="out.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
      <img src="img_admin2.png" alt="Admin" class="admin">
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
    </footer> -->
    

</body>

</html> 
<?php endif; ?>