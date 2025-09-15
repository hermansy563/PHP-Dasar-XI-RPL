<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>get di php</title>
</head>
<body>
	<h1>get di php</h1>
	<form action="1 get.php" method="get">
		<input type="text" name="nama" placeholder="nama">
		<input type="submit" value="submit">
    </form>		
    <?php 
    echo $_GET['nama'];
    ?>
</body>
</html>