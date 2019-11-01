<?php
require_once('DimCliente.php');
require_once('DimData.php');
require_once('Sumario.php');

use dimensoes\Sumario;
use dimensoes\DimData;
use dimensoes\DimCliente;

$dimCliente = new DimCliente();
$sumCliente = $dimCliente->carregarDimCliente();
echo "Clientes: <br>";
echo "Inclusões: ".$sumCliente->quantidadeInclusoes."<br>";
echo "Alterações: ".$sumCliente->quantidadeAlteracoes;
echo "<br>===============================================================<br>";

$dimData = new DimData();
$sumData = $dimData->extrairETransformarDatas();
echo "Data: <br>";
echo "Inclusões:  ".$sumData->quantidadeInclusoes."<br>";
echo "Alterações:  ".$sumData->quantidadeAlteracoes;
echo "<br>=======================================================<br>";

?>





















