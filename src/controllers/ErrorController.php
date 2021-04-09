<?php

class ErrorController 
{
    public function notFound() {
        $errorMessage = "URL inválida.";
        require 'src/views/error.php';
    }

    public function unexpectedError() {
        $errorMessage = "Erro inesperado.";
        require 'src/views/error.php';        
    }
}