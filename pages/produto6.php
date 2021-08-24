<?php
include ("dados/arrays.php");
 ?>

  <a href="index.php?pagina=pages/produtos.php"><button type="button" name="button">Voltar</button></a>

  <section>
    <nav>
  <a href="index.php?pagina=produto6.php"><img src="images/beijinho.jpg" alt="Beijinho" style="width:400px; height:400px;"></a>
    </nav>
    <article>
      <h3> <?php echo $beijinho["nome"]; ?></h3>
      <h4>  Ingredientes  </h4>
      <p> <?php echo $beijinho["ingredientes"]; ?></p>
         <h5>  Receita  </h5>
      <p> <?php echo $beijinho["receita"]; ?></p>
    </article>
  </section>
