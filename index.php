<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas PHP</title>
</head>
<body>
    <pre>
        <?php
            require_once "classes/visualizacao.php";
            $g1 = new Gafanhoto("Antonio Vivas", 20, "M", "Antonio");
            $v1 = new Video("Curso de PHP");
            $vis1 = new Vizualizacao($g1, $v1);
            $vis1->assistir();
            $vis1->avaliar();
            print_r($vis1);
        ?>
    </pre>
</body>
</html>