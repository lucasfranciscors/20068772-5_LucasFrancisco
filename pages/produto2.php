<?php
include ("dados/arrays.php");
 ?>

  <a href="index.php?pagina=pages/produtos.php"><button type="button" name="button">Voltar</button></a>

  <section>
    <nav>
  <a href=""><img src="images/docedeleite.jpg" alt="Doce de Leite" style="width:400px; height:400px;"></a>
    </nav>
    <article>
      <h3> <?php echo $docedeleite["nome"]; ?></h3>
      <h4>  Ingredientes  </h4>
      <p> <?php echo $docedeleite["ingredientes"]; ?></p>
           <h5>  Receita  </h5>
      <p> <?php echo $docedeleite["receita"]; ?></p>
    </article>
  </section>
