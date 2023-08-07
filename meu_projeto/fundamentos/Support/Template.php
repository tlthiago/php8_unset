<?php

namespace fundamentos\Support;
use Twig\Lexer;
use fundamentos\Nucleo\Helpers;

class Template {
    private \Twig\Environment $twig;

    public function __construct(string $directory) {
        $loader = new \Twig\Loader\FilesystemLoader($directory);
        
        $this->twig = new \Twig\Environment($loader);
        
        $lexer = new Lexer($this->twig, array(
            $this->helpers()
        ));

        $this->twig->setLexer($lexer);
    }

    public function render(string $view, array $dados) {
        return $this->twig->render($view, $dados);
    }

    private function helpers(): void {
        array(
            $this->twig->addFunction(
                new \Twig\TwigFunction('url', function(string $url = null) {
                    return Helpers::url($url);
                })
            ),
            $this->twig->addFunction(
                new \Twig\TwigFunction('saudacao', function() {
                    return Helpers::saudacao();
                })
            ),
            $this->twig->addFunction(
                new \Twig\TwigFunction('resumirTexto', function(string $texto, int $limite) {
                    return Helpers::resumirTexto($texto, $limite);
                })
            )
        );
    }
}