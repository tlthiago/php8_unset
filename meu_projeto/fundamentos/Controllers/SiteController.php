<?php

namespace fundamentos\Controllers;

use fundamentos\Nucleo\Controlador;

class SiteController extends Controlador {
    public function __construct() {
        parent::__construct('templates/site/views');
    }

    public function index(): void {
        echo $this->template->render('index.html', [
            'title' => 'Home',
            'subtitle' => 'Texto de subtitulo'
        ]);
    }

    public function about(): void {
        echo $this->template->render('about.html', [
            'title' => 'Sobre',
            'subtitle' => 'Sobre nós'
        ]);
    }
}