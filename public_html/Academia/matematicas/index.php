<!DOCTYPE html>
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

     <style>
         .list-group-item {
            padding: 0.15rem 1.25rem;
            border: none;
            color: darkgray;
         }
     </style>
</head>
<body style=" overflow-x: hidden;">


      <!-- Navigation -->
      <button class="btn btn-outline-secondary" onclick="history.back()" style="
      position: fixed;
      left: 18px;
      top: 12px;
      ">Atrás</button>
            <!-- Place this tag where you want the button to render. -->
<a style="
position: absolute;
right: 2%;
top: 2%;
" class="btn btn-dark" href="https://github.com/a4lfr32" data-size="large" aria-label="Follow @a4lfr32 on GitHub"><i class="fa fa-github" style="font-size:45px;"></i></a>


    <!-- Page Content -->
    
    <!-- Portfolio Item Heading -->
<div class="pt-5 container" style="text-align: -webkit-center;"><h1>Matemáticas
    <br><h6 style="color: darkgray;">Es una herramienta de la cual se sirve la ingeniería, a partir de esta se puede modelar cuantitativamente las relaciones de varias variables</h6>

  <hr class="mt-5">
</div>

<div class="flex-container row" >
      <!-- /.container -->
      <div class="col-md-1"></div>
      <div class="col-md-8">
          <div class="pt-3 mb-4" style="
    position: sticky;
    top: 0%;
    background: white;
    z-index: 1;">
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
  </select>  </div>

          <div id="Main">

      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-2">
          <div class="sticky-top pt-4">
            <h3 class="my-3">Contenido</h3>
            <div class="list-group list-group-flush" style="border-left: outset;">
                <a href="#" class="list-group-item-action list-group-item">Algebra lineal</a>
                <a href="#" class="list-group-item-action list-group-item">Análisis numérico</a>
                <a href="#" class="list-group-item-action list-group-item">Cálculo diferencial</a>
                <a href="#home" class="list-group-item-action list-group-item">Cálculo integral</a>
                <a href="#" class="list-group-item-action list-group-item">Cálculo de varias variables</a>
                <a href="#" class="list-group-item-action list-group-item">Ecuaciones diferenciales</a>
                <a href="#" class="list-group-item-action list-group-item">Geometría</a>
                <a href="#" class="list-group-item-action list-group-item">Matemáticas especiales</a>
                <a href="#" class="list-group-item-action list-group-item">Probabilidad y estadística</a>
            </div>
        </div>    
      </div>
      </div>


<?php require '../footerphp.php' ?>



<script>
  function SelectChanged(tag) {
    // alert(tag)
    // var x = document.getElementById("mySelect").value;
    document.getElementById("Main").innerHTML = loadXMLDoc(tag);
  }
  </script>


<script>

window.onload = function() {
  loadXMLDoc(0);
};

  var xmlDoc;
  var para;
  function loadXMLDoc(tag) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        myFunction(this,tag);
      }
    };
    xmlhttp.open("GET", "MatematicaXML_Main2.xml", true);
    xmlhttp.send();
  }
  function myFunction(xml,tag) {
console.log(xml)
xmlDoc = xml.responseXML;
console.log(tag)
document.getElementById("Main").innerHTML=xmlDoc.children[0].children[tag].innerHTML;

}
</script>

</body>

</html>