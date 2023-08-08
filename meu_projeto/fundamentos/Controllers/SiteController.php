<?php

namespace fundamentos\Controllers;

use fundamentos\Nucleo\Controlador;
use fundamentos\Model\PostModel;
use fundamentos\Nucleo\Helpers;

class SiteController extends Controlador {
    public function __construct() {
        parent::__construct('templates/site/views');
    }

    public function index(): void {
        $posts = (new PostModel())->search();

        echo $this->template->render('index.html', [
            'title' => 'Home',
            'posts' => $posts
        ]);
    }

    public function post(int $id): void {
        $post = (new PostModel())->searchById($id);
        if (!$post) {
            Helpers::redirect('404');
        }
        
        echo $this->template->render('posts.html', [
            'title' => 'Posts',
            'post' => $post
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