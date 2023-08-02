<?php

class HtmlBuilder extends Builder 
{
    private \DOMDocument $document;
    private \DOMElement $table;

    public function __construct() {
        $this->document = new \DOMDocument('1.0','UTF-8');
        $this->document->appendChild($this->document->createElement('html'));
        $this->table = $this->document->createElement('table');
        $this->table->setAttribute('border', 1);
        $this->document->firstChild->appendChild($this->table);
    }

    private function criarTableRow(array $line, $tipo = 'td') {
        $tr = $this->document->createElement('tr');
        array_map(fn($v)=>$tr->appendChild(
            $this->document->createElement($tipo, $v)), $line);
        $this->table->appendChild($tr);
    }

    public function finalizar() {
        $this->resultado = $this->document->saveHTML();
    }

    public function incluirCabecalho(array $header) {
        $this->criarTableRow($header, 'th');
    }

    public function incluirLinha(array $line) {
        $this->criarTableRow($line);
    }
}

