
 <!DOCTYPE html>
<html lang="en" dir="ltr">
	<head> 
		<meta charset="utf-8">
		<title>Import Excel To MySQL</title>
	</head>
	<body>
		<form class="" action="<?= "http://localhost/eselco_test/test/getfile"?>" method="post" enctype="multipart/form-data">
			<input type="file" name="excel" required value="">
			<button type="submit" name="import">Import</button>
		</form>
		<hr>
		<table border = 1>
			<tr>
				<td>#</td>
				<td>Name</td>
				<td>Age</td>
				<td>Country</td>
			</tr>
			<?php
			$i = 1;
			// $rows = mysqli_query($conn, "SELECT * FROM tb_data");


           echo  base_url();


			foreach($rows as $row) :

                
			?>
			<tr>
				<td> <?php echo $i++; ?> </td>
				<td> <?php echo $row["name"]; ?> </td>
				<td> <?php echo $row["age"]; ?> </td>
				<td> <?php echo $row["country"]; ?> </td>
			</tr>
			<?php endforeach; ?>
		</table>
	
	</body>
</html>
