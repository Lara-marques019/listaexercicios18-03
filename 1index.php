<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete</title>
</head>
<body>
    <h1>Lanchonete</h1>
    <form action="1calcular.php" method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Lanche:
        <select name="lanche" required>
            <option value="1">X Burguer (R$6,00)</option>
            <option value="2">X Salada (R$8,00)</option>
            <option value="3">X Bacon (R$10,00)</option>
            <option value="4">X Tudo (R$12,00)</option>
            <option value="5">X Duplo (R$15,00)</option>
        </select><br><br>
        Quantidade de lanches: <input type="number" name="quantidade_lanches" min="1" required><br><br>
        Bebida:
        <select name="bebida" required>
            <option value="1">Água (R$2,00)</option>
            <option value="2">Suco (R$5,00)</option>
            <option value="3">Lata (R$3,00)</option>
            <option value="4">600 ml (R$5,00)</option>
            <option value="5">2 Litros (R$8,00)</option>
        </select><br><br>
        Quantidade de bebidas: <input type="number" name="quantidade_bebidas" min="1" required><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>