<?php

require_once('Diretor.php');

class DiretorXml extends Diretor 
{
    public function construir(string $inputFileName) {

        $document = new \DOMComment();
        $document->preserveWhiteSpace = false;
        $document->load($inputFileName);
        $root = $document->firstChild;
        $item1 = iterator_to_array($root->firstChild->childNodes);
        $this->builder->incluirCabecalho(array_column($item1, 'tagName'));

        foreach($root->childNodes as $child) {
            $item = iterator_to_array($child->childNodes);
            $this->builder->incluirLinha(array_column($item, 'nodeValue'));
        }
        $this->builder->finalizar();
    }

}