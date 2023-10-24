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
O aluno Francisco Flávio foi o responsável pela parte da programação em PHP e HTML. 

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
##### Em outra observação, o trabalho pode ser uma visualização de um sistema de cadastro para a biblioteca da EEEP MANOEL MANO, em que o site esta visando melhorar e facilitar o recebimento e entrega de livros tanto para os alunos quanto para as bibliotecárias. 
# Agradecemos a visualização.



