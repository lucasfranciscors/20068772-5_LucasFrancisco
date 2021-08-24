<?php
include ("dados/arrays.php");
 ?>

  <a href="index.php?pagina=pages/produtos.php"><button type="button" name="button">Voltar</button></a>

  <section>
    <nav>
  <a href="index.php?pagina=produto5.php"><img src="images/quindim.jpg" alt="Quindim" style="width:400px; height:400px;"></a>
    </nav>
    <article>
      <h3> <?php echo $quindim["nome"]; ?></h3>
      <h4>  Ingredientes  </h4>
      <p> <?php echo $quindim["ingredientes"]; ?></p>
           <h5>  Receita  </h5>
      <p> <?php echo $quindim["receita"]; ?></p>
    </article>
  </section>
