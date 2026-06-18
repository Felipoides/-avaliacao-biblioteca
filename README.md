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

## Como executar (XAMPP / WAMP)

1. Coloque a pasta `avaliacao_biblioteca` dentro de `htdocs` (XAMPP) ou `www` (WAMP).
2. Inicie o Apache e o MySQL.
3. No DBeaver (ou phpMyAdmin), execute o arquivo `biblioteca.sql` para criar o banco `biblioteca`, a tabela `livros` e os livros de teste.
4. Se necessário, ajuste usuário/senha do banco em `config/conexao.php`
   (por padrão: usuário `root`, senha vazia).
5. Acesse no navegador: `http://localhost/avaliacao_biblioteca/`
   O `index.php` redireciona automaticamente para `listar_livros.php`.

## Observação sobre a Parte D

O enunciado pede "as duas funções", mas a tabela do documento só traz uma
(`statusDisponibilidade`). A segunda linha foi cortada no original.
Incluí uma segunda função (`escapar`) por boa prática de segurança ao exibir HTML.
Confirme com o professor qual deveria ser a segunda função.

## Antes de entregar

- Renomeie a pasta/zip para `avaliacao_biblioteca_seu_nome.zip`.
- O arquivo SQL (`biblioteca.sql`) já está incluído, como exigido.
