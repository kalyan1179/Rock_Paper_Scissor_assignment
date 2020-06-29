<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rps";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// echo "hello";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rock Paper Scissor</title>
	<style type="text/css">
		td,tr,th{
			border:1px black solid;
		}
		table{
			border:1px black solid;margin-left: 6%;
		}
		h3{
			margin-left: 0%;
		}
	</style>
</head>
<body>

<?php
	$scores = array();
	for($i = 0 ;$i<4;$i++){
		$scores[$i]=array(0,0,0,0);
	}
	$names = array(1 => "Rock",2=>"Paper",3=>"Scissor" );
	$randarray = array();
	for($i=1;$i<51;$i++){
		for($it=0;$it<4;$it++){
			$randarray[$it]=rand(1,3);
		}
	
?>
	<table cellspacing="0" cellpadding="8">
		<h3 style="color: blue">Iteration <?php echo $i;?>:</h3>
		<tr>
			<td>Player 1</td>
			<td>Player 2</td>
			<td>Player 3</td>
			<td>Player 4</td>
		</tr>
		<tr>
			<td><?php echo $names[$randarray[0]] ; ?></td>
			<td><?php echo $names[$randarray[1]] ; ?></td>
			<td><?php echo $names[$randarray[2]] ; ?></td>
			<td><?php echo $names[$randarray[3]] ; ?></td>

		</tr>
	</table>
	
	
	<h3 style="color: blue">Score board:</h3>

	<table cellspacing="0" cellpadding="6">
		<thea>
			<th>Totals</th>
			<th rowspan="1"></th>
			<th colspan="4">Against</th>
		</thead>
		<tr>
			<td rowspan="1"></td>
			<td rowspan="1"></td>
			<td>Player 1</td>
			<td>Player 2</td>
			<td>Player 3</td>
			<td>Player 4</td>
		</tr>
		<tr>
			<td rowspan="5">Player wins</td>
			<?php
				for($m=0;$m<4;$m++){
			?>
					<tr>
						
					<td >Player <?php echo $m+1;?></td>
					<?php
						for($n=0;$n<4;$n++){
							if (($randarray[$m]-$randarray[$n]==1) or ($randarray[$m]==1 and $randarray[$n]==3)){
								$scores[$m][$n]++;
							} 
							if ($m==$n){
					?>
							<td>-</td>
					<?php
							}
							else{
					?>
							<td><?php echo $scores[$m][$n];?></td>
					<?php
							}
						}
					?>
					</tr>
			<?php
				}
			?>
		</tr>
	</table>
<?php 
	}
?>
</body>
</html>

