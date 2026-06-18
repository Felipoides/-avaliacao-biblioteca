# Sistema de Consulta de Livros (PHP, MySQL, PDO e POO)

Avaliação — Introdução a Algoritmos e Desenvolvimento Web.

## Estrutura do projeto

```
avaliacao_biblioteca/
├── class/
│   └── Livro.php          (Parte B - classe com atributos privados, construtor, getters, estaDisponivel(), getResumo())
├── config/
│   └── conexao.php        (Parte C - conexão PDO com try/catch)
├── helpers.php            (Parte D - statusDisponibilidade() e escapar())
├── index.php              (Parte F - redireciona para listar_livros.php)
├── listar_livros.php      (Parte E - SELECT, vetor de objetos Livro e tabela HTML)
├── biblioteca.sql         (Parte A - cria o banco, a tabela e os dados de teste)
└── README.md
```

## Observação sobre a Parte D

O enunciado pede "as duas funções", mas a tabela do documento só traz uma
(`statusDisponibilidade`). A segunda linha foi cortada no original.
Incluí uma segunda função (`escapar`) por boa prática de segurança ao exibir HTML.
Confirme com o professor qual deveria ser a segunda função.
