<?php
require_once('Produto.php');
require_once('IProduto.php');
require_once('Diretor.php');
require_once('modelo/Diretor.php');

class Serie extends Produto implements IProduto{
    private int $numTemporadas;
    private int $tempAproxEp;
    private int $numAproxEp;


    public function getDadosProduto()
    {
        $dados = "Série: ". $this->getNome()."\n";
        $dados .= "Número de temporadas: ". $this->getNumTemporadas() ." \n";
        $dados .= "Tempo aproximado por episódio: ".$this->getTempAproxEp()."\n";
        $dados .= "Data de lançamento: ".$this->getDataLanc()."\n";
        $dados .= "Classificação indicativa: ". $this->getClassIdicativa()."\n";
        $dados .= "Gênero: ".$this-> getGenero()."\n";
        $dados .= "Adaptação de livro: ".($this -> adptLivro ? "Sim" : "Não")."\n";
        $dados .= "Está disponível em meio web: ". ($this -> dispoWeb ? "Sim" : "Não")."\n";
        $dados .= "Diretor: \n". $this ->getDiretor()->getDadosDiretor()."\n";
        $dados .= "Preço: ". $this -> getPreco()."\n";
        return $dados;
    }
    /**
     * Get the value of numTemporadas
     */
    public function getNumTemporadas(): int
    {
        return $this->numTemporadas;
    }

    /**
     * Set the value of numTemporadas
     */
    public function setNumTemporadas(int $numTemporadas): self
    {
        $this->numTemporadas = $numTemporadas;

        return $this;
    }

    /**
     * Get the value of tempAproxEp
     */
    public function getTempAproxEp(): int
    {
        return $this->tempAproxEp;
    }

    /**
     * Set the value of tempAproxEp
     */
    public function setTempAproxEp(int $tempAproxEp): self
    {
        $this->tempAproxEp = $tempAproxEp;

        return $this;
    }

    /**
     * Get the value of numAproxEp
     */
    public function getNumAproxEp(): int
    {
        return $this->numAproxEp;
    }

    /**
     * Set the value of numAproxEp
     */
    public function setNumAproxEp(int $numAproxEp): self
    {
        $this->numAproxEp = $numAproxEp;

        return $this;
    }
}
