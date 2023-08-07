<?php

namespace fundamentos\Controllers;

class SiteController {
    public function index(): void {
        echo 'Página inicial';
    }

    public function about(): void {
        echo 'Página sobre';
    }
}