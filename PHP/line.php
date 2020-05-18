<?php
 
require 'index.php';

//require 'Graphics_Charts/index.php';
$obj = new testPerf();
$obj->WebCon();

$nomPc=$obj->NomPcSQL;
if (isset($_POST['PC'])) {

// if (isset($_POST['Date'])) {
// }
// if (isset($_POST['PC'])) {
// 	echo 'NAME : ' . $_POST['PC'];
//}
$cpu=$obj->cpu_usage;
$ramMax=$obj->max_ram;
$ramFree=$obj->free_ram;
$ramUsed=$obj->used_ram;
$ramFreePercent=$obj->free_ram_percent;
$ramUsedPercent=$obj->used_ram_percent;
$CegidStart=$obj->cegid_start;
$CegidStop=$obj->cegid_stop;
$CegidDate=$obj->date_cegid;

var_dump($cpu);
var_dump($ramMax);
var_dump($ramFree);
var_dump($ramFreePercent);
var_dump($ramUsedPercent);
};
$dataPoints = array(
    //valeurs à modifier
	array("label"=> "Cpu Usage", "y"=>12),
	array("label"=> "Ram Usage", "y"=> 10),
	array("label"=> "Cegid Open", "y"=> 50),
	array("label"=> "Speed Test", "y"=> 10),
	array("label"=> "Drive Space", "y"=> 30)
);
	
?>

<!-- _______________________________________________________________________________________________ -->
<a href='Graphic.php'>Graphic</a>
<a href='pie.php'>Pie</a>
<a href='line.php'>Line</a>
<a href='column.php'>Column</a>
<a href='area.php'>Area</a>

  <main role="main">
    <div class="titlebar-container">
	<body>
      <div class="titlebar_pie">
      <form action="column.php" method="post"> Nom PC : <input type="text" id="NomPC" name="PC"><br />
                <form action="column.php" method="post"> Date : <input type="text" name="Date">
                <?php echo '<td bgcolor="#CCCCCC">' . $obj->NomPcSQL . '</td>' . '<br>';
                        if (isset($_POST['PC'])) {
                        echo 'NAME : ' . $_POST['PC'];
                    } ?>
                    <p>
                    <button class="button" style="vertical-align:middle"><span>Execute </span></button>
                  </p>
            
            </form>
            </form>
			<script>	
			window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer", {
			animationEnabled: true,
			exportEnabled: true,
			title:{
				text: "Supervision Gardette"
			},
			subtitles: [{
				text: "Statistiques Pc Gardette"
			}],
			data: [{
				type: "line",
				showInLegend: "true",
				legendText: "{label}",
				indexLabelFontSize: 16,
				indexLabel: "{label} - #percent%",
				yValueFormatString: "฿#,##0",
				dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
			}]
			});
			chart.render();
			chart1.render();
			}
			</script>
			<div id="chartContainer" style="height: 600px; width: 100%;"></div>
			<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
     
		
	</div>
	
	</body>
	</div>
</main>
</html>


