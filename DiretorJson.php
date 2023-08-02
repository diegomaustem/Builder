<?php 

require_once('Diretor.php');

class DiretorJson extends Diretor 
{
    public function construir(string $inputFileName) {

        $jsonArray = json_decode(file_get_contents($inputFileName));
        $this->builder->incluirCabecalho(array_keys((array) $jsonArray[0]));
        foreach($jsonArray as $jsonObject) {
            $this->builder->incluirLinha((array) $jsonObject);
        }
        $this->builder->finalizar();
    }
}