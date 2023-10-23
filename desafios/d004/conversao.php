<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-A-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            // Cotação copiada do Google
            $cotação = 5.17;

            // Quanto $$ você tem?
            $real = $_GET["din"] ?? 0;

            // Equivalência em dólar
            $dólar = $real / $cotação;

            // Mostar o resultado
            // echo "Seus R\$" . number_format($real, 2, ",", ".") . "equivalem a US\$" . number_format($dólar, 2, ",", ".");

            // Formatação de moeda com internacionalização!
            // Biblioteca intl (Internallization PHP)

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p> Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dólar, "USD") . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
    