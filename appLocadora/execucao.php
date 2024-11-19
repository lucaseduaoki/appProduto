<?php

require_once('modelo/Produto.php');
require_once('modelo/Filme.php');
require_once('modelo/Serie.php');


$produtosCadastrados = [];

function ListarProdutos(array $produtosCadastrados) {
    echo "PRODUÇÕES CADASTRADAS\n";

    $i = 1;
    foreach($produtosCadastrados as $e) {
        if($e instanceof Filme)
            echo $i . "- " . $e->getDadosProduto();

        else if($e instanceof Serie)
            echo $i . "- " . $e->getDadosProduto();
        $i++;
    }
}
function listarFilmes(array $produtosCadastrados) {
    echo "FILMES CADASTRADOS\n";
     $i = 0;
    foreach($produtosCadastrados as $e) {
        $i++;
        if($e instanceof Filme)
        echo $i . "- " . $e->getDadosProduto();
        
    }
}
function listarSeries(array $produtosCadastrados) {
    echo "SÉRIES CADASTRADAS\n";
     $i = 0;
    foreach($produtosCadastrados as $e) {
        if($e instanceof Serie)
        echo $i . "- " . $e->getDadosProduto();
        $i++;
    }
}

do {
  
    echo "===============================\n";
    echo "=     Locadora CineMágico     =\n";
    echo "===============================\n";
    echo "== 1. Cadastrar um filme     ==\n";
    echo "== 2. Cadastrar uma série    ==\n";
    echo "== 3. Listar séries          ==\n";
    echo "== 4. Listar filmes          ==\n";
    echo "== 5. Listar Produções       ==\n";
    echo "== 6. Excluir Produção       ==\n";
    echo "== 0. Sair                   ==\n";
    echo "===============================\n";
    echo "Escolha uma opção: ";
    

    $opcao = readline("Escolha a função que deseja executar, ou prima 0 para encerrar: ");
    

    switch ($opcao) {
        case 0:
            echo "VOCÊ CANCELOU O PROGRAMA! \n";
            break;
        case 1:
                $f = new Filme;
                $f ->setNome(readline("Digite o nome do filme: "));
                $f ->setDataLanc(readline("Digite a data de lançamento do filme: "));
                $f ->setClassIdicativa(readline("Digite a classificação indicativa do filme: "));
                $f ->setGenero(readline("Digite o gênero do filme: "));
                $adptLivro = readline("O filme é uma adaptação de livro (1 - Sim | 2 - Não ): ");
                if ($adptLivro == 1) {
                    $f -> setAdptLivro(true);
                } else{
                    $f ->setAdptLivro(false);
                }
                $f ->setTempoDuracao(readline("Qual o tempo de duração do filme? (em minutos): "));
                $continuidade = readline("O filme tem continuidade? (1 - Sim | 2 - Não ): ");
                if ($continuidade == 1) {
                    $f -> setContinuidade(true);
                } else{
                    $f ->setContinuidade(false);
                }
                $cinema = readline("Estreiou nos cinemas? (1 - Sim | 2 - Não ): ");
                if ($cinema == 1) {
                    $f -> setCinema(true);
                } else{
                    $f ->setCinema(false);
                }
                $meioFisico = readline("A locadora possui o meio físico desse filme? (1 - Sim | 2 - Não ): ");
                if ($meioFisico == 1) {
                    $f -> setUniFisica(true);
                } else{
                    $f ->setUniFisica(false);
                }
                $dispoWeb = readline("O filme esta disponível na web? (1 - Sim | 2 - Não ): ");
                if ($dispoWeb == 1) {
                    $f -> setDispoWeb(true);
                } else{
                    $f ->setDispoWeb(false);
                }
                $f->setPreco(readline("Digite o preço desse filme: "));
                $nomeDiretor = readline("Digite o nome do diretor: ");
                $idadeDiretor = readline("Digite a idade do diretor: ");
                $nacionalidadeDiretor = readline("Digite a nacionalidae desse diretor: ");
                $numPremiacoes = readline("Digite o número de premiações desse diretor: ");
                $diretor = new Diretor($nomeDiretor,$idadeDiretor,$nacionalidadeDiretor,$numPremiacoes); 
                $f->setDiretor($diretor); 
                print_r($f);

                array_push($produtosCadastrados, $f);  
            break;
        case 2:
                $s = new Serie;
                $s->setNome(readline("Digite o nome da série: "));
                $s->setNumTemporadas(readline("Digite o número de temporadas da série: "));
                $s->setTempAproxEp(readline("Digite o tempo aproximado por episódio (em minutos): "));
                $s->setDataLanc(readline("Digite a data de lançamento da série: "));
                $s->setClassIdicativa(readline("Digite a classificação indicativa da série: "));
                $s->setGenero(readline("Digite o gênero da série: "));
                $adptLivro = readline("A série é uma adaptação de livro? (1 - Sim | 2 - Não): ");
                $s->setAdptLivro($adptLivro == 1);
                $dispoWeb = readline("A série está disponível na web? (1 - Sim | 2 - Não): ");
                $s->setDispoWeb($dispoWeb == 1);
                $s->setPreco(readline("Digite o preço dessa série: "));

                $nomeDiretor = readline("Digite o nome do diretor: ");
                $idadeDiretor = readline("Digite a idade do diretor: ");
                $nacionalidadeDiretor = readline("Digite a nacionalidade do diretor: ");
                $numPremiacoes = readline("Digite o número de premiações do diretor: ");
                $diretor = new Diretor($nomeDiretor, $idadeDiretor, $nacionalidadeDiretor, $numPremiacoes);
                $s->setDiretor($diretor);
                array_push($produtosCadastrados, $s);    
            break;
        case 3:
                listarSeries($produtosCadastrados);
            break;
        case 4:
                listarFilmes($produtosCadastrados);
            break;
        case 5:
                ListarProdutos($produtosCadastrados);
            break;
        default: 
            echo "*** Opção inválida! Por favor, tente novamente. ***\n";
            break;
    }

} while ($opcao);


