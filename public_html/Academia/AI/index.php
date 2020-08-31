<!DOCTYPE html>
<!-- Inteligencia artificial -->
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
     <title>Inteligencia artificial</title>

     <style>
         .list-group-item {
            padding: 0.0rem 0.85rem;
            border: none;
            color: grey;
            font-size: 12px;
         }
         .list-group-item:hover {
            border-left: solid;
            left: -3px;
            background-color: #d6d6d6;
         }
         .list-group-item hr{
                margin-top: 0.35rem;
                margin-bottom: 0.35rem;
         }

         #Main h2:before {
    content: "";
    display: block;
    padding-top: 100px; /* header height + empty space */
    margin-top: -70px; /* header height to degrees padding’s space */
}

.right-row {
  background: lightgrey;
    width: 35px;
    height: 125px;
    position: absolute;
    right: 9%;
    top: 7%;
    text-align-last: center;
    font-family: monospace;
    border-top-right-radius: 15px;
}
.right-row:hover {
box-shadow: -1px 1px 5px lightslategrey!important;
cursor: pointer;
}

.left-row:hover {
  box-shadow: 1px 1px 5px lightslategrey!important;
  cursor: pointer;
}
.left-row {
  background: lightgrey;
    width: 35px;
    height: 125px;
    position: absolute;
    left: 9%;
    top: 7%;
    text-align-last: center;
    font-family: monospace;
    border-top-left-radius: 15px;
}
#Main hr {
  border: 2px solid #eeeeee;
  box-shadow: 1px 1px 20px cadetblue;
}
     </style>
</head>
<body onscroll="scrollingF()" style=" overflow-x: hidden;">
<span onclick="window.location = '../control';" class="shadow-sm pt-5 left-row">&lt;&lt;</span>

<span onclick="window.location = '../matematicas';" class="shadow-sm pt-5 right-row">&gt;&gt;</span>

      <!-- Navigation -->
      <button class="btn btn-outline-secondary" onclick="window.location = '../';" style="
      position: fixed;
      left: 18px;
      top: 12px;
      z-index: 1;
      ">Atrás</button>
            <!-- Place this tag where you want the button to render. -->



    <!-- Page Content -->
    
    <!-- Portfolio Item Heading -->
<div class="pt-5 container" style="text-align: -webkit-center;">
<div>
<h1>Inteligencia artificial
    <br><h6 style="color: darkgray;">La inteligencia artificial es la inteligencia llevada a cabo por máquinas. En ciencias de la computación, una máquina «inteligente» ideal es un agente flexible que percibe su entorno y lleva a cabo acciones que maximicen sus posibilidades de éxito en algún objetivo o tarea</h6>

  <hr class="mt-5" style="border: 1px solid #717171;border-radius: 5px;box-shadow: 0px 2px 7px lightsteelblue;">
</div></div>

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
    <option value="1">Machine learning</option>
    <option value="2">Deteccion de objetos</option>
    <option value="3">Clasificacion de imagenes</option>
    <option value="4">Deep learning</option>
  </select>  </div>

          <div id="Main" style="position: relative;top: -3%;">
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-2">
          <div class="sticky-top pt-4">
            <h4 class="my-3" style="color:grey;">Contenido</h4>
            <div class="list-group list-group-flush" style="border-left: outset;" id="contenido">
                <!-- <a href="#" class="list-group-item-action list-group-item">Algebra lineal</a>
                <a href="#" class="list-group-item-action list-group-item">Análisis numérico</a>
                <a href="#" class="list-group-item-action list-group-item">Cálculo diferencial</a>
                <a href="#home" class="list-group-item-action list-group-item">Cálculo integral</a>
                <a href="#" class="list-group-item-action list-group-item">Cálculo de varias variables</a>
                <a href="#" class="list-group-item-action list-group-item">Ecuaciones diferenciales</a>
                <a href="#" class="list-group-item-action list-group-item">Geometría</a>
                <a href="#" class="list-group-item-action list-group-item">Matemáticas especiales</a>
                <a href="#" class="list-group-item-action list-group-item">Probabilidad y estadística</a> -->
            </div>
        </div>    
      </div>
      </div>


<?php require '../footerphp.php' ?>



<script>

  function SelectChanged(tag) {
    // alert(tag)
    // var x = document.getElementById("mySelect").value;
		sessionStorage.setItem("cookie_AI", tag); 
    document.getElementById("Main").innerHTML = loadXMLDoc(tag);
  }

  function scrollingF(){
    // let topValue = document.getElementsByTagName("h2")[4].getBoundingClientRect().top;
    // if (topValue<-30) {
    //   document.getElementsByClassName("list-group")[0].children[4].style.borderLeft="solid";
    //   document.getElementsByClassName("list-group")[0].children[4].style.left="-3px";
    // } else {
    //   document.getElementsByClassName("list-group")[0].children[4].style.borderLeft="";
    //   document.getElementsByClassName("list-group")[0].children[4].style.left="";
    // }
    let elements = document.getElementsByTagName("h2");
    let valores = [];
    for (i = 0; i < elements.length; i++) {
        valores.push(elements[i].getBoundingClientRect().top<10);
        let elementStyle=document.getElementsByClassName("list-group")[0].children[i].style;
        elementStyle.borderLeft="";
        elementStyle.left="";
        elementStyle.backgroundColor = ""
    }
    let actual = valores.lastIndexOf(true);
    console.log(valores);
    if (actual==-1){actual=0}
    let elementStyle = document.getElementsByClassName("list-group")[0].children[actual].style;
    elementStyle.borderLeft="solid";
    elementStyle.left="-3px";
    elementStyle.backgroundColor = "#d6d6d6";
    //   document.getElementsByClassName("list-group")[0].children[4].style.left="-3px";
  }
  </script>


<script>

window.onload = function() {
  var storedValue = sessionStorage.getItem("cookie_AI"); 
  if (storedValue !== null) {
    $("#mySelect").val(storedValue); 
    loadXMLDoc(storedValue);
} else {
    $("#mySelect").val(0); 
    loadXMLDoc(0);
}
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
    xmlhttp.open("GET", "AIXML_Main0.xml", true);
    xmlhttp.send();
  }

  // Cargar datos con XML
  function myFunction(xml,tag) {
    console.log(xml)
    xmlDoc = xml.responseXML;
    // console.log(tag)
    document.getElementById("Main").innerHTML=xmlDoc.children[0].children[tag].innerHTML;
// cargando contenido
    let contents = xmlDoc.children[0].children[tag].getElementsByTagName("h2");
    document.getElementById("contenido").innerHTML="";
    for (i = 0; i < contents.length; i++) {
      console.log(contents[i]);
      let node = document.createElement("div");
      node.innerHTML='<a href="#Tema-'+i+'" class="list-group-item-action list-group-item">'+contents[i].innerHTML+'<hr></a>'
      // console.log(node.firstChild);
      document.getElementById("contenido").appendChild(node.firstChild);
    }
  } 

</script>

</body>

</html>