<?php
$nombrecliente = array("lucia", "alejandra", "federico", "jose");
sort($nombrecliente);
foreach ($nombrecliente as $contador => $valor) {
echo "nombrecliente[" . $contador . "] = " . $valor . "\n";
}
?>