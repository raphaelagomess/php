<?php
// usuário digitará um número e a aplicação
// completará o número digiado até 100

$usuario = readline("Digite um número: ") ;
// echo $usuario;

for ($i = $usuario; $i <= 100; $i++){
    echo "$i\n";
}