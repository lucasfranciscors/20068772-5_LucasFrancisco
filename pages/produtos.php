<h3>  Produtos</h3>

<?php
include ("dados/arrays.php");
  //  var_dump ($aluno);
//foreach ($aluno as $value) {
  //echo "<p>" . $value["Nome"] . "</p>";

//}

//foreach ($doces as $value) {
//echo "<p>" . $value["Nome"] . "</p>";}

 ?>

 <section>
   <nav>
   <a href="index.php?pagina=pages/produto1.php"><img src="images/chocolatequente.jpg" alt="Chocolate Quente" style="width:300px; height:300px;"></a>
   </nav>
   <article>
     <h3> <?php echo $chocolatequente["nome"]; ?></h3>
     <h4>  Ingredientes  </h4>
     <h5> <?php echo $chocolatequente["ingredientes"]; ?><h5>
     <p> </p>
   </article>
 </section>

 <section>
   <nav>
 <a href="index.php?pagina=pages/produto2.php"><img src="images/docedeleite.jpg" alt="Doce de Leite" style="width:300px; height:300px;"></a>
   </nav>
   <article>
     <h3> <?php echo $docedeleite["nome"]; ?></h3>
     <h4>  Ingredientes  </h4>
     <h5> <?php echo $docedeleite["ingredientes"]; ?></h5>
     <p> </p>
   </article>
 </section>

 <section>
   <nav>
 <a href="index.php?pagina=pages/produto3.php"><img src="images/suspiro.jpg" alt="Suspiro" style="width:300px; height:300px;"></a>
   </nav>
   <article>
     <h3> <?php echo $suspiro["nome"]; ?></h3>
     <h4>  Ingredientes  </h4>
     <h5> <?php echo $suspiro["ingredientes"]; ?></h5>
     <p> </p>
   </article>
 </section>

 <section>
   <nav>
 <a href="index.php?pagina=pages/produto4.php"><img src="images/moussechocolate.jpg" alt="Mouse de Chocolate" style="width:300px; height:300px;"></a>
   </nav>
   <article>
     <h3> <?php echo $moussechocolate["nome"]; ?></h3>
     <h4>  Ingredientes  </h4>
     <h5> <?php echo $moussechocolate["ingredientes"]; ?></h5>
     <p> </p>
   </article>
 </section>

 <section>
   <nav>
 <a href="index.php?pagina=pages/produto5.php"><img src="images/quindim.jpg" alt="Quindim" style="width:300px; height:300px;"></a>
   </nav>
   <article>
     <h3> <?php echo $quindim["nome"]; ?></h3>
     <h4>  Ingredientes  </h4>
     <h5> <?php echo $quindim["ingredientes"]; ?></h5>
     <p> </p>
   </article>
 </section>

 <section>
   <nav>
 <a href="index.php?pagina=pages/produto6.php"><img src="images/beijinho.jpg" alt="Beijinho" style="width:300px; height:300px;"></a>
   </nav>
   <article>
     <h3> <?php echo $beijinho["nome"]; ?></h3>
     <h4>  Ingredientes  </h4>
     <h5> <?php echo $beijinho["ingredientes"]; ?></h5>
     <p> </p>
   </article>
 </section>
