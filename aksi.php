<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>TABEL BIODATA</title>
	<font style color="black";>
</head>
<body>
	<Center><h1>TABEL BIODATA</h1></Center>
	<font style color="black";>
	<table border="1" cellpading="0" cellspacing="0" align="Center" width="800"
	
		<thead>
			<tr>
				<td>NIM</td>
                <td>:</td>
                <td><?php echo $_POST['nim']?></td>
                </tr>

				<td>NAMA</td>
                <td>:</td>
                <td><?php echo $_POST['nama']?></td>
                </tr>

				<td>GENDER</td>
                <td>:</td>
                <td><?php echo $_POST['gender']?></td>
                </tr>
				<td>STATUS</td>
                <td>:</td>
                <td><?php echo $_POST['status']?></td>
                </tr>

                <td>NO HP</td>
                <td>:</td>
                <td><?php echo $_POST['tlpn']?></td>
                </tr>

                <td>ALAMAT</td><td>:</td>
                <td><?php echo $_POST['alamat']?></td>
			</tr>
	</table>
</body>
</html>