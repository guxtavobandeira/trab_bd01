# TRABALHO DE BANCO DE DADOS

# BIBLIOTECA EEEP MANOEL MANO

O trabalho do 3° bimestre aplicado pelo professor Adeilson Aragão consiste na criação de um projeto (banco de dados), em que o próprio será composto por 5 etapas, dentre essas, cada grupo deveria escolher seu tema, e a proposta desenvolvida pelo Grupo1 foi: Biblioteca EEEP Manoel Mano.

O projeto visa ampliar o conhecimento da equipe nos conceitos ensinados pelo mestre nas aulas anteriores, e também facilitar a entrega e o recebimento de livros da escola.

Desfrutem do sistema!

## 🔗 PARTICIPANTES

[![GitHub](https://img.shields.io/badge/GitHub-gustavobandeira-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/guxtavobandeira)

[![GitHub](https://img.shields.io/badge/GitHub-JuniorHora-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/JuniorHora)

[![GitHub](https://img.shields.io/badge/GitHub-GabrielPinto-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/gabrielveraspinto)

[![GitHub](https://img.shields.io/badge/GitHub-PHenrique-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/phgomes40)

[![GitHub](https://img.shields.io/badge/GitHub-ArthurMelo-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/arthurmelo0)

# Funções:
O aluno Francisco Flávio foi o responsável pela parte da programação em PHP e na linguagem de marcação HTML. 

O aluno Paulo Henrique Gomes ficou responsável por outra parte da programação em PHP.

Os alunos Gustavo Bandeira e Gabriel Pinto ficaram responsáveis pela criação dos modelos Lógicos e Conceituais no BrModelo, juntamente com a criação das tabelas geradas pelo próprio programa.

Os alunos Gustavo Bandeira e Francisco Arthur ficaram com a parte da criação do documento de leitura (README).

# As imagens dos modelos lógicos e conceituais estão em suas devidas pastas no início do repositório do github, simultaneamente com os arquivos dos próprios e os das programações em PHP e arquivos em HTML.

## Modelo Entidade Relacionamento (Lógico):

A biblioteca, contém 3 básicas entidades:

-Aluno;

-Bibliotecária;

-Livro;

![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/76a3aa12-0813-4222-8731-13918e902539)

## Modelo Entidade Relacionamento (Conceitual):

![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/f8f18278-3455-4618-b387-cb7c3ed905a4)

## Tabelas em modelo físico, desenvolvida pelo próprio BrModelo

```SQL
CREATE TABLE aluno (
    nome_aluno varchar(100),
    cod_aluno int  AUTO_INCREMENT PRIMARY KEY,
    curso_aluno varchar(100),
    sexo_aluno varchar(100),
    serie varchar(1),
    livro_aluno varchar(100)
);

CREATE TABLE bibliotecaria (
    nome_bib varchar(100),
    cod_bib int AUTO_INCREMENT PRIMARY KEY,
    livro_bib varchar(100)
);

CREATE TABLE livro (
    titulo varchar(100),
    autor varchar(100),
    cod_livro int AUTO_INCREMENT PRIMARY KEY,
    data_entrega date,
    data_dev date
);

CREATE TABLE aluno_bibli (
    fk_aluno_cod_aluno int,
    fk_bibliotecaria_cod_bib int
);

CREATE TABLE livro_bibli (
    fk_livro_cod_livro int,
    fk_bibliotecaria_cod_bib int
);

CREATE TABLE aluno_livro (
    fk_livro_cod_livro int,
    fk_aluno_cod_aluno int
);
 
ALTER TABLE aluno_bibli ADD CONSTRAINT FK_aluno_bibli_1
    FOREIGN KEY (fk_aluno_cod_aluno)
    REFERENCES aluno (cod_aluno)
    ON DELETE SET NULL;
 
ALTER TABLE aluno_bibli ADD CONSTRAINT FK_aluno_bibli_2
    FOREIGN KEY (fk_bibliotecaria_cod_bib)
    REFERENCES bibliotecaria (cod_bib)
    ON DELETE SET NULL;
 
ALTER TABLE livro_bibli ADD CONSTRAINT FK_livro_bibli_1
    FOREIGN KEY (fk_livro_cod_livro)
    REFERENCES livro (cod_livro)
    ON DELETE SET NULL;
 
ALTER TABLE livro_bibli ADD CONSTRAINT FK_livro_bibli_2
    FOREIGN KEY (fk_bibliotecaria_cod_bib)
    REFERENCES bibliotecaria (cod_bib)
    ON DELETE SET NULL;
 
ALTER TABLE aluno_livro ADD CONSTRAINT FK_aluno_livro_1
    FOREIGN KEY (fk_livro_cod_livro)
    REFERENCES livro (cod_livro)
    ON DELETE SET NULL;
 
ALTER TABLE aluno_livro ADD CONSTRAINT FK_aluno_livro_2
    FOREIGN KEY (fk_aluno_cod_aluno)
    REFERENCES aluno (cod_aluno)
    ON DELETE SET NULL;
```

### Atributos das tabelas geradas

#### Aluno:
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/4fb7c387-5aef-4da4-9fd8-c1a6809c953c)

#### Bibliotecária:
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/3520b8e5-a61a-4ef5-a7e0-a9aa46fd6af6)

#### Livro:
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/623b6d72-31b3-42f2-acfc-d69d3c351de1)

# Ativação do sistema

## 1- Ao entrar, o usuário poderá escolher oque deseja fazer, dentre isso estão as opções: 

-Cadastrar Alunos

-Cadastrar Blibiotecária

-Cadastrar Livro

## (Imagem Tela Inicial do site)

## 2- Ao selecionar a primeira opção, o usuário deverá se cadastrar seguindo as informações necessárias, devendo colocar seu nome, sua série, seu curso, seu sexo e o livro que deseja ler e receber da escola.
## (Imagem Tela de Cadastro do aluno)

## 3- Ao preencher seus dados, o aluno deverá passar a visualizar a segunda opção da tela inicial, a de cadastrar bibliotecarias. Asim, clicando a devida opção, o aluno será direcionado a outra tela, em que irá selecionar a bibliotecária que lhe atendeu (Aureni ou Quitéria) e o livro que o próprio optou. 
## (Imagem Tela de Cadastro da Bibliotecária)

## 4- Após isso, o comando da tela passará para a bibliotecária, em que a própria devrá preencher os campos da terceira opção, ou seja, os dados do livro, juntamente com a data de entrega e de devolução do próprio:
-Nome do livro:

-Autor do livro:

-Data de entrega:

-Data de devolução:

-(Imagem Tela de Cadastro do Livro)

# Consultas


### Listar alunos do curso de Enfermagem;
```SQL
    SELECT * FROM aluno WHERE curso_aluno = 'Enfermagem'
```
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/7839221c-05d9-4851-9865-85568180fbfe)


### Listar alunos do curso de Informática;
```SQL
    SELECT * FROM aluno WHERE curso_aluno = 'Informática'
```
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/48079be7-d35f-4747-b0a0-2f2a1601b5af)


### Listar alunos do curso de Comércio;
```SQL
    SELECT * FROM aluno WHERE curso_aluno = 'Comércio'
```
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/04eaf803-06e2-4b22-9977-20ecccde5797)


### Listar alunos do curso de Administração;
```SQL
    SELECT * FROM aluno WHERE curso_aluno = 'Administração'
```
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/ebe92028-538f-4768-b4a4-66ffe1e40318)


### Listar usuários do sexo Masculino;
```SQL
    SELECT * FROM aluno WHERE sexo_aluno = 'Masculino'
```
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/dc7954a1-ee5c-4f67-bd9a-f462b12fcc4e)


### Listar usuários do sexo Feminino;
```SQL
    SELECT * FROM aluno WHERE sexo_aluno = 'Feminino'
```
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/d4c07ed4-4295-460f-8d58-77afc53be234)


### Listar usuários do 1º ano;
```SQL
    SELECT * FROM aluno WHERE serie = '1'
```
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/41e8ebc2-e3e9-43c0-a62d-90a8ab11672c)


### Listar consultas em que a bibliotecária seja a Aureni;
```SQL
    SELECT * FROM bibliotecaria WHERE nome_bib = 'Aureni'
```
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/95c5408b-3af8-45ec-8328-513cc6972a54)


### Listar livros cujo autor é Manoel Gomes;
```SQL
    SELECT * FROM livro WHERE autor = 'Manoel Gomes'
```
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/3434f4b3-04e0-4d34-87ba-9f88d114f3c1)


### Listar usuários do 3º ano;
```SQL
    SELECT * FROM aluno WHERE serie = '3'
```
![image](https://github.com/guxtavobandeira/trab_bd01/assets/111713549/4d67ff83-1b09-427f-98f3-22edfaffd584)


#### Conclusão

##### Em outra observação, o trabalho pode ser uma visualização de um sistema de cadastro para a biblioteca da EEEP MANOEL MANO, em que o site esta visando melhorar e facilitar o recebimento e entrega de livros tanto para os alunos quanto para as bibliotecárias. 
# Agradecemos a visualização.



