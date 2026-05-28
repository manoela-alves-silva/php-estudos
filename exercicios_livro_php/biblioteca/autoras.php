<?php require_once "header.php"; ?>

<?php

  $autoras = array(
        array(
                "nome" => "bell hooks",
                "biografia" => "Bell hooks foi uma escritora, professora e ativista norte-americana. Sua obra aborda feminismo, racismo, educação e relações sociais. Tornou-se uma
                 das principais vozes do feminismo negro contemporâneo e influenciou debates sobre amor, cultura e liberdade.",
                "nacionalidade" =>  "Estados Unidos",
                "livro_famoso" =>  "Tudo sobre o amor",
                "imagem" => "img/bell_hooks.jpg"
        ),
            array(
                "nome" => "angela davis",
                "biografia" => "Angela Davis é filósofa, professora e ativista política. Suas obras discutem racismo, desigualdade social,
                feminismo e o sistema prisional. Tornou-se uma referência mundial nos movimentos de direitos civis e justiça social.",
                "nacionalidade" =>  "Estados Unidos",
                "livro_famoso" =>  "Mulheres, Raça e Classe",
                "imagem" => "img/angela_davis.jpeg"
        ),
            array(
                "nome" => "Jout Jout",
                "biografia" => "Jout Jout é escritora, comunicadora e criadora de conteúdo brasileira. Ficou conhecida por abordar saúde mental, relacionamentos e 
                 cotidiano de maneira leve e reflexiva. Seus livros e vídeos dialogam principalmente com o público jovem adulto",
                "nacionalidade" =>  "Brasil",
                "livro_famoso" =>  "Tá todo mundo mal",
                "imagem" => "img/jout_jout.jpg"
        ),
            array(
                "nome" => "Ana Maria Gonçalves",
                "biografia" => "Ana Maria Gonçalves é escritora e roteirista brasileira. Tornou-se amplamente reconhecida pelo romance “Um Defeito de Cor”, 
                 considerado uma das obras mais importantes da literatura brasileira contemporânea. Seus trabalhos valorizam memória, ancestralidade e identidade negra.",
                "nacionalidade" =>  "Brasil",
                "livro_famoso" =>  "Um defeito de cor",
                "imagem" => "img/ana_maria.jpg"
        )


    );

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Autoras</title>
</head>


<h1>Nossas Autoras:</h1>

<?php foreach ($autoras as $autora): ?>

    <div>
        <img src="<?= $autora['imagem'] ?>" alt="<?= $autora['nome'] ?>" width="200px">

        <h2><?= $autora['nome'] ?></h2>

        <p>
            <strong>Nacionalidade:</strong>
            <?= $autora['nacionalidade'] ?>
        </p>

        <p>
            <strong>Livro famoso:</strong>
            <?= $autora['livro_famoso'] ?>
        </p>

        <p> <?= $autora['biografia'] ?> </p>

        <hr>
    </div>

<?php endforeach; ?>

<?php require_once "footer.php"; ?>
