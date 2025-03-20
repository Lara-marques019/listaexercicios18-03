<?php
$nome = $_POST['nome'];
$lanche = $_POST['lanche'];
$quantidade_lanches = $_POST['quantidade_lanches'];
$bebida = $_POST['bebida'];
$quantidade_bebidas = $_POST['quantidade_bebidas'];

$precos_lanches = [6, 8, 10, 12, 15];
$precos_bebidas = [2, 5, 3, 5, 8];

$total_lanches = $precos_lanches[$lanche - 1] * $quantidade_lanches;
$total_bebidas = $precos_bebidas[$bebida - 1] * $quantidade_bebidas;
$total = $total_lanches + $total_bebidas;

echo "<h1>Lanchonete - Resumo do Pedido</h1>";
echo "Nome: " . $nome . "<br>";
echo "Total: R$ " . number_format($total, 2, ',', '.') . "<br>";
?>
