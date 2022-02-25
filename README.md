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
    <img width="270" alt="Home" src="https://user-images.githubusercontent.com/6785738/155634798-00498056-1509-415d-a86a-67c68fa207e4.png">
    <img width="270" alt="CRUD" src="https://user-images.githubusercontent.com/6785738/155635661-1deb128e-4ffb-4b22-b261-22785ca23b49.png">
    <img width="270" alt="TIPS" src="https://user-images.githubusercontent.com/6785738/155635708-faa0f41e-b55b-4866-b643-d5883a504b5e.png">
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
  # Clonando o repositório
  $ git clone https://github.com/Diogo-Freitas/laravel-challenge.git

  # Entrando no diretório
  $ cd laravel-challenge
```

2. Instalando a Aplicação Utilizando Sail com Docker:

```sh
  # Instalando dependências do Composer para aplicativos existentes
  $ docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
 
  # Configurando um Alias Bash
  $ alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
  
  # Iniciando Sail
  $ sail up -d
  
  # Criando um arquivo .env
  $ cp .env.example .env

  # Gerando uma nova chave
  $ sail artisan key:generate
  
  # Execultando o composer
  $ sail composer install

  # Execultando as migrações
  $ sail artisan migrate --seed
```
