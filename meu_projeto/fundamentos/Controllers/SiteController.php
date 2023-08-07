<?php

namespace fundamentos\Controllers;

use fundamentos\Nucleo\Controlador;

class SiteController extends Controlador {
    public function __construct() {
        parent::__construct('templates/site/views');
    }

    public function index(): void {
        echo $this->template->render('index.html', [
            'titulo' => 'Título',
            'subtitulo' => 'Subtitulo'
        ]);
    }

    public function about(): void {
        echo $this->template->render('about.html', [
            'titulo' => 'Sobre',
            'subtitulo' => 'Sobre nós'
        ]);
    }
}