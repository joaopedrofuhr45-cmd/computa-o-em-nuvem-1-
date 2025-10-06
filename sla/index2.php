<?php
$mensagem = "Esta é uma informação importante";
$hash_original = hash('sha256', $mensagem);
$mensagem_recebida = "Esta é uma informação importante";
$hash_atual = hash('sha256', $mensagem_recebida);
if ($hash_original === $hash_atual) {
    echo "Integridade confirmada!";
}
else{
    echo"A informação foi alterada" ;
}
?>