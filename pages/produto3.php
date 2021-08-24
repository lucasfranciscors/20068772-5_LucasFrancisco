<?php
include ("dados/arrays.php");
 ?>

  <a href="index.php?pagina=pages/produtos.php"><button type="button" name="button">Voltar</button></a>

  <section>
    <nav>
  <a href="index.php?pagina=produto3.php"><img src="images/suspiro.jpg" alt="Suspiro" style="width:400px; height:400px;"></a>
    </nav>
    <article>
      <h3> <?php echo $suspiro["nome"]; ?></h3>
      <h4>  Ingredientes  </h4>
      <p> <?php echo $suspiro["ingredientes"]; ?></p>
         <h5>  Receita  </h5>
      <p>  <?php echo $suspiro["receita"]; ?></p>
    </article>
  </section>
