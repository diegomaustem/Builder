<?php

class CsvBuilder extends Builder 
{
    private array $csvArray = [];

    public function finalizar() {
        foreach($this->csvArray as $line) {
            $this->resultado .= implode(",", $line).PHP_EOL;
        }
    }

    public function incluirCabecalho(array $header) {
        $this->csvArray[] = $header;
    }

    public function incluirLinha(array $line) {
        $this->csvArray[] = $line;
    }
}

