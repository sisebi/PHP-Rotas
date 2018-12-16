<?php
namespace App;


class Dispatch extends \Classes\rota\Caminho{
    private $objClasse; 
    private $paramento = [];
    private $metodo;
    
    private function getMetodo() {
        return $this->metodo;
    }

    private function setMetodo($metodo) {
        $this->metodo = $metodo;
    }

    
    private function getParamento() {
        return $this->paramento;
    }

    private function setParamento($paramento) {
        $this->paramento = $paramento;
    }

        
    public function __construct() {
        self::addControle();
    }
    
    private function addControle() {
        //Pega nome da Pagina
        $rotaControle = $this->getCaminho();
        //Monta Caminho para Instaciar nova Classe Pagina...
        $montaCaminhoClasse = "\\App\\control\\{$rotaControle}";
        //Instancia nova Classe conforme url passada.
        $this->objClasse = new $montaCaminhoClasse();
        
        //Verifica se metodo existe pela URL e o executa
        if (isset($this->pegaUrl()[1])){
            self::addMetodo();
        }
    }
    
    private function addMetodo() {
        if (method_exists($this->objClasse, $this->pegaUrl()[1])){
            $this->setMetodo("{$this->pegaUrl()[1]}");
            self::addParametro();
            echo '<br>Este Metodo Existe<br>';
            //Executa o Metodo
            call_user_func_array([$this->objClasse,$this->getMetodo()], $this->getParamento());
        }else{
            echo '<br>Metodo não Existe';
        }
    }
    
    private function addParametro() {
        $contador = count($this->pegaUrl());
        if ($contador > 2){
            echo '<br>Existe Parametro';
            //Cria um array de parametro
            foreach ($this->pegaUrl() as $key => $value) {
                if ($key > 1){
                    $this->setParamento($this->paramento += [$key=>$value]);
                }
            }
        }else{
            echo '<br>Não Existe Parametro';            
        }
    }
    
    
}
