<?php
$user = "jucaPizza@pizza.com";
$pwd = "1234";
$perfil = "CLI";

//$variavel = 140.55;
//$variavel = true;

// echo "Bem Vindo, <b>" . $user . " </b> <br> O valor da variavel é " . $variavel . "<br>";

// var_dump($user);
// var_dump($variavel);

if ($user == "jucaPizza@pizza.com" && $pwd == "1234")  {

    echo"<span> Bem vindo, " . $user . "! </span>";

      carregarOpcoes($perfil) ;

    
} else {

    echo"<span> Login invalido usuario ou senha errado";

}

function carregarOpcoes(string $opcaoPerfil){
    if ($opcaoPerfil == "ADM") {

        echo "<ul>";
            for ($i = 1; $i <= 5; $i++) {

                echo "<li><a href=\"\">opção " . $i . "</a></li>";

            }
        echo "</ul>";

    }
    elseif ($opcaoPerfil == "VEN") {
        
        $i = 1;

        do {
            echo "<li><a href=\"\">opção " . $i . "</a></li>";
            $i++;
        } while ($i <= 3);

    }   
    elseif ($opcaoPerfil == "CLI"){

        $i = 1;

        while ($i <= 99999999999999999) {
            echo "<li><a href=\"\">opção " . $i . "</a></li>";
            $i++;
        }
    }

}