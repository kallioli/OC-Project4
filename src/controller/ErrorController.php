<?php

namespace App\src\controller;

class ErrorController extends Controller
{
    public function errorNotFound()
    {
        echo $this->twig->render('error_404.html.twig');
    }

    public function errorServer()
    {
        echo $this->twig->render('error_500.html.twig');
    }
}