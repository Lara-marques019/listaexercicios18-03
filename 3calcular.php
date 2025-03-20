<?php
$total = $_POST['total'];
$forma_pagamento = $_POST['forma_pagamento'];

if ($forma_pagamento === 'avista') {
    $total_final = $total * 0.9; // 10% de desconto
    $parcelas = 1;
    $valor_parcela = $total_final;
} else {
    $parcelas = $_POST['parcelas'];
    if ($parcelas <= 3) {
        $total_final = $total; // Sem juros
    } elseif ($parcelas <= 6) {
        $total_final = $total * 1.1; // 10% de juros
    } else {
        $total_final = $total * 1.2; // 20% de juros
    }
    $valor_parcela = $total_final / $parcelas;
}

echo "<h1>Resumo da Compra</h1>";
echo "Total da compra: R$ " . number_format($total, 2, ',', '.') . "<br>";
echo "Forma de pagamento: " . ($forma_pagamento === 'avista' ? 'À vista' : 'A prazo') . "<br>";
echo "Total final: R$ " . number_format($total_final, 2, ',', '.') . "<br>";
echo "Parcelas: " . $parcelas . "<br>";
echo "Valor da parcela: R$ " . number_format($valor_parcela, 2, ',', '.') . "<br>";
?>