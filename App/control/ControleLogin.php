<?php
namespace App\control;

class ControleLogin {
    public function __construct() {
        self::criarTela();
    }
    
    private function criarTela(){
        $r = '<h1>Tela de Login</h1><hr>';
        $r .= '<div class = "jumbotron">';
        
        $r .= '<form>';
        $r .= '<label for = "editUsuario">Usuario</label>';
        $r .= '<input type = "text" class = "form-control" id = "editUsuario" placeholder = "Digite seu Usuario">';
       
        $r .= '<label for = "editSenha">Senha</label>';
        $r .= '<input type = "password" class = "form-control" id = "editSenha" placeholder = "Digite sua Senha">';
        $r .= '</form>';
        
        $r .= '<br><hr>';
        $r .= '<a class="btn btn-primary btn-lg" href="#" role="button">Entrar</a>';
        $r .= '</div><hr>';
        print $r;
    }
}
