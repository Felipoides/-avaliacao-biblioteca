<?php

/**
 * Listagem dos livros (Parte E)
 *
 * - Inclui conexao.php, Livro.php e helpers.php
 * - Executa o SELECT exigido
 * - Percorre as linhas com while/fetch()
 * - Transforma cada linha em um objeto Livro
 * - Exibe os dados em uma tabela HTML
 */

require_once __DIR__ . '/config/conexao.php';
require_once __DIR__ . '/class/Livro.php';
require_once __DIR__ . '/helpers.php';

// SELECT exigido pela avaliação
$sql = "SELECT codigo, titulo, autor, ano_publicacao, quantidade_disponivel
        FROM livros
        ORDER BY titulo ASC";

// Executa a consulta
$stmt = $pdo->query($sql);

// Monta um vetor de objetos Livro a partir das linhas retornadas
$livros = [];
while ($linha = $stmt->fetch()) {
    $livros[] = new Livro(
        $linha['titulo'],
        $linha['autor'],
        (int) $linha['ano_publicacao'],
        (int) $linha['quantidade_disponivel'],
        (int) $linha['codigo']
    );
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Livros - Biblioteca</title>
    <style>
        :root {
            --azul: #1f4e79;
            --azul-claro: #d5e8f0;
            --cinza: #e9ecef;
            --verde: #1b7a3d;
            --vermelho: #b02a37;
        }
        * { box-sizing: border-box; }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f8;
            color: #222;
            margin: 0;
            padding: 24px;
        }
        h1 {
            color: var(--azul);
            margin: 0 0 4px;
            font-size: 24px;
        }
        p.subtitulo {
            margin: 0 0 20px;
            color: #555;
        }
        .tabela-wrap {
            overflow-x: auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0,0,0,.12);
        }
        table {
            border-collapse: collapse;
            width: 100%;
            min-width: 760px;
        }
        th, td {
            padding: 10px 14px;
            text-align: left;
            border-bottom: 1px solid var(--cinza);
            font-size: 14px;
        }
        thead th {
            background: var(--azul);
            color: #fff;
            font-weight: bold;
            white-space: nowrap;
        }
        tbody tr:nth-child(even) { background: #f7fafc; }
        tbody tr:hover { background: var(--azul-claro); }
        td.centro { text-align: center; }
        .status {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: bold;
            color: #fff;
        }
        .status.disponivel   { background: var(--verde); }
        .status.indisponivel { background: var(--vermelho); }
        .vazio {
            text-align: center;
            padding: 30px;
            color: #777;
        }
    </style>
</head>
<body>

    <h1>📚 Consulta de Livros</h1>
    <p class="subtitulo">Acervo da biblioteca da escola — total de <?= count($livros) ?> livro(s) cadastrado(s).</p>

    <div class="tabela-wrap">
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ano</th>
                    <th>Qtd. disponível</th>
                    <th>Situação</th>
                    <th>Resumo</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($livros)): ?>
                    <tr>
                        <td colspan="7" class="vazio">Nenhum livro cadastrado.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($livros as $livro): ?>
                        <?php
                            $qtd     = $livro->getQuantidadeDisponivel();
                            $status  = statusDisponibilidade($qtd);
                            $classe  = $livro->estaDisponivel() ? 'disponivel' : 'indisponivel';
                        ?>
                        <tr>
                            <td class="centro"><?= $livro->getCodigo() ?></td>
                            <td><?= escapar($livro->getTitulo()) ?></td>
                            <td><?= escapar($livro->getAutor()) ?></td>
                            <td class="centro"><?= $livro->getAnoPublicacao() ?></td>
                            <td class="centro"><?= $qtd ?></td>
                            <td class="centro">
                                <span class="status <?= $classe ?>"><?= $status ?></span>
                            </td>
                            <td><?= escapar($livro->getResumo()) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
