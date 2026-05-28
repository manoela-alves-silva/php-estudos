<?php require_once "header.php"; ?>
<?php

  $livros = array(
      array(
          "nome" => "Ensinando a Transgredir",
          "autora" => "Bell Hooks",
          "sinopse" => "Reflexões sobre educação crítica, liberdade e transformação social dentro da sala de aula.",
          "estoque" => 1,
          "valor" => 29.90
      ),
      array(
          "nome" => "Tudo sobre o amor",
          "autora" => "Bell Hooks",
          "sinopse" => "Discussão sobre amor, afeto e relações humanas em uma sociedade marcada por desigualdades.",
          "estoque" => 3,
          "valor" => 25.90

      ),
      array(
          "nome" => "Olhares Negros",
          "autora" => "Bell Hooks",
          "sinopse" => "Análise sobre representações raciais, cultura e identidade negra na mídia e na sociedade.",
          "estoque" => 1,
          "valor" => 45.00
      ),
      array(
          "nome" => "Não sou mulher?",
          "autora" => "Bell Hooks",
          "sinopse" => "Debate sobre racismo, feminismo e o impacto histórico da opressão sobre mulheres negras.",
          "estoque" => 1,
          "valor" => 30.00

      ),
      array(
          "nome" => "Mulheres, Raça e Classe",
          "autora" => "Angela Davis",
          "sinopse" => "Estudo sobre a relação entre racismo, capitalismo e desigualdade de gênero.",
          "estoque" => 1,
          "valor" => 40.00
      ),
      array(
          "nome" => "A Liberdade é uma Luta Constante",
          "autora" => "Angela Davis",
          "sinopse" => "Reflexões políticas sobre liberdade, resistência e movimentos sociais contemporâneo",
          "estoque" => 4,
          "valor" => 20.00
      ),
      array(
          "nome" => "Mulheres, Cultura e Política",
          "autora" => "Angela Davis",
          "sinopse" => "Coletânea de discursos e ensaios sobre feminismo, racismo e transformação social.",
          "estoque" => 2,
          "valor" => 35.60
      ),
      array(
          "nome" => "Estarão as Prisões Obsoletas?",
          "autora" => "Angela Davis",
          "sinopse" => "Discussão crítica sobre o sistema prisional e alternativas ao encarceramento em massa.",
          "estoque" => 2,
          "valor" => 15.00
      ),
      array(
          "nome" => "Ta todo mundo mal",
          "autora" => "Jout Jout",
          "sinopse" => "Reflexões sobre ansiedade, relacionamentos e experiências da vida adulta contemporânea.",
          "estoque" => 1,
          "valor" => 33.90
      ),
      array(
          "nome" => "Um defeito de cor",
          "autora" => "Ana Maria Gonçalves",
          "sinopse" => "Romance histórico que acompanha a trajetória de uma mulher africana escravizada no Brasil.",
          "estoque" => 6,
          "valor" => 99.90
      )

    );
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>


</head>
<body>

<h1> Nossos Livros</h1>

<div class="grid">
    <?php foreach ($livros as $livro): ?>
        <div class="card">
            <h2><?=($livro['nome']) ?></h2>
            <p class="autora"> <?=($livro['autora']) ?></p>
            <p class="sinopse"><?=($livro['sinopse']) ?></p>
            <div class="rodape">
                <span class="valor">
                    <?= isset($livro['valor']) ? 'R$ ' . number_format($livro['valor'], 2, ',', '.') : 'Sob consulta' ?>
                </span>
                <span class="estoque <?= $livro['estoque'] <= 1 ? 'baixo' : '' ?>">
                    Estoque: <?= $livro['estoque'] ?>
                </span>
            </div>
            <button>Adicionar ao carrinho</button>
        </div>
    <?php endforeach; ?>
</div>

<?php require_once "footer.php"; ?>

</body>
</html>











