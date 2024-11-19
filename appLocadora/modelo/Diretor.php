<?php

class Diretor {
    private string $nome;
    private int $idade;
    private string $nacionalidade;
    private int $numPremiacoes;


    public function __construct(string $nome, int $idade, string $nacionalidade, int $numPremiacoes) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
        $this->numPremiacoes = $numPremiacoes;
    }
    public function __toString(): string {
        return "Nome: $this->nome \n, Idade: $this->idade\n, Nacionalidade: $this->nacionalidade\n, Premiações: $this->numPremiacoes\n";
    }


    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function getNacionalidade(): string {
        return $this->nacionalidade;
    }

    public function setNacionalidade(string $nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function getNumPremiacoes(): int {
        return $this->numPremiacoes;
    }

    public function setNumPremiacoes(int $numPremiacoes): void {
        $this->numPremiacoes = $numPremiacoes;
    }

    public function getDadosDiretor(){
        $dados = "O nome desse diretor é: ". $this->getNome()."\n";
        $dados .= "A idade desse diretor é: ".$this->getIdade(). "\n";
        $dados .= "A nacionalidade desse diretor é: ". $this->getNacionalidade()."\n";
        $dados .= "O diretor ".$this->getNome()." tem: ". $this->getNumPremiacoes(). " premiações\n";
    
        return $dados;
    
    }
}
