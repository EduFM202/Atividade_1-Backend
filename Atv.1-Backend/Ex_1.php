<?php
// programa php que lê o preço de um produto e a quantidade comprada.
$preco = 84.99;
$quantidade = 4;
$valor_total = $preco * $quantidade;

echo "O preço do produto é: $preco<br>";
echo "A quantidade comprada é: $quantidade<br><br>";

echo "O valor total da compra é: $valor_total<br><br>";

// Aplicação do desconto de 10% caso o valor total seja maior que 200
if ($valor_total > 200) {
    $desconto = $valor_total * 0.1;
    $valor_desconto = $valor_total - $desconto;
    echo "O valor total da compra é maior que 200, então há desconto.<br>";
    echo "O valor com desconto de 10% é: $valor_desconto<br>";
} else {
    echo "O valor total da compra é menor que 200, então não há desconto.<br>";
}
