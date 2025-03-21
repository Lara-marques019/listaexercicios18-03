<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Online</title>
</head>
<body>
    <h1>Livraria Online</h1>
    <form action="calcular.php" method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Livro:
        <select name="livro" required>
            <option value="1">Aventuras de Sherlock Holmes (R$25,00)</option>
            <option value="2">1984 (R$30,00)</option>
            <option value="3">O Senhor dos Anéis (R$45,00)</option>
            <option value="4">Dom Quixote (R$35,00)</option>
            <option value="5">Cem Anos de Solidão (R$40,00)</option>
        </select><br><br>
        Quantidade de livros: <input type="number" name="quantidade_livros" min="1" required><br><br>
        Forma de envio:
        <select name="envio" required>
            <option value="1">Retirada na loja (Grátis)</option>
            <option value="2">Entrega padrão (R$10,00)</option>
            <option value="3">Entrega expressa (R$20,00)</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>