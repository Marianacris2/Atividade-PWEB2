
<?php
session_start();
$nome = $_REQUEST["nome"];
$telefone = $_REQUEST["telefone"];
$_SESSION["nome"] = $nome;
$_SESSION["telefone"] = $telefone;
echo "Informações armazenadas";
?>

<!DOCTYPE html>
<html>
<head> <title> Atividade</title>
<head>
<body>
	<br>
	<a href="script2.php">Ver informações</a>
</body>

</html>
