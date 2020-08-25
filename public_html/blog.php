
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

    <link rel="stylesheet" href="css/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163888921-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163888921-1');
</script>

<link rel="stylesheet" href="css/mySidenav.css">
<link rel="stylesheet" href="css/topNav.css">
<link rel="stylesheet" href="css/Chip.css">



</head>
<body class="w3-light-gray">
    <!-- <div id="mySidenav" class="sidenav no-print">
      <a href="" id="Blog">Blog</a>
      <a href="https://academia.alfredomaussa.com/" id="Academia">Academia</a>
      <a href="https://proyectos.alfredomaussa.com/" id="Proyectos">Proyectos</a>
    </div> -->
    <?php require 'mySidenav.php' ?>

    <header id="header2" style="padding-top: 15px; transition: top 0.5s; background: #f1f1f1; position: sticky;z-index: 1;">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h1 class="col-sm">Alfredo Maussa</h1>
          </div>
          <div class="col-sm" style="text-align: -webkit-right;">
            <nav class="topnav" style="width: fit-content;" >
              <a class="active" href="">Blog</a>
              <a hidden href="analisis.html">Análisis de datos</a>
              <a hidden href="entradas.html">Entradas</a>
              <!--a href="perfil.html" style="background-color: silver;">Perfil</a-->
              <a href="Historial">Historial</a>
              <a href="Publicaciones">Publicaciones</a>
            </nav>
          </div>
        </div>
        <hr>
      </div>
    </header>
      
<!-- Page Container -->
<div class="w3-content">
  <br>
  <br>
  <br>
  <br>
  <div class="card-deck" style="top: 30%;">
    <div class="card shadow-lg" style="background: rgb(218, 218, 218); cursor:pointer;" onmousemove="openBlog()" onmouseleave="closeBlog()" onclick="location.href='';">
      <div class="card-body text-center">
        <h3>Web Personal</h3>
        <p class="card-text">Se encuentra:   </p>
        Hoja de vida
      </div>
    </div>
    <div class="card shadow-lg" style="background: rgb(104, 156, 104); cursor:pointer;" onmousemove="openAcademico()" onmouseleave="closeAcademico()" onclick="location.href='https://academia.alfredomaussa.com/';">
      <div class="card-body text-center">
        <h3>Academia</h3>
        <p class="card-text">Se encuentra el contenido visto en la universidad, algunos cursos realizados y posiblemente sus certificados.</p>
      </div>
    </div>
    <div class="card shadow-lg" style="background: #3d3d3d; cursor:pointer; color: white;" onmousemove="openProyectos()" onmouseleave="closeProyectos()" onclick="location.href='https://proyectos.alfredomaussa.com/';">
      <div class="card-body text-center">
        <h3>Proyectos</h3>
        <p class="card-text">Contiene los proyectos trabajados</p>
      </div>
    </div>
  </div>
  <img src="https://www.artefactocorp.com/images/arrow.gif?crc=177346995" alt="" style="height: 59px;position: absolute;top: 70%;left: 45%;">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>



<div class="w3-content" style="background: #f1f1f1;">
  <div class="chip" onclick="window.location.href='Perfil'">
    <img src="./imagenes/perfil3.jpg" alt="Person" width="96" height="96" data-toggle="collapse" href="#collapseChipNombre">
    <!--div class="collapse" id="collapseChipNombre"> Alfredo Maussa</div-->
    <span>Ver mi CV</span>
  </div>
<hr style="border: 5px solid #717171;
border-radius: 5px;">
<h1 class="my-4">Entradas
  <small>Blog</small>
</h1>

  <!-- Project One -->
  <br>
  <article>
  <div class="row">
    <div class="col-md-5 shadow" style="text-align: -webkit-center;     border: outset;">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Ic_thesis_48px.svg/120px-Ic_thesis_48px.svg.png" alt="">
      </a>
    </div>
    <div class="col-md-7">
      <h3>Trabajo de grado</h3> <small>Actualizado 28/07/2020</small>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
      <a hidden class="btn btn-primary" href="#">Ver más</a>
    </div>
  </div>
