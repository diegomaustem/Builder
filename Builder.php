<?php 

abstract class Builder 
{
    protected string $resultado = "";

    abstract function incluirCabecalho(array $header);
    abstract function incluirLinha(array $line);
    abstract function finalizar();

    public function gerResultado(): string {
        return $this->resultado;
    }
}