<?php
    echo "<pre>";

    $tagBrDupla = "<br><br>";

    $soma = function (int $a, int $b) {
        return $a + $b;
    };

    echo "A soma de 1 e 2 é ", $soma(1, 2), '.';

    echo $tagBrDupla;

    $nome = "Jones";

    $nomeMaiusculo = function () use ($nome) {
        return $$nome = strtoupper($nome);
    };

    function retornaStringReversa(string $string) : string {
        if (strlen($string) == 0) {
            return "";
        }

        $lastChar = $string[strlen($string) - 1];
        
        return $lastChar . retornaStringReversa(substr($string, 0, -1));;
    };

    echo "O nome é " . $nomeMaiusculo() . ".<br>Qtd de caracteres: " . strlen($nome) . ".";

    echo $tagBrDupla;

    echo "String normal: ", $strot = "dog" . "cat";

    echo $tagBrDupla;

    echo "String revertida: " . $$strot = retornaStringReversa($strot);

    echo $tagBrDupla;

    var_dump($$strot);

    // echo "String com um só: " . ($strot = "E") . ".";

    // echo "Substring menos o último: " . substr($strot, 0, -1);

    // var_dump(substr($strot, 0, -1));

    include("poo.php");

    echo "</pre>";
?>