<?php
$query = "select date(Offense_Date) as OffenseDate, COUNT(date(`Offense_Date`)) offence_count from offense where DATE(Offense_Date) > (NOW() - INTERVAL 7 DAY) GROUP by date(Offense_Date)";//fetches data form account table
$result = mysqli_query($DBcon, $query);//mysqli_query function executes the query and stores the reault in the variable result
$chart_data = '';//store data for display in chart format.
//now to fetch data from $result variable
while($row = mysqli_fetch_array($result))
{
	//echo $row["OffenseDate"]."</br>";
	//echo $row["offence_count"];


	$chart_data .= "{ oday:'".$row["OffenseDate"]."', value:".$row["offence_count"]."},";//enclose the xaxis data in single quotes.
	/*$chart_data .= "{ year:'".$row["offence_date"]."', profit:".$row["offence_type"].",purchase:".$row["offense_type"].",sale:".$row["offense_type"].", }";//enclose the xaxis data in single quotes.
	*/
}



 //DATE_FORMAT(Offense_Date, '%d')

/*


 { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }



data:[{ year:'2018-03-01', profit:SECTION111}{ year:'2018-03-02', profit:SECTION222}{ year:'2018-03-01', profit:SECTION111}{ year:'2018-03-01', profit:SECTION22],
	

	 [
      { y: '2014', a: 50, b: 90},
      { y: '2015', a: 65,  b: 75},
      { y: '2016', a: 50,  b: 50},
      { y: '2017', a: 75,  b: 60},
      { y: '2018', a: 80,  b: 65},
      { y: '2019', a: 90,  b: 70},
      { y: '2020', a: 100, b: 75},
      { y: '2021', a: 115, b: 75},
      { y: '2022', a: 120, b: 85},
      { y: '2023', a: 145, b: 85},
      { y: '2024', a: 160, b: 95}
    ],


{ year:'2018-03-01', profit:SECTION111},{ year:'2018-03-02', profit:SECTION222},{ year:'2018-03-01', profit:SECTION111},{ year:'2018-03-01', profit:SECTION222}, 
*/
   // echo $chart_data;
//$chart_data = substr($chart_data, 0, -1);
$chart_data.= "{ oday:'0', value:0} ";
 //echo $chart_data;

?>
<html>
	<head>
		
		<link rel="stylesheet" href="../vendor/bootstrap/css/morris.css">
<script src="../vendor/bootstrap/js/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/raphael/raphael.min.js"></script>
<script src="../vendor/bootstrap/js/morrisjs/morris.min.js"></script>
	</head>
	<body>
		<br /><br />
		<div class="container" style="width:900px;">
			<h3 align="center">The traffic violations in the last 7 days.</h3>
			<br /><br />
			<div id="chart"></div>

			<div id="myfirstchart" style="height: 250px;"></div>

		</div>
	</body>
</html>

<!--
ykeys:['profit','purchase','sale'],
	labels:['Profit','Purchase','Sale'],
-->

<script>
new Morris.Line({
element: 'myfirstchart',
data: [
<?php echo $chart_data; ?>
],
xkey: 'oday',
ykeys: ['value'],
labels: ['Offence Count', 'Date'],
parseTime: false
});





</script>