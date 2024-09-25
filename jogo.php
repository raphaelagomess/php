<?php
$jogador1 = readline("Faça sua jogada");
$jogadas = ["pedra", "papel", "tesoura"];
$jogador2 = $jogadas[array_rand($jogadas)];
echo "$jogador2\n";

if($jogador1 === "pedra"){
    if($jogador2 === "pedra"){
        echo "Empate!\n";
    }
    else if($jogador2 === "papel"){
        echo "Jogador 2 ganhou!\n";
    }
    else if($jogador2 === "tesoura"){
        echo "Jogador 1 ganhou!\n";
    }
}
else if($jogador1 === "papel"){
    if($jogador2 === "pedra"){
    echo "Jogador 1 ganhou!\n";
}
else if($jogador2 === "papel"){
    echo "Empate!\n";
}
else if($jogador2 === "tesoura"){
    echo "Jogador 2 ganhou!\n";
}
}
else if($jogador1 === "tesoura"){
    if($jogador2 === "pedra"){
    echo "Jogador 2 ganhou!\n";
}
else if($jogador2 === "papel"){
    echo "Jogador 1 ganhou!\n";
}
else if($jogador2 === "tesoura"){
    echo "Empate!\n";
}



