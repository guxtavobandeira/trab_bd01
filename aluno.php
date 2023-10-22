<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Cadastro Aluno </title>
    </head>
    <body style="background-image: url(img.jpg);">
        <div class="container" style="text-align: center; margin-top: 100px; height: 440px; width: 550px; border: 2px solid white; border-radius: 10px;">
        <form method="post" action="salvar_aluno.php"> <br>
            <h1 style="color: white;">CLIENTE</h1>
            <br>
            <div class="row">
                <div class="col-sm">
                <label for="" style="color: white;">NOME:</label>   
                <input type="text" class="form-control" id="" name="nome_aluno" placeholder="Ex: Junim do Grau">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                
                
                <label for="" style="color: white;">SERIE:</label>  
                <select class="form-control" id="exampleInputPassword1" name="serie">
                        <option selected>Selecione a Serie</option>
                        <option  value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        
                    </select>
                </div>
                <div class="col-sm">
                
                
                <label for="" style="color: white;">CURSO:</label>  
                    <select class="form-control" id="exampleInputPassword1" name="curso_aluno">
                        <option selected>Selecione o Curso</option>
                        <option value="Informática">Informática</option>
                        <option value="Enfermagem">Enfermagem</option>
                        <option value="Comércio">Comércio</option>
                        <option value="Administraçã">Administração</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                
                
                <label for="" style="color: white;">SEXO:</label>  
                <select class="form-control" id="exampleInputPassword1" name="sexo_aluno">
                        <option selected>Selecione o Sexo</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
                <div class="col-sm">
                <label for="" style="color: white;">LIVRO:</label>  
                 
                <input type="text" class="form-control" id="" name="livro_aluno" placeholder="Ex: Bandeira o pequeno nariz">
                
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                    <label for="exampleInputc"> </label>
                    <button type="submit" class=" form-control btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" placeholder="">Salvar</button>
                </div>
                <div class="col-sm">
                    <label for="exampleInputc"> </label>
                    <button type="submit" class=" form-control btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" placeholder="" onclick="window.open('http://localhost/crudj/proj.html')">Voltar</button>
                </div>
            </div>
        </form>
        </div>
    </body>
    </html>
