<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro blibiotécaria</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(img.jpg);">
    <div class="container" style="text-align: center; margin-top: 120px; height: 440px; width: 550px; border: 2px solid white; border-radius: 10px;">
        <form method="post" action="salvar_biblioteca.php"> <br>
            <h1 style="color: white;">BIBLIOTÉCARIA</h1>
            <br>
            <BR></BR>
            <div class="row">
                <div class="col-sm">
               
                <label for="" style="color: white;"> NOME DA BIBLIOTECARIA:</label> 
                <select class="form-control" id="exampleInputPassword1" name="nome_bib">
                        <option selected>Selecione o Bibliotécaria</option>
                        <option value="Aureni" >Aureni</option>
                        <option value="Coisa">Coisa</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                <label for="" style="color: white;">LIVRO:</label> 
                 <input type="text" class="form-control" id="" name="livro_bib" placeholder="Ex: Pequeno pau">
                
                </div>
            </div>
            <br>
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
