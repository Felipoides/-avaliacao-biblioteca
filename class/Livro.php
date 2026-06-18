<?php

/**
 * Classe Livro (Parte B)
 *
 * Representa um livro do acervo da biblioteca.
 * Cada linha retornada do banco de dados é transformada em um objeto desta classe.
 */
class Livro
{
    // Atributos privados (encapsulamento exigido na avaliação)
    private int $codigo;
    private string $titulo;
    private string $autor;
    private int $anoPublicacao;
    private int $quantidadeDisponivel;

    /**
     * Construtor.
     *
     * Recebe título, autor, ano de publicação, quantidade disponível e,
     * opcionalmente, o código (por isso ele é o último parâmetro e tem valor padrão 0).
     */
    public function __construct(
        string $titulo,
        string $autor,
        int $anoPublicacao,
        int $quantidadeDisponivel,
        int $codigo = 0
    ) {
        $this->titulo               = $titulo;
        $this->autor                = $autor;
        $this->anoPublicacao        = $anoPublicacao;
        $this->quantidadeDisponivel = $quantidadeDisponivel;
        $this->codigo               = $codigo;
    }

    // ---------- Getters ----------

    public function getCodigo(): int
    {
        return $this->codigo;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function getAnoPublicacao(): int
    {
        return $this->anoPublicacao;
    }

    public function getQuantidadeDisponivel(): int
    {
        return $this->quantidadeDisponivel;
    }

    // ---------- Métodos de comportamento ----------

    /**
     * Retorna true quando há pelo menos um exemplar disponível.
     */
    public function estaDisponivel(): bool
    {
        return $this->quantidadeDisponivel > 0;
    }

    /**
     * Retorna um resumo no formato: Título - Autor (Ano).
     * Exemplo: "Dom Casmurro - Machado de Assis (1899)".
     */
    public function getResumo(): string
    {
        return $this->titulo . ' - ' . $this->autor . ' (' . $this->anoPublicacao . ')';
    }
}
