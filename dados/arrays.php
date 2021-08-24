
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $aluno = array("Nome" => "Lucas Francisco Rodrigues e Silva", "RA" => "20068772-5",
      "Curso" => "SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET", "Disciplina" => "PROGRAMAÇÃO BACK END I"
    );

    //  $doces = array (
    //    "chocolatequente" => array("nome" => "Chocolate Quente", "imagem" => "images/chocolatequente.jpg",
    //                "receita" => "Misture na panela até ferver",
    //              "ingredientes" => "Leite, achocolatado" ),
//
  //          "docedeleite" => array  ("nome" => "Chocolate Quente", "imagem" => "images/docedeleite.jpg",
    //                            "receita" => "Misture na panela até ferver",
      //                        "ingredientes" => "Leite, achocolatado" ),//
//

                            //  );
$chocolatequente = array("nome" => "Chocolate Quente",
"receita" => "Em um liquidificador, bata o leite, o amido de milho, o chocolate em pó e o açúcar </br>
 Despeje a mistura em uma panela com a canela e leve ao fogo baixo, mexendo sempre até ferver </br>
 Desligue, adicione o creme de leite e mexa bem até obter uma mistura homogênea </br>
 Retire a canela e sirva quente",
"ingredientes" => "Leite </br> Amido de milho  </br> Chocolate em pó  </br>Açúcar  </br>Creme de leite"  );


$docedeleite = array  ("nome" => "Doce de Leite",  "receita" => "Coloque o leite e o açúcar em uma panela grande de fundo largo </br>
Leve ao fogo médio, mexendo sempre com uma colher de pau, até obter fervura (cerca de 15 minutos) </br>
Diminua o fogo e continue mexendo até obter um doce marrom claro de consistência cremosa (cerca de 45 minutos)</br> 
Passe o doce para um refratário, deixe esfriar bem e sirva colheradas em pratos de sobremesa com fatias de queijo branco.",
                  "ingredientes" => "Leite </br> Açucar" );

  $suspiro = array  ("nome" => "Suspiro",  "receita" => "Bata as claras em batedeira, até que formem neve bem consistente, de maneira que virando a tigela elas estejam presas ao fundo. </br>
Coloque o açucar aos poucos e continue batendo, até que forme neve bem consistente </br>
Com um saco de confeitar monte os suspiros em uma forma untada com manteiga e farinha e trigo (pode ser também em uma folha de papel manteiga)</br>
Salpique as raspas de limão ou laranja sobre os suspiros montados.</br>
Leve ao forno pré aquecido, 180 graus, por 15 minutos ou até perceber que estejam douradinhos.</br>
É importante que o forno não esteja mais aquecido que 180°C, do contrário os suspiros podem queimar.",
                                    "ingredientes" => "Claras </br>
Açúcar </br> Raspas de limão ou laranja </br> Açucar" );

$moussechocolate = array  ("nome" => "Mousse de Chocolate",  "receita" => "Coloque no liquidificador o creme de leite,
o leite condensado e o chocolate em pó </br>
Bata por aproximadamente 2 minutos </br>
Derreta a gelatina conforme instruções da embalagem e acrescente a mistura, bata por 30 segundos só para misturar </br>
Coloque em um recipiente, cubra e leve à geladeira até endurecer.",
                  "ingredientes" => " Ovos </br> Chocolate meio amargo </br> Açúcar </br> Creme de leite </br> Açucar" );

$quindim = array ("nome" => "Quindim", "receita" => "Colocar tudo junto dentro de um recipiente e misturar bem </br>
Unte uma forminha de empada com margarina sem sal e açúcar, despeje a mistura de quindim dentro </br>
Para o banho-maria coloque agua quente dentro de 1 forma de bolo e coloque as forminhas de empada dentro </br>
Leve ao forno e asse em banho-maria, no forno a 180°C, até a superficie ficar dourada e firme. ",
                        "ingredientes" => "Ovos </br> Manteiga </br> Açúcar </br> Coco" );

$beijinho = array ("nome" => "Beijinho", "receita" => "Numa panela, misture o leite condensado, a manteiga e o coco ralado </br>
Leve ao fogo e misture por aproximadamente 15 minutos </br>
Retire a mistura do fogo e deixe amornar </br>
Modele a massa em formato de bolinhas, passe pelo açúcar cristal ou coco ralado e finalize com cravos-da-índia. ",
                  "ingredientes" => "Leite Condensado </br> Manteiga </br> Coco  Ralado </br> Açúcar cristal" );

  //  var_dump ($doces);



  // foreach ($doces as $value  => $doce) {
  //   echo '<img src="'.$doce["imagem"].'">';}
     ?>
  </body>
</html>
