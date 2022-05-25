<?php 
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
  
    $sql = "select count(txtSex) from tblPolscy Where txtSex = 'Мужской'";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $boy = $row["count(txtSex)"];
      }
    }

    $sql = "select count(txtSex) from tblPolscy Where txtSex = 'Женский'";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $woman = $row["count(txtSex)"];
      }
    }

    $sql = "select count(txtJob) from tblPolscy  WHERE txtJob = 'Дворянин'";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $dvor = $row["count(txtJob)"];
      }
    }
    
    $sql = "select count(txtJob) from tblPolscy  WHERE txtJob = 'Мещанин'";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $mesh = $row["count(txtJob)"];
      }
    }

    $sql = "select count(txtJob) from tblPolscy WHERE txtJob NOT LIKE 'Мещанин' AND txtJob NOT LIKE 'Дворянин';";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $rab = $row["count(txtJob)"];
      }
    }

    $sql = "Select count(txtFamily) From tblPolscy WHERE txtFamily = 'Холост' OR txtFamily = 'Не имеет' OR txtFamily = 'Не имел';";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $holost = $row["count(txtFamily)"];
      }
    }

    $sql = "Select count(txtFamily) From tblPolscy WHERE txtFamily = 'Женат';";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $zhenat = $row["count(txtFamily)"];
      }
    }

    $sql = "Select count(txtFamily) From tblPolscy WHERE txtFamily = 'Девица';";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $dev = $row["count(txtFamily)"];
      }
    }

    $sql = "Select count(txtFamily)
    From tblPolscy
    WHERE txtFamily = 'Замужем';";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $zam = $row["count(txtFamily)"];
      }
    }

    $sql = "Select count(txtFamily)
    From tblPolscy
    WHERE txtFamily = 'Неизвестно';";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $neizv = $row["count(txtFamily)"];
      }
    }
    $from=array();
    $i=0;
    $sql = "select distinct(txtFrom) from tblPolscy;";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $from[$i] = $row["txtFrom"];
       
        $i=$i+1;
      }
    }
    $fromcount=array();
    for ($j = 0; $j < $i; $j++){
      $sql = "select count(txtFrom) from tblPolscy
      WHERE txtFrom = '$from[$j]';";
      if($result = $conn->query($sql)){
        foreach($result as $row){
          $fromcount[$j]= $row["count(txtFrom)"];
        }
      }
    }

    $where=array();
    $l=0;
    $sql = "select distinct(txtWhere) from tblPolscy;";
    if($result = $conn->query($sql)){
    	foreach($result as $row){
        $where[$l] = $row["txtWhere"];
        $l=$l+1;
      }
    }
    
    $wherecount=array();
    for ($k = 0; $k < $l; $k++){
      $sql = "select count(txtWhere) from tblPolscy
      WHERE txtWhere = '$where[$k]';";
      if($result = $conn->query($sql)){
        foreach($result as $row){
          $wherecount[$k]= $row["count(txtWhere)"];
        }
      }
    }
    
?>
<!DOCTYPE html>
<html lang="ru">
<head>

    <title>Польские ссыльные</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="style2.css" type="text/css"/>
<style>
.fig {
    text-align: center; /* Выравнивание по центру */ 
   }
</style>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.

      google.charts.setOnLoadCallback(drawChart1);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);
      google.charts.setOnLoadCallback(drawChart4);
      google.charts.setOnLoadCallback(drawChart5);
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart1() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Мужчины', <?=$boy?>],
          ['Женщины', <?=$woman?>],
          
        ]);

        // Set chart options
        var options = {'title':'Кол-во мужчин и женщин',
                       'width':1280,
                       'height':720};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
      function drawChart2() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Дворянин', <?=$dvor?>],
          ['Мещанин', <?=$mesh?>],
          ['Рабочий ', <?=$rab?>],
        ]);

        // Set chart options
        var options = {'title':'Социальные классы',
                      'width':1280,
                      'height':720};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart3_div'));
        chart.draw(data, options);
        }
        function drawChart3() {

// Create the data table.
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          data.addRows([
            ['Холост', <?=$holost?>],
            ['Женат', <?=$zhenat?>],
            ['Девица ', <?=$dev?>],
            ['Замужем ', <?=$zam?>],
            ['Неизвестно ', <?=$neizv?>],
          ]);

          // Set chart options
          var options = {'title':'Семейное положение',
                        'width':1280,
                        'height':720};

          // Instantiate and draw our chart, passing in some options.
          var chart = new google.visualization.PieChart(document.getElementById('chart2_div'));
          chart.draw(data, options);
          }

          function drawChart4() {

// Create the data table.
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          
          <?php for ($j = 0; $j< $i; $j++){?>

            data.addRows([[<?="'$from[$j]'"?>, <?=$fromcount[$j]?>]]);

            <?php }?>
          // Set chart options
          var options = {'title':'Откуда родом',
                        'width':1280,
                        'height':720};

          // Instantiate and draw our chart, passing in some options.
          var chart = new google.visualization.PieChart(document.getElementById('chart4_div'));
          chart.draw(data, options);
          }
          function drawChart5() {

// Create the data table.
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          
          <?php for ($k = 0; $k< $l; $k++){?>

            data.addRows([[<?="'$where[$k]'"?>, <?=$wherecount[$k]?>]]);

            <?php }?>
          // Set chart options
          var options = {'title':'Куда сослали',
                        'width':1280,
                        'height':720};

          // Instantiate and draw our chart, passing in some options.
          var chart = new google.visualization.PieChart(document.getElementById('chart5_div'));
          chart.draw(data, options);
          }
                
    </script>
</head>
<body>
 <header>
      <aside>
          
        <form>
        <h1> База данных польских ссыльных
              
            </h1>
        </form>
          <div class="navbar">
  <a href="startpage.php">Главная</a>
      <a href="statistika.php">Статистика</a>
</div>
<div id="content">
        <p></p>
        
   <form id="mainForm" method="post">

        <fieldset>
        
    <div id="chart_div"></div>
    <div id="chart2_div"></div>
    <div id="chart3_div"></div>
    <div id="chart4_div"></div>
    <div id="chart5_div"></div>
        </fieldset>
        </form>
        </div>
      </aside>
    </header>
    
 <!-- <p class="fig"><img src="di.png" 
   width="1090" height="800" alt="Фотография"></p> -->

 
</body>
</html>

