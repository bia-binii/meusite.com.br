<?php
require_once "usuario.php";

//Classe Filhs - Professor
class Professor extends Usuario {
    private $diciplina;

    public function __construct($nome, $email, $diciplina) {
        parent::__construct($nome, $email);
        $this->disciplina = $diciplina;
    }

    public function getDiciplina() {
        return $this->disciplina;
    }

    public function exibirInfo() {
        return parent::exibirInfo() . " | Disciplina: {$this->disciplina}";
    }

    public function darAula() {
        return "{$this->nome} está dando aula de {$this->disciplina}.";
    }
}
?>