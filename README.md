<h1 align="center"> Projeto WEB - Xastre </h1>
<div align="center">
<img src="https://user-images.githubusercontent.com/112004721/196309270-75a3abfd-7cd1-4311-a9df-76ca5b378150.png" width="700px" />
</div>
 <p align="center">
<a href="https://github.com/Sam0929/GITHUB-APRESENTATION/issues"><img alt="GitHub issues" src="https://img.shields.io/github/issues/Sam0929/GITHUB-APRESENTATION"></a>
  </p>
# Projeto CRUD Laravel

* ## 📁 [Apresentação Projeto WEB]
Projeto CRUD Laravel Alunos, Professores, Matérias e seus Filmes!

### Passo a passo acesso ao projeto
Clone Repositório criado a partir do template, entre na pasta e execute os comandos abaixo:

Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
DB_PASSWORD=root
```


Suba os containers do projeto
```sh
docker compose up -d
```


Acessar o container
```sh
docker compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Subir as tabelas para o banco de dados
```sh
php artisan migrate
```
Acesse o projeto
[http://localhost:8080](http://localhost:8080)

E utilize-o como desejar
```sh
Após acessar a home, basta clicar em Tabela de Alunos e Adicionar um Novo Aluno.
```

Acesse o phpmyadmin
[http://localhost:8081](http://localhost:8081)

API de categorias e filmes:
https://www.learn-laravel.cf/

Rotas:
- (get) /categories
- (get) /category/{id}
- (get) /movies
- (get) /movie/{id}

## Autores
* Samuel Vanini.
* Lucas Marzochi.
* Guilherme Lopes.
