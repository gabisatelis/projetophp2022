<?php
$pNumero = floatval ($_GET ['txtpNumero']);
$sNumero = floatval ($_GET ['txtsNumero']);
$soma = $sNumero + $pNumero;
echo "Soma: <br>" . $soma . "</br>";