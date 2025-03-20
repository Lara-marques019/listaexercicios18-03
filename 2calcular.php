<?php
$nome = $_POST['nome'];
$livro = $_POST['livro'];
$quantidade_livros = $_POST['quantidade_livros'];
$envio = $_POST['envio'];

$precos_livros = [25, 30, 45, 35, 40];
$precos_envios = [0, 10, 20];

$total_livros = $precos_livros[$livro - 1] * $quantidade_livros;
$total_envio = $precos_envios[$envio - 1];
$total = $total_livros + $total_envio;

echo "<h1>Livraria Online - Resumo do Pedido</h1>";
echo "Nome: " . $nome . "<br>";
echo "Total: R$ " . number_format($total, 2, ',', '.') . "<br>";
?>