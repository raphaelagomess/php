<?php
// Usuario insere sua idade
// Se menor de idade -> Imprima 3 programas infantis
// Se maior de idade -> Imprima 3 carros com seus preços

function listarCarros(){
    echo "Opala, R$60.000\n Vectra, R$15.000\n Gol, R$75.000";
}

function listarProgramasInfantis(){
    echo "Tom&Jerry\n PicaPau\n Looney Tunes\n";
}

$idade = readline("Digite sua idade: ");

if($idade >=18){
    listarCarros();
}
else{
    listarProgramasInfantis();
}

