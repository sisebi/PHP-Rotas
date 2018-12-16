<?php

namespace App\control;

class ControleHome {

    public function __construct() {
        self::criarTela();
    }

    private function criarTela() {
        $r = '<h1>Tela inicial</h1><hr>';
        $r .= '<div>';

        $r .= $this->carossel();

        $r .= '</div><hr>';

        print $r;
    }

    private function carossel() {

        $r = '<div id = "carouselExampleIndicators" class = "carousel slide" data-ride = "carousel">';
        $r .= '<ol class = "carousel-indicators">';
        $r .= '<li data-target = "#carouselExampleIndicators" data-slide-to = "0" class = "active"></li>';
        $r .= '<li data-target = "#carouselExampleIndicators" data-slide-to = "1"></li>';
        $r .= '<li data-target = "#carouselExampleIndicators" data-slide-to = "2"></li>';
        $r .= '</ol>';
        $r .= '<div class = "carousel-inner">';
        $r .= '<div class = "carousel-item active">';
        $r .= '<img class = "d-block w-100" src = "'._CAMINHO_IMG_.'empresa.jpg" alt = "Empresa">';
        $r .= '</div>';
        $r .= '<div class = "carousel-item">';
        $r .= '<img class = "d-block w-100" src = "'._CAMINHO_IMG_.'futuro.jpg" alt = "Futuro">';
        $r .= '</div>';
        $r .= '<div class = "carousel-item">';
        $r .= '<img class = "d-block w-100" src = "'._CAMINHO_IMG_.'melhor.jpg" alt = "Melhor">';
        $r .= '</div>';
        $r .= '</div>';
        $r .= '<a class = "carousel-control-prev" href = "#carouselExampleIndicators" role = "button" data-slide = "prev">';
        $r .= '<span class = "carousel-control-prev-icon" aria-hidden = "true"></span>';
        $r .= '<span class = "sr-only">Previous</span>';
        $r .= '</a>';
        $r .= '<a class = "carousel-control-next" href = "#carouselExampleIndicators" role = "button" data-slide = "next">';
        $r .= '<span class = "carousel-control-next-icon" aria-hidden = "true"></span>';
        $r .= '<span class = "sr-only">Next</span>';
        $r .= '</a>';
        $r .= '</div>';

        
        return $r;
    }

    function imprimir($texto = null) {
        if (is_null($texto)) {
            $r = '<h2>Não foi passado Parametro<h2><br>';
        } else {
            $r = '<h3>Esse Texto ao Lado foi Digitado : ' . $texto . '<h3>';
        }
        echo $r;
    }

}
