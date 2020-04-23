<!DOCTYPE html>
<html>
<head>
	<title>Data Pemantauan Covid19</title>
	<style type="text/css"></style>
</head>
<body>
	<h3>
		<center>Data Pemantauan Covid19 Wilayah <?php echo $_GET['wilayah'];?> <br>
		<?php echo "Per " . date("Y-m-d h:i:sa") ; ?><br>
		<?php echo $_GET['operator']; echo "/"; echo $_GET['nim']?></center>
	</h3>

	<table border="1px" cellpadding="20" align="center">
		<tr >
			<th>Positif</th>
			<th>Dirawat</th>
			<th>Sembuh</th>
			<th>Meninggal</th>
		</tr>
		<tr >
			<th><?php echo $_GET['positif'];?></th>
			<th><?php echo $_GET['dirawat'];?></th>
			<th><?php echo $_GET['sembuh'];?></th>
			<th><?php echo $_GET['meninggal'];?></th>
		</tr>
	</table>
	
</body>
</html>


