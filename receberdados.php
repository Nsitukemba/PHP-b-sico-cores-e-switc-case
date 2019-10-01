<?php 
//Usando Apenas PHP
print "Olá: ".$_GET['txtPeNelson']."";
printf("Tenho ".$_GET['txtIdade']." Ano(s) de Idade");
print_r(" Saida de Dados");

$nome=$_GET['txtPeNelson'];
$idade=$_GET['txtIdade'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Receber Dados</title>
</head>
		<body>
	<p>Olá <?php echo "".$nome.""; ?> </p>
	<p>Tenho <?php echo "".$idade." " ?>Anos de Idade</p>
		</body>
</html>