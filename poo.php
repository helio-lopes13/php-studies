<?php

class Conta {
    private $nomeUser;
    private $dataNascimento;

    public function __construct(string $nomeUser, string $dataNascimento) {
        $this->nomeUser = $nomeUser;
        $this->dataNascimento = $dataNascimento;
    }

    public function getNomeUser(): string {
        return $this->nomeUser;
    }
    
    public function getDataNascimento(): string {
        return $this->dataNascimento;
    }

    public function setNomeUser(string $nomeUser) {
        $this->nomeUser = $nomeUser;
    }

    public function setDataNascimento(string $dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function __toString() {
        try {
            return "User de nome " . $this->nomeUser . ", que nasceu em " . $this->dataNascimento . '.';
        } catch (Exception $exception) {
            return '';
        }
    }
}

$conta1 = new Conta("Hélio Lopes", "13/09/1999");

echo $conta1;
?>