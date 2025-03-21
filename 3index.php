<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Compra</title>
</head>
<body>
    <h1>Calculadora de Compra</h1>
    <form action="calcular.php" method="post">
        Total da compra: <input type="number" name="total" min="0" required><br><br>
        Forma de pagamento:
        <select name="forma_pagamento" required>
            <option value="avista">À vista</option>
            <option value="prazo">A prazo</option>
        </select><br><br>
        <div id="parcelas" style="display: none;">
            Número de parcelas: <input type="number" name="parcelas" min="1"><br><br>
        </div>
        <input type="submit" value="Calcular">
    </form>

    <script>
        const formaPagamento = document.querySelector('select[name="forma_pagamento"]');
        const parcelasDiv = document.getElementById('parcelas');

        formaPagamento.addEventListener('change', function() {
            if (this.value === 'prazo') {
                parcelasDiv.style.display = 'block';
            } else {
                parcelasDiv.style.display = 'none';
            }
        });
    </script>
</body>
</html>