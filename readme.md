
# Configurações

Para o funcionamento correto do projeto, deve se criar um banco de dados e configurar no arquivo

.env

As Configurações padrão esta: 

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=bd_crud

DB_USERNAME=root

DB_PASSWORD=1234

apos isso gerar o migrate, 


```
$ php artisan migrate
```
Com sucesso executar os seguintes comando:

```
$ npm run dev
```
```
$ php artisan serve
```
## Como usar

É possivel cadastrar usuarios e logar no sistema,

O sistema por segurnaça bloqueia o email e o ip apos 3 tentativas erradas, necessitando fazer o desbloqueio em um campo logo abaixo do login, apos 3 minutos é desbloqueado novamente
