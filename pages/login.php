<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
</body>
</html>

<?php

$login = filter_input(INPUT_POST, "login", FILTER_VALIDATE_EMAIL);
$senha = $_POST["senha"];

if ($login && strlen($senha) == 8) {

    //caminho feliz
    if (validarUsuario($login, $senha)) {

        echo "<span class=\"welcome\"> Bem vindo" . $login . "|</span>";
        $perfil = "ADM";
        carregarOpcoes($perfil);

    } else {

        echo "<span class=\"error\"> login ou senha invalidos </span>";
    }
} else {

    header("location: ./../index.html");
    exit;
}

function carregarOpcoes(string $opcaoPerfil)
{
    if ($opcaoPerfil == "ADM") {
        qualcliente(6);

        //     echo "<ul>";
        //         for ($i = 1; $i <= 5; $i++) {

        //             echo "<li><a href=\"\">opção " . $i . "</a></li>";

        //         }
        //     echo "</ul>";

    } elseif ($opcaoPerfil == "VEN") {
        qualcliente(3);

        //     $i = 1;
        //     echo "<ul>";
        //     do {
        //         echo "<li><a href=\"\">opção " . $i . "</a></li>";
        //         $i++;
        //     } while ($i <= 3);

    } elseif ($opcaoPerfil == "CLI") {
        qualcliente(2);

        //     $i = 1;
        //     echo "<ul>";
        //     while ($i <= 2) {
        //         echo "<li><a href=\"\">opção " . $i . "</a></li>";
        //         $i++;
        //     }
        //     echo "</ul>";
    }
}

function qualcliente(int $numeroPerfil)
{

    echo "<ul>";
    for ($i = 1; $i <= $numeroPerfil; $i++) {
        echo "<li><a href=\"\">opção " . $i . "</a></li>";
    }
    echo "</ul>";
}


function validarUsuario(string $login, string $senha)
{
    return ($login == "jucaPizza@pizza.com" && $senha == "12345678") ? true : false;
}



//operador ternario - o famoso if de uma linha
//exemplo 1
// condição ? resultato se for true :resultado se for false
// echo ($user == "jucaPizza@pizza.com" && $pwd == "1234") ? "<span> Bem vindo, " . $user . "! </span>"
// : "<span> Login invalido usuario ou senha errado";

//Exemplo 2
// $clienteAtivo = true;
// echo ($clienteAtivo) ? "cliente Ativo" : "cliente inativo"

// $user = "jucaPizza@pizza.com";
// $pwd = "1234";

// validarLogineSenha($_POST["login"],$_POST["senha"]);

// $perfil="ADM";
// carregarOpcoes($perfil);

//$variavel = 140.55;
//$variavel = true;

// echo "Bem Vindo, <b>" . $user . " </b> <br> O valor da variavel é " . $variavel . "<br>";

// var_dump($user);
// var_dump($variavel);