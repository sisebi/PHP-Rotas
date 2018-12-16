<?php
namespace App\control;

class ControleCadastro {
    public function __construct() {
        self::criarTela();
    }
    
    private function criarTela() {
        $r = '<h1>Tela de Cadastro</h1><hr>';
        $r .= '<div class = "jumbotron">';
        $r .= '<form>';
        
        $r .= $this->addEdit("editNome", "Nome", "Digite seu nome");
        $r .= $this->addEdit("editSobreNome", "Sobre Nome", "Digite seu Sobre Nome");
        $r .= $this->addEdit("editEndereco", "Endereço", "Digite seu Endereço");
        
        $r .= '</form>';
        
        $r .= '<br><hr>';
        $r .= '<a class="btn btn-primary btn-lg" href="#" role="button">Cadastrar</a>';
        
        $r .= '</div><hr>';
        
        print $r;
    }
    
    private function addEdit($nome,$label,$informe) {
        
        $r = '<label for = "'.$nome.'">'.$label.'</label>';
        $r .= '<input type = "text" class = "form-control" id = "'.$nome.'" placeholder = "'.$informe.'">';
        
        return $r;
    }

}
