<?php
namespace Classes\rota;

class Caminho {
    use \Traits\parseUrl;
    
    private $Rota;
    
    function getCaminho() {
        //Dá um GET na Url
        $rotas = $this->pegaUrl();
        //Depois da barra é a rota[0] é a Pagina
        //Apos a barra é rora[1] que é Metodos 
        //Acima de rota [2] é parametros
        $contaPosicao = $rotas[0];
        //Injeta Rotas desejadas dentro de um Array
        $this->Rota = array(
            "" => "ControleHome",
            "Inicial" => "ControleHome",
            "Login" => "ControleLogin",
            "Cadastrar" => "ControleCadastro"
        );
        //Verifica se Rota do array existe e arquivo a ser carregado
        if (array_key_exists($contaPosicao, $this->Rota)){
            echo _CAMINHO_RAIZ_."App/control/{$this->Rota[$contaPosicao]}.php";
            if (file_exists(_CAMINHO_RAIZ_."App/control/{$this->Rota[$contaPosicao]}.php")){
                return $this->Rota[$contaPosicao];
            }else{
                return "ControleHome";
            } 
        }else{
            return "Erro404";
        }
    }
    
}
