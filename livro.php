<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
		<h1>Formulário Cadastro - PHP com MySql</h1>
		<form method="post" action="salvar_livro.php">
            <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Cadastro Livro</title>
    </head>
    <body style="background-image: url(img.jpg);">
        <div class="container" style="text-align: center; margin-top: 120px; height: 440px; width: 550px; border: 2px solid; border-color:white; border-radius: 10px;">
        <form method="post" action="salvar_livro.php"> <br>
            <h1 style="color: white;">LIVRO</h1>
            <br>
            <div class="row">
                <div class="col-sm">
                <label for="" style="color: white;">TITULO:</label>   
                 <input type="text" class="form-control" id="" name="titulo" placeholder="Ex: A gozada fenomenal">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                <label for="" style="color: white;">AUTOR:</label>   
                <input type="text" class="form-control" id="" name="autor" placeholder="Ex: Manoel Gomes">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                <label for="" style="color: white;">DATA DE ENTREGA:</label>   
                 <input type="date" class="form-control" id="" name="data_entrega">
                
                </div>
                <div class="col-sm">
                <label for="" style="color: white;">DATA DE DEVOLUÇÃO:</label>   
                 <input type="date" class="form-control" id="" name="data_dev">
                
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
        TITULO<input type="text" name="titulo">
		<br>
		AUTOR<input type="text" name="autor">
		<br>
		CODIGO<input type="text" name="cod_livro">
		<br>
		DATA DA ENTREGA<input type="text" name="data_entrega">
		<br>
		DATA DA DEVOLUÇÃO<input type="text" name="data_dev">	

		<br>
		<button type="submit" class="btn btn-primary">Salvar</button>
		</form>
		<button style="height: 50px; width: 100px;" onclick="window.open('http://127.0.0.1:5500/proj.html')">link</button>
</body>
</html>
