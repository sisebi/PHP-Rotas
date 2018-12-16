<?php
namespace Traits;

trait parseUrl {
    function pegaUrl() {
        //Apos / tira todos espaços e get digitado ou por POST
        return explode('/', rtrim($_GET['digitado']),FILTER_SANITIZE_URL);
    }
    
}