</article>
  <!-- /.row -->

  <hr>

  <!-- Project Two -->
  <br>
  <div class="row">
   
    <div class="col-md-7">
      <h3>Contenido de academia</h3><small>Actualizado 28/07/2020</small>
      <p>Busco tener mas claro el esquemático del curriculum de estudio</p>
      <a hidden class="btn btn-primary" href="#">Ver más</a>
    </div>
    <div class="col-md-5">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0 shadow" height="200px" width="400px" src="imagenes/graduation-cap2.jpg" alt="">
      </a>
    </div>
  </div>
  <!-- /.row -->

  <hr>

  <!-- Project Three -->
  <br>
  <div class="row">
    <div class="col-md-5">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0 shadow" src="https://programmer9.com/assets/images/improve_programming_skills.jpg" alt="">
      </a>
    </div>
    <div class="col-md-7">
      <h3>Github: códigos recuperados</h3><small>Actualizado 28/07/2020</small>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
      <a hidden class="btn btn-primary" href="#">Ver más</a>
    </div>
  </div>
  <!-- /.row -->

  <hr>

  <!-- Project Four -->
  <!-- <br>
  <div class="row">
    <div class="col-md-7">
      <h3>(IoT) Cansat</h3><small>04/01/2020</small>
      <p>Se trata de un dispositivo electrónico, el cual, utilizando sensores digitales, un microcontrolador y un módulo GSM SIM800l se envía información en paquetes para obtener cada 200ms hacia una base de datos con MySQL la cual brinda los datos a la página web. Además, se aprovecha su función como GPS y se brinda una localización de este.  </p>
      <a class="btn btn-primary" href="#">Ver más</a>
    </div>
    <div class="col-md-5">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="https://placehold.it/400x200" alt="">
      </a>
    </div>
  </div> -->
  <!-- /.row -->

    <!-- Project Four -->
    <br>
    <div class="row">
      <div class="col-md-7">
        <h3>Diseño CAD</h3><small>Actualizado 28/07/2020</small>
        <p>Los diseños realizados se encuetran en <a href="">Apartado de CAD</a>, que con ayuda de GRABCAD hospedo los modelos en <a href="">AlfredoMaussa@GRABCAD</a></p>
        <a hidden class="btn btn-primary" href="#">Ver más</a>
      </div>
      <div class="col-md-5" style="text-align: -webkit-center;">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0 shadow" src="https://www.3dcadportal.com/images/stories/autodesk/2014/autocad2015.jpg" alt="">
        </a>
      </div>
    </div>
    <!-- /.row -->
    <br>

<p style="position: fixed;
left: 28%;
bottom: 8%;
z-index: -1;">Nota: Esta página web es a modo de aprendizaje, el contenido en general es una prueba.
    
    </p>
    <p style="position: fixed;
    left: 40.5%;
    bottom: 4%;
    z-index: -1;">© 2020 Copyright:
      <a href="https://alfredomaussa.com"> AlfredoMaussa.com</a></p>



<?php require 'footerphp.php' ?>

</div>


    

    <script>
          function openBlog() {
        document.getElementById("Blog").style.left = "0";
    }
    function closeBlog() {
        document.getElementById("Blog").style.left = "-110px";
    }
    function openAcademico() {
        document.getElementById("Academia").style.left = "0";
    }
    function closeAcademico() {
        document.getElementById("Academia").style.left = "-110px";
    }

    function openProyectos() {
        document.getElementById("Proyectos").style.left = "0";
    }

    function closeProyectos() {
        document.getElementById("Proyectos").style.left = "-110px";
    }
    
          </script>


<script>
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos -1) {
      document.getElementById("header2").style.top = "0";
    } else {
      document.getElementById("header2").style.top = "-85px";
    }
    prevScrollpos = currentScrollPos;
  }
  </script>
</body>
</html>
