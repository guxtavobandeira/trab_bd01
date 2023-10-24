<?php
include 'conexao.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", { packages: ["corechart"] });
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([

        ['Cursos', 'Alunos'],
        <?php
        $oi = 20;
        $sql2 = mysqli_query($conexaoBD,"SELECT COUNT(curso_aluno) AS qntd FROM aluno WHERE curso_aluno = 'Enfermagem'");
        $dados2 =  mysqli_fetch_array($sql2);
        $aluno2 = $dados2["qntd"];
        $sql3 = mysqli_query($conexaoBD,"SELECT COUNT(curso_aluno) AS qntd FROM aluno WHERE curso_aluno = 'Informática'");
        $dados3 =  mysqli_fetch_array($sql3);
        $aluno3 = $dados3["qntd"];
        $sql4 = mysqli_query($conexaoBD,"SELECT COUNT(curso_aluno) AS qntd FROM aluno WHERE curso_aluno = 'Comércio'");
        $dados4 =  mysqli_fetch_array($sql4);
        $aluno4 = $dados4["qntd"];
        $sql5 = mysqli_query($conexaoBD,"SELECT COUNT(curso_aluno) AS qntd_alunos_curso FROM aluno WHERE curso_aluno = 'Administração'");
        $dados5 =  mysqli_fetch_array($sql5);
        $aluno5 = $dados4["qntd"];
        
        ?>

      ["<?php echo'Enfermagem' ?>",<?php echo $aluno2 ?>],
      ["<?php echo'Informatica' ?>", <?php echo $aluno3 ?>],
      ["<?php echo'Comércio' ?>",  <?php echo $aluno4 ?>],
      ["<?php echo'Administração' ?>",  <?php echo $aluno5 ?>],
      
      ]);

      var options = {
        title: 'Gráfico de Matricula de Alunos',
        pieHole: 0.5,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }

  </script>
  <div id="donutchart" style="width: 900px; height: 500px;"></div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
