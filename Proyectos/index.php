<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
     crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">     
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163888921-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163888921-1');
</script>


<link rel="stylesheet" href="../css/mySidenav.css">
    <title>Proyectos</title>
</head>
<body>
  

  <!-- Navigation -->
  <?php require '../mySidenav.php' ?>








<!-- Page Content -->
<section class="py-0">
  <div class="container">
    <!-- Page Content -->
<div class="container">
  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Robot por cables
    <small>Auto-calibración inicial</small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">
    <!-- onclick="location.href='./trabajodegrado';" -->
    <div class="card-text col-md-8">
      <!-- <img class="img-fluid card-img-left" src="Presentacion.jpg" alt=""> -->
      <iframe class="shadow-lg" style="width: -webkit-fill-available;
      height: 100%;" src="https://www.youtube.com/embed/kMVvjO18S4g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="card-body col-md-4">
      <h3 class="my-3">Descripción del proyecto</h3>
      <p>Solución robótica para una cámara aérea</p>
      <h3 class="my-3">Detalles del proyecto</h3>
      <ul>
        <li>Control flexible</li>
        <li>Consideraciones Dinámicas</li>
        <li>Interfaz de usuario</li>
        <li>Construcción de prototipo</li>
      </ul>
      <div class="card">
                  <a id="webApp" href="trabajodegrado/gradTheta.html" class="btn btn-outline-dark" autofocus>App web: Geogebra 2D</a>
              </div>

      <a hidden class="btn btn-info" href="./trabajodegrado" style="float: right;">Ver más</a>
      <!-- <a href="https://www.patreon.com/bePatron?u=14550760" data-patreon-widget-type="become-patron-button">Become a Patron!</a><script async src="https://c6.patreon.com/becomePatronButton.bundle.js"></script>   -->
    </div>
    <div class="col-6">
    <br>
    <a style="float: right;font-family: system-ui;text-shadow: 2px 2px 3px black;position:relative;top:49px;z-index:1;" class="btn btn-dark" href="https://grabcad.com/library/planar-cable-suspended-parallel-robot-model-1" data-size="large" aria-label="Follow @a4lfr32 on GitHub"><b>Planar@GRAB<span style="color: #db2b22;">CAD</span></b></a>
      <h3 style="text-align: center;">Diseño planar</h3>
      <div class="card" id="Planar_CAD" style="height:180px;margin:0 auto;"></div>
    </div>
    <div class="col-6">
    <br>
    <a style="float: right;font-family: system-ui;text-shadow: 2px 2px 3px black;position:relative;top:49px;z-index:1;" class="btn btn-dark" href="https://grabcad.com/library/spatial-cable-suspended-parallel-robot-model-1" data-size="large" aria-label="Follow @a4lfr32 on GitHub"><b>Spatial@GRAB<span style="color: #db2b22;">CAD</span></b></a>
      <h3 style="text-align: center;">Diseño espacial</h3>
      <div class="card" id="Spatial_CAD" style="height:180px;margin:0 auto;"></div>
    </div>

  </div>
  <!-- /.row -->
<hr style="border: 5px solid #717171;
border-radius: 5px;">
  <!-- Related Projects Row -->


<article>
  <div class="row">
    <div class="col-md-5">
      <div class="card" id="SCARA_stl" style="height:195px;margin:0 auto;"></div>

        <!--img class="img-fluid rounded mb-3 mb-md-0" src="../../../imagenes/C_baseradial.png" alt=""-->
    </div>
    <div class="col-md-7">
      <h3>proyecto SCARA</h3> <small>17/04/2020</small>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
      <a class="btn btn-outline-primary" href="#">Ver más</a>
      <div style="float: right;" class="row">
      <span>tags: </span>
    <div class="card text-white bg-dark m-1">Matemáticas </div>
    <div class="card text-white bg-dark m-1">matemáticas </div>
    </div>
    </div>
  </div>
</article>


  <h3 hidden class="my-4">Otros proyectos</h3>

  <div hidden class="row" id="cartas">
    
<!-------------------------------------------------------------------->
    <div class="col-md-6 col-sm-6 mb-4">
  <div class="card">
      <a href="./scara.html">
            <!-- <img class="img-fluid" src="/imagenes/SCARA.jpg" width="500" height="500" alt=""> -->
          </a>
          <h3>Scara</h3>
    </div>
  </div>


<!-------------------------------------------------------------------->
    <div class="col-md-6 col-sm-6 mb-4">
      <div class="card">

      <a href="./cansat.html">
          <h3 class="text-center">Cansat</h3>
            <!-- <img class="img-fluid" src="/imagenes/Cansat.PNG" width="500" height="500" alt=""> -->
          </a>
    </div>
    </div>
    
<!-------------------------------------------------------------------->
    <div class="col-md-6 col-sm-6 mb-4" onclick="document.getElementById('id01').style.display='block'">
        <div class="card">
<a>
  <!-- <img class="img-fluid" src="https://static.vecteezy.com/system/resources/previews/000/093/047/non_2x/claw-machine-vectors.jpg" width="300" height="500" alt=""> -->
</a>
<h3 class="text-center">Máquina de garra (ilustracion)</h3>

        </div>
    </div>

<!-------------------------------------------------------------------->
    <div class="col-md-6 col-sm-6 mb-4" onclick="document.getElementById('id02').style.display='block'">
        <div class="card">
<a>
  <!-- <img class="img-fluid" src="https://cdn.instructables.com/FZW/AJZN/JFSTJCQQ/FZWAJZNJFSTJCQQ.LARGE.jpg" width="300" height="500" alt=""> -->
</a>
<h3>Carrito a control remoto</h3>
          </div>
    </div>
<!-------------------------------------------------------------------->

    <div class="col-md-6 col-sm-6 mb-4" onclick="document.getElementById('id02').style.display='block'">
        <div class="card">
<a href="serialport.html">
            <h3>Comunicacion serial html5</h3>
            <!-- <img class="img-fluid" src="https://placehold.it/500x300" width="300" height="500" alt=""> -->
          </a>
          </div>
    </div>
<!-------------------------------------------------------------------->

<div class="col-md-6 col-sm-6 mb-4" onclick="document.getElementById('id02').style.display='block'">
    <div class="card">
<a href="bluetoothBLE.html">
        <h3>Bluetooth BLE</h3>
        <!-- <img class="img-fluid" src="https://placehold.it/500x300" width="300" height="500" alt=""> -->
      </a>
      </div>
</div>
<!-------------------------------------------------------------------->
<div class="col-md-6 col-sm-6 mb-4">
  <div class="card">
    <a href="Esp32_bluetoothBLE.html">
      <h3>Esp32 comunicación BLE-Página web</h3>
      <!-- <img class="img-fluid" src="https://placehold.it/500x300" width="300" height="500" alt=""> -->
    </a>
  </div>
</div>
</div>
</div>
<!-------------------------------------------------------------------->

  
  <!-- /.row -->
</div>
<!-- /.container -->
  </div>
</section>

<!-- Experience Content -->
<!--section>
<div class="container">
<h1 class="my-4">Experiencias
<small>Pendiente</small></h1>
</div>


</section-->



<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-4">
      <header class="w3-container w3-light-grey"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2 align="center">Máquina de garra</h2>
      </header>
      <div class="w3-container">
        <p>La maquina de atrapar peluches</p>
    <img class="img-fluid" src="https://static.vecteezy.com/system/resources/previews/000/093/047/non_2x/claw-machine-vectors.jpg" width="300" height="500" alt="">

        <p>La maquina de garra, es un dispositivo con 3 grados de libertad el cual tiene una garra como efector final y esta puede levantar cosas.</p>
      </div>
      <footer class="w3-container w3-center">
        <a href="/maquinagarra.html">
          <p class="w3-button w3-teal">Ver más</p>
        </a>
      </footer>
    </div>
</div>

<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-4">
      <header class="w3-container w3-light-grey"> 
        <span onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2 align="center">Máquina de garra</h2>
      </header>
      <div class="w3-container">
        <p>La maquina de atrapar peluches</p>
    <img class="img-fluid" src="https://cdn.instructables.com/FZW/AJZN/JFSTJCQQ/FZWAJZNJFSTJCQQ.LARGE.jpg" width="300" height="500" alt="">

        <p>La maquina de garra, es un dispositivo con 3 grados de libertad el cual tiene una garra como efector final y esta puede levantar cosas.</p>
      </div>
    
    </div>
</div>

<?php require '../footerphp.php' ?>


      <script src="stl_viewer.min.js"></script>        
      <script>

          // modelo de TRTH
          var stl_viewer0=new StlViewer
          (
              document.getElementById("Planar_CAD"),
              {
                  models:
                  [
                      {filename:"Ensamblaje67.stl",rotationx:0.0, rotationy:0,rotationz:0, view_edges:true, animation:{delta:{rotationy:-1, msec:5000, loop:true,rotationy:-1.01, msec:7000, loop:true}}}
                  ]
              }
          );
          var stl_viewer1=new StlViewer
          (
              document.getElementById("Spatial_CAD"),
              {
                  models:
                  [
                      {filename:"Armazon3D.stl",rotationx:0.0, rotationy:0,rotationz:-0.22, view_edges:true, animation:{delta:{rotationy:-1, msec:5000, loop:true,rotationy:-1.01, msec:7000, loop:true}}}
                  ]
              }
          );

                    var stl_viewer2=new StlViewer
          (
              document.getElementById("SCARA_stl"),
              {
                  models:
                  [
                      {filename:"SCARA2.stl",rotationx:-1.5708, rotationy:-1.5708,rotationz:-0.26, view_edges:true, animation:{delta:{rotationy:-1, msec:5000, loop:true,rotationz:0, msec:5000, loop:true}}}
                  ]
              }
          );
          console.log("Cargados")
      </script>
</body>
</html>


