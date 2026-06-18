<?php

/**
 * Funções auxiliares (Parte D)
 */

/**
 * Recebe a quantidade disponível e retorna o status em texto.
 *
 * @param  int    $quantidade  quantidade disponível do livro
 * @return string              "Disponível" se for maior que zero; senão "Indisponível"
 */
function statusDisponibilidade(int $quantidade): string
{
    return $quantidade > 0 ? 'Disponível' : 'Indisponível';
}

/**
 * Função auxiliar de segurança: escapa caracteres especiais para exibição em HTML.
 *
 * Evita problemas de exibição e XSS quando títulos/autores possuem
 * caracteres como <, >, & ou aspas.
 *
 * OBS: a tabela da Parte D no enunciado pede "as duas funções", mas a segunda
 * linha foi cortada no documento. Esta é uma sugestão; confirme com o professor
 * qual deveria ser a segunda função.
 *
 * @param  string $texto  texto a ser exibido
 * @return string         texto seguro para HTML
 */
function escapar(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}
