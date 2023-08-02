<?php 

abstract class Diretor 
{
    protected Builder $builder;

    public function __construct(Builder $builder) {
        $this->builder = $builder;
    }

    public abstract function construir(string $inputFileName);
}