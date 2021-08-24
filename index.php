<!DOCTYPE html>
<html lang=”pt-br”>
<head>
<meta charset=”UTF-8859””>
<title>Doces Caseiros</title>

<link rel="stylesheet" href="css/mapa.css">

</head>
<?php include 'dados/arrays.php' ?>

<body>
 <header>
   <h1> DOCES CASEIROS <h1>
 <h2> Conheça nossas deliciosas receitas dos doces tradicionais brasileiros </h2>
 </header>

 <div id="id01"> <a href="index.php">Home</a>
     <a href="index.php?pagina=pages/quemsomos.php">Quem Somos</a>
       <a href="index.php?pagina=pages/produtos.php">Produtos</a>
         <a href="index.php?pagina=pages/localizacao.php">Localização</a>
           <a href="index.php?pagina=pages/contato.php">Contato</a>
         </div>



<main>
 <?php
 if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
   $pagina = $_GET["pagina"];
   include ($pagina);
 } else {
//   echo "Pagina Principal";

echo <<<HTML

  <h3>  Pagina Principal   </h3>
<section>
  <nav>
  <a href="index.php?pagina=pages/produto1.php"><img src="images/chocolatequente.jpg" alt="Chocolate Quente" style="width:200px; height:200px;"></a>
  </nav>
  <article>

    <h1 style="margin-top:100px;">Chocolate Quente </h1>

  </article>
</section>

<section>
  <nav>
<a href="index.php?pagina=pages/produto2.php"><img src="images/docedeleite.jpg" alt="Doce de Leite" style="width:200px; height:200px;"></a>
  </nav>
  <article>
    <h1 style="margin-top:100px;">Doce de Leite</h1>
  </article>
</section>

<section>
  <nav>
<a href="index.php?pagina=pages/produto3.php"><img src="images/suspiro.jpg" alt="Suspiro" style="width:200px; height:200px;"></a>
  </nav>
  <article>
    <h1 style="margin-top:100px;">Suspiro</h1>
  </article>
</section>

<section>
  <nav>
<a href="index.php?pagina=pages/produto4.php"><img src="images/moussechocolate.jpg" alt="Mouse de Chocolate" style="width:200px; height:200px;"></a>
  </nav>
  <article>
    <h1 style="margin-top:100px;">Mousse de Chocolate</h1>
  </article>
</section>

<section>
  <nav>
<a href="index.php?pagina=pages/produto5.php"><img src="images/quindim.jpg" alt="Quindim" style="width:200px; height:200px;"></a>
  </nav>
  <article>
    <h1 style="margin-top:100px;">Quindim</h1>
  </article>
</section>

<section>
  <nav>
<a href="index.php?pagina=pages/produto6.php"><img src="images/beijinho.jpg" alt="Beijinho" style="width:200px; height:200px;"></a>
  </nav>
  <article>
    <h1 style="margin-top:100px;">Beijinho</h1>
  </article>
</section>
HTML;
  }
  echo "</br>";

     ?>
<?php include 'pages/footer.php' ?>

</body>
</html>
