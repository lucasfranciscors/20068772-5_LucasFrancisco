
<?php
include ("dados/arrays.php");
 ?>


  <a href="index.php?pagina=pages/produtos.php"><button type="button" name="button">Voltar</button></a>
 <section>
   <nav>
   <a href=""><img src="images/chocolatequente.jpg" alt="Chocolate Quente" style="width:400px; height:400px;"></a>
   </nav>
   <article>
     <h3> <?php echo $chocolatequente["nome"]; ?></h3>
     <h4>  Ingredientes  </h4>
     <p> <?php echo $chocolatequente["ingredientes"]; ?></p>
       <h5>  Receita  </h5>
     <p> <?php echo $chocolatequente["receita"]; ?></p>
   </article>
 </section>
