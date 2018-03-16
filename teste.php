<?php

echo "a² b² = ";

// Checks for user input and delivers the result
if(isset($_POST["cateto1"]) && isset($_POST["cateto2"])) {
	$cateto1 = $_POST["cateto1"];
	$cateto2 = $_POST["cateto2"];

	$hipotenuza = $cateto1*$cateto1 + $cateto2*$cateto2 . "²";

	echo $hipotenuza;
}
?>

<!--Takes the user input from a text box -->
<form action="teste.php" method="POST">
	<input type="type" name="cateto1" />
	<input type="type" name="cateto2" />
	<input type="submit" value="Resultado" />
</form>
