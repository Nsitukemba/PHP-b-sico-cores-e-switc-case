<?php
$nome=$_GET['campoNome'];
$cor=$_GET['cor'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cor do Usuario</title>
</head>

		<body bgcolor="<?php echo($cor) ?>">
			<h1> <?php echo "".$nome."" ?> </h1>

		</body>
</html>