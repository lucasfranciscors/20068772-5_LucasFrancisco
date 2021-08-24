<?php
include ("dados/arrays.php");
 ?>

  <a href="index.php?pagina=pages/produtos.php"><button type="button" name="button">Voltar</button></a>

  <section>
    <nav>
  <a href="index.php?pagina=produto4.php"><img src="images/moussechocolate.jpg" alt="Mouse de Chocolate" style="width:400px; height:400px;"></a>
    </nav>
    <article>
      <h3> <?php echo $moussechocolate["nome"]; ?></h3>
      <h4>  Ingredientes  </h4>
      <p> <?php echo $moussechocolate["ingredientes"]; ?></p>
       <h5>  Receita  </h5>
      <p> <?php echo $moussechocolate["receita"]; ?> </p>
    </article>
  </section>
