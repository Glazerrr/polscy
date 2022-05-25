<!DOCTYPE html>
<?php 
  if(isset($_COOKIE['user']) == true): {
    header('Location: /~petrunin/project/polscy/Project/adminpage.php');}
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
                

                <p><label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Имя</label>
                  <input type="text" placeholder="Имя" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="user" name="user" autocomplete="on"  autofocus>
                  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Фамилия</label>
                <input type="text" placeholder="Фамилия" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="surname" name="surname" >
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Отчество</label>
                <input type="text" placeholder="Отчество" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="secname" name="secname" >

                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Губерния</label>
                <input type="text" placeholder="Губерния" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="province" name="province" >
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">С какого времени под надзором</label>
                <input type="text" placeholder="С какого времени под надзором" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" id="date" name="date" title="ГГГГ-ММ-ДД">
               
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Где учрежден надзор</label>
                <input type="text" placeholder="Где учрежден надзор" pattern="[A-Za-zА-Яа-яЁё]{2,30}" id="nadzor" name="nadzor" >
                    <label for="prikaz">По какому приказу</label><p></p>
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
  <p></p>
  <?php
  if(isset($_POST['button1'])) {
      echo
      include 'connect.php';
  }

?>
  <input type="submit" name="button1"
  class="button" value="Поиск" />
                
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