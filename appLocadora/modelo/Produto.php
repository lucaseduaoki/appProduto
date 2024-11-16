<?php

    class Produto{
        protected string $nome;
        protected string $dataLanc;
        protected int $classIdicativa;
        protected Diretor $diretor;
        protected string $genero;
        protected bool $adptLivro;
        protected bool $dispoWeb;
        protected float $preco;

    
        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of dataLanc
         */
        public function getDataLanc(): string
        {
                return $this->dataLanc;
        }

        /**
         * Set the value of dataLanc
         */
        public function setDataLanc(string $dataLanc): self
        {
                $this->dataLanc = $dataLanc;

                return $this;
        }

        /**
         * Get the value of classIdicativa
         */
        public function getClassIdicativa(): int
        {
                return $this->classIdicativa;
        }

        /**
         * Set the value of classIdicativa
         */
        public function setClassIdicativa(int $classIdicativa): self
        {
                $this->classIdicativa = $classIdicativa;

                return $this;
        }

        /**
         * Get the value of diretor
         */
        public function getDiretor(): Diretor
        {
                return $this->diretor;
        }

        /**
         * Set the value of diretor
         */
        public function setDiretor(Diretor $diretor): self
        {
                $this->diretor = $diretor;

                return $this;
        }

        /**
         * Get the value of genero
         */
        public function getGenero(): string
        {
                return $this->genero;
        }

        /**
         * Set the value of genero
         */
        public function setGenero(string $genero): self
        {
                $this->genero = $genero;

                return $this;
        }

        /**
         * Get the value of adptLivro
         */
        public function isAdptLivro(): bool
        {
                return $this->adptLivro;
        }

        /**
         * Set the value of adptLivro
         */
        public function setAdptLivro(bool $adptLivro): self
        {
                $this->adptLivro = $adptLivro;

                return $this;
        }

        /**
         * Get the value of dispoWeb
         */
        public function isDispoWeb(): bool
        {
                return $this->dispoWeb;
        }

        /**
         * Set the value of dispoWeb
         */
        public function setDispoWeb(bool $dispoWeb): self
        {
                $this->dispoWeb = $dispoWeb;

                return $this;
        }

        /**
         * Get the value of preco
         */
        public function getPreco(): float
        {
                return $this->preco;
        }

        /**
         * Set the value of preco
         */
        public function setPreco(float $preco): self
        {
                $this->preco = $preco;

                return $this;
        }
    }