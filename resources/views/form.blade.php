<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
 
	<form action="/daftar/form/player" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Jumlah Pemain:
		<input type="number" name="jumlah"> <br/>
	
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>