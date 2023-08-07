<?php

/**
 * Classe Mensagem - responsável por exibir as mensagens do sistema.
 * @author Thiago Alves
 */
class Mensagem {
    private $texto;
    private $css;

    /**
     * Método responsável pela renderização
     * @return string
     */
    public function renderizar(): string {
        return $this->texto = $this->filtrar('<h1>Mensagem de teste');
    }

    private function filtrar(string $mensagem): string {
        return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}