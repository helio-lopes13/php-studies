<?php
    echo "<pre>";

    // $tagBrDupla = "<br><br>";

    // $soma = function (int $a, int $b) {
    //     return $a + $b;
    // };

    // echo "A soma de 1 e 2 é ", $soma(1, 2), '.';

    // echo $tagBrDupla;

    // $nome = "Jones";

    // $nomeMaiusculo = function () use ($nome) {
    //     return $$nome = strtoupper($nome);
    // };

    // function retornaStringReversa(string $string) : string {
    //     if (strlen($string) == 0) {
    //         return "";
    //     }

    //     $lastChar = $string[strlen($string) - 1];
        
    //     return $lastChar . retornaStringReversa(substr($string, 0, -1));;
    // };

    // echo "O nome é " . $nomeMaiusculo() . ".<br>Qtd de caracteres: " . strlen($nome) . ".";

    // echo $tagBrDupla;

    // echo "String normal: ", $strot = "dog" . "cat";

    // echo $tagBrDupla;

    // echo "String revertida: " . $$strot = retornaStringReversa($strot);

    // echo $tagBrDupla;

    // var_dump($$strot);

    // // echo "String com um só: " . ($strot = "E") . ".";

    // // echo "Substring menos o último: " . substr($strot, 0, -1);

    // // var_dump(substr($strot, 0, -1));

    // include("poo.php");

    // $c1 = new Conta("Hélio", "13/09/1999");

    // echo var_dump('3' + 4);

    // echo "</pre>";

    $lista = [
        'nome' => 'Bonieky',
        'idade' => 90,
        'atributos' => [
            'forca' => 60,
            'agilidade' => 80,
            'destreza' => 50
        ],
        'vida' => 1000,
        'mana' => 928
    ];

    echo "NOME: ".$lista['nome']."<br/>";
    // echo "SOBRENOME: ".($lista['sobrenome']."<br/>" ?? "SEM CLÃ"); // Comentado porque o PHP da máquina não é o 7.4
    echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
    echo "VIDA: ".$lista['vida'].'<br/>';

    echo "Exercício 1 - Loops <br/>";

    for ($i = 1; $i <= 10; $i++) {
        echo '<br/>';
        for ($j = 1; $j <= 10; $j++) {
            echo '-';
        }
    }

    echo '<br/>';
    echo "Exercício 2 - Loops <br/>";

    for ($i = 0; $i <= 20; $i++) {
        echo '<br/>';
        for ($j = 0; $j <= $i; $j++) {
            echo '-';
        }
    }
?>