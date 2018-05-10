# Criando um Blog em Minutos com CakePHP

## O que vamos aprender

 - O projeto de 10 minutos
 - Convenções do CakePHP
 - Fugindo das conveções
 - Modelando o banco de dados
 - CRUD rápido com Cake Bake
 - Entendendo o código gerado
 - Autenticação
 - Permissões de acesso

## Inscrição

[Use este formulário para pedir o convite](https://conteudo.schoolofnet.com/criando-um-blog-em-minutos-com-cakephp3)

## Material de apoio

### Banco de dados - MySQL

```
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(100) NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE posts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50),
    body TEXT,
    user_id INT(11) NOT NULL,
    created DATETIME,
    modified DATETIME
);
```

## Deploy da aplicação no Heroku?

[Aqui uma aula mostrando como publicar um projeto com CakePHP no Heroku](https://www.schoolofnet.com/canal-direto-ao-ponto/cakephp-no-heroku/)

## Precisa de um plano de estudos?

[Aqui tem um pra você](https://www.schoolofnet.com/plano-de-estudo-cakephp/)
