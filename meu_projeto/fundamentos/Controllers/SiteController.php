<?php

namespace fundamentos\Controllers;

use fundamentos\Nucleo\Controlador;
use fundamentos\Model\PostModel;

class SiteController extends Controlador {
    public function __construct() {
        parent::__construct('templates/site/views');
    }

    public function index(): void {
        $posts = (new PostModel())->read();

        echo $this->template->render('index.html', [
            'title' => 'Home',
            'posts' => $posts
        ]);
    }

    public function about(): void {
        echo $this->template->render('about.html', [
            'title' => 'Sobre',
            'subtitle' => 'Sobre nós'
        ]);
    }

    public function error404(): void {
        echo $this->template->render('404.html', [
            'title' => 'Página não encontrada'
        ]);
    }
}