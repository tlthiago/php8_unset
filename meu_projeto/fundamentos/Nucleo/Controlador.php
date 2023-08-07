<?php

namespace fundamentos\Nucleo;

use fundamentos\Support\Template;

class Controlador {
    protected Template $template;

    public function __construct(string $directory) {
        $this->template = new Template($directory);
    }
}