<!DOCTYPE html>
<!-- Matematica -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <title>Matemáticas</title>

<link rel="stylesheet" href="../css/estilo.css">
</head>
<body onscroll="scrollingF()" style=" overflow-x: hidden;">
<span hidden onclick="window.location = '../AI';" class="shadow-sm pt-5 left-row">&lt;&lt;</span>

<span hidden onclick="window.location = '../fisica';" class="shadow-sm pt-5 right-row">&gt;&gt;</span>

      <!-- Navigation -->
      <button class="btn btn-outline-info pl-5" onclick="window.location = '../';" style="position: fixed;left: -30px;top: 12px;z-index: 1;">Atrás</button>
    <!-- Page Content -->
    
    <!-- Portfolio Item Heading -->
<div class="pt-5 container" style="text-align: -webkit-center;">
<div>
<h1 id="matematicas" data-xmlName="MatematicaXML_Main">Matemáticas
    <br><h6 style="color: darkgray;">Es una herramienta de la cual se sirve la ingeniería, a partir de esta se puede modelar cuantitativamente las relaciones de varias variables</h6>

  <hr class="mt-5" style="border: 1px solid #717171;border-radius: 5px;box-shadow: 0px 2px 7px lightsteelblue;">
</div></div>

<div class="flex-container row" >
      <!-- /.container -->
      <div class="col-md-1"></div>
      <div class="col-md-8">
      <div class="pt-3 mb-4" style="position: sticky;top: 0%;background: white;z-index: 1;">
     <select class="custom-select" id="mySelect" style="border: aliceblue;border-bottom: inset;font-size: xx-large;text-align-last: center;" onchange="SelectChanged(this.value)">
      <option selected value="0">Ver contenidos</option>
      <option value="1">Algebra lineal</option>
      <option value="2">Análisis numérico</option>
      <option value="3">Cálculo diferencial</option>
      <option value="4">Cálculo integral</option>
      <option value="5">Cálculo de varias variables</option>
      <option value="6">Ecuaciones diferenciales</option>
      <option value="7">Geometría</option>
      <option value="8">Matemáticas especiales</option>
      <option value="9">Probabilidad y estadísticas</option>
    </select>  
  </div>

          <div id="Main" style="position: relative;top: -3%;">
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-2">
          <div class="sticky-top pt-4">
            <h4 class="my-3" style="color:grey;">Contenido</h4>
            <div class="list-group list-group-flush" style="border-left: outset;" id="contenido"></div>
        </div>    
      </div>
      </div>


<?php require '../footerphp.php' ?>

<script src="../script/snippetJavascript.js" type="text/javascript"></script>

</body>

</html>