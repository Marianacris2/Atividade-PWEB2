<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head> <title> Atividade</title>
<head>

<body>
<?php
	
	echo "<br> Seu nome é ". $_SESSION["nome"]." e seu telefone é ".$_SESSION["telefone"];
?>

</body>

</html>

