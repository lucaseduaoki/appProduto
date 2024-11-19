<?php

require_once('Produto.php');
require_once('IProduto.php');

class Filme extends Produto implements IProduto{
    private int $tempoDuracao;
    private bool $continuidade;
    private bool $cinema;
    private bool $uniFisica;

    public function getDadosProduto(){
        $dados = "Filme: ".$this ->getNome()."\n";
        $dados .= "Data de lançamento: ".$this->getDataLanc()."\n";
        $dados .= "Classificação indicativa: ". $this->getClassIdicativa()."\n";
        $dados .= "Gênero: ".$this-> getGenero()."\n";
        $dados .= "Adaptação de livro: ".($this -> adptLivro ? "Sim" : "Não")."\n";
        $dados .= "Tempo de duração: ".$this->getTempoDuracao()."\n";
        $dados .= "Continuidade: ". ($this -> continuidade ? "Sim" : "Não")."\n";
        $dados .= "Passou no cinema: ". ($this -> cinema ? "Sim" : "Não")."\n";
        $dados .= "Está disponível em meio físico: ". ($this -> uniFisica ? "Sim" : "Não")."\n";
        $dados .= "Está disponível em meio web: ". ($this -> dispoWeb ? "Sim" : "Não")."\n";
        $dados .= "Preço: ". $this -> getPreco()."\n";
        $dados .= "Diretor: \n". $this ->getDiretor()->getDadosDiretor()."\n";
        return $dados;
    }

    /**
     * Get the value of tempoDuracao
     */
    public function getTempoDuracao(): int
    {
        return $this->tempoDuracao;
    }

    /**
     * Set the value of tempoDuracao
     */
    public function setTempoDuracao(int $tempoDuracao): self
    {
        $this->tempoDuracao = $tempoDuracao;

        return $this;
    }

    /**
     * Get the value of continuidade
     */
    public function isContinuidade(): bool
    {
        return $this->continuidade;
    }

    /**
     * Set the value of continuidade
     */
    public function setContinuidade(bool $continuidade): self
    {
        $this->continuidade = $continuidade;

        return $this;
    }

    /**
     * Get the value of cinema
     */
    public function isCinema(): bool
    {
        return $this->cinema;
    }

    /**
     * Set the value of cinema
     */
    public function setCinema(bool $cinema): self
    {
        $this->cinema = $cinema;

        return $this;
    }

    /**
     * Get the value of uniFisica
     */
    public function isUniFisica(): bool
    {
        return $this->uniFisica;
    }

    /**
     * Set the value of uniFisica
     */
    public function setUniFisica(bool $uniFisica): self
    {
        $this->uniFisica = $uniFisica;

        return $this;
    }
}