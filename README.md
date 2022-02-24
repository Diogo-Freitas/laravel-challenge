<h3 align="center">
    <p align="center">
      <b>LARAVEL CHALLENGE</b> 
    </p>
</h3>

<p align="center">
  <a href="https://github.com/Diogo-Freitas" target="_blank">
    <img alt="Made by Diogo-Freitas" src="https://img.shields.io/badge/By-Diogo--Freitas-green">
    <img alt="GitHub Last Commit" src="https://img.shields.io/github/last-commit/Diogo-Freitas/laravel-challenge" />
    <img alt="Repo Size" src="https://img.shields.io/github/repo-size/Diogo-Freitas/laravel-challenge" />
  </a>
</p>

<div align="center">
    <p>
        <a href="#sobre">Sobre</a> |
        <a href="#screenshots">Screenshots</a> |
        <a href="#tecnologias-utilizadas">Tecnologias Utilizadas</a> |
        <a href="#plugins">Plugins Utilizados</a> |
        <a href="#como-utilizar">Como Utilizar</a>
    </p>
</div>


<div id="sobre"></div>

## 🔖 Sobre

<p>O desafio consiste em construir uma página web onde os usuários possam fazer o cadastro/login e inserir dicas específicas dos veículos por tipo (Moto, Carro, Caminhão), incluir marca, modelo e versão. A versão do veículo deve ser opcional, por existir dica genérica do modelo.</p>

<p>Na home do site deve ser listado um grid com as dicas com possibilidade de filtro por tipo, marca, modelo e versão. Trazendo as dicas de todos os usuários.</p>


<div id="screenshots"></div>

## 📷 Screenshots
<h1>
    <p>Cadastro de usuário</p>
    <img width="270" alt="Dashboard" src="https://user-images.githubusercontent.com/65552838/149450317-010411e7-d42c-43fd-8876-92e75e55cbf5.png">
    <p>Login<p>
    <img width="270" alt="User" src="https://user-images.githubusercontent.com/65552838/149450476-ba686459-e91a-46f3-aa64-72276e90c561.png">
    <p>Home - Sem a necessidade de estar logado trazer as últimas dicas cadastradas com possibilidade de filtro.</p>
    <img width="270" alt="Profile" src="https://user-images.githubusercontent.com/65552838/149450486-c8725f69-7391-48ca-b277-58aa7313ba76.png">
    <p>Criar CRUD de dicas onde cada usuário terá sua própria listagem de dicas.<p>
</h1>

<div id="tecnologias-utilizadas"></div>


## 🚀 Tecnologias Utilizadas

- [PHP 8.1](https://php.net/)
- [Laravel 9.x](https://laravel.com/)

<div id="plugins"</div>

## 🧩 Plugins Utilizados
 - [Laravel Sail](https://github.com/laravel/sail)
 - [Laravel Breeze](https://github.com/laravel/breeze)

<a id="como-utilizar"></a>

## 💻 Como Utilizar

1. Faça um clone :

```sh
  # Clonar o repositório
  $ git clone https://github.com/Diogo-Freitas/laravel-challenge.git

  # Entrar no diretório
  $ cd laravel-challenge
```

2. Instalando a Aplicação Utilizando Sail com Docker:

```sh
  # Instale as dependências para a aplicação
  $ docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v $(pwd):/var/www/html \
        -w /var/www/html \
        laravelsail/php81-composer:latest \

    composer install --ignore-platform-reqs
 
  #Alias para os comandos Sail
  $ alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'

  # Execute o composer pelo sail
  $ sail composer install

  # Crie um arquivo .env
  $ cp .env.example .env

  # Crie uma nova chave
  $ sail artisan key:generate

  # Configure os parâmetros do servidor no arquivo .env

  # Execute as migrações
  $ sail artisan migrate --seed

  # Executa a apliação
  $ sail up -d
```