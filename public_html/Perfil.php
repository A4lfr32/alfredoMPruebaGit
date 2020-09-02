<!DOCTYPE html>
<html>
<title>Alfredo Maussa</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



<style>

    #mySidenav a {
          position: fixed;
          left: -110px;
          transition: 0.3s;
          padding: 15px;
          width: 135px;
          text-decoration: none;
          font-size: 20px;
          color: white;
          border-radius: 0 5px 5px 0;
          z-index: 1;
        }
        
        #mySidenav a:hover {
          left: 0!important;
        }
        
        #Blog {
          top: 70px;
          background-color: rgb(218, 218, 218);
        }
        
        #Academia {
          top: 130px;
          background-color: rgb(104, 156, 104);
        }
        
        #Proyectos {
          top: 190px;
          background-color: #3d3d3d;
        }
        
        #Aux11 #Aux12 {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  left: 30px;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
 


        /* Add a black background color to the top navigation */
.topnav {
  overflow: hidden;
  width: 60%;
  align-items: flex-end;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav div {
  position: absolute;
  right: -15%;
  top: -5%;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
        </style>


<style>
.w3-twothird img {
  position: relative;
    width: 30px;
    cursor: pointer;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #707070;
  color: white;
  transform: rotateY(180deg);
}


@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>


<body class="w3-light-gray">
    <div hidden id="mySidenav" class="sidenav no-print">
        <a href="./" id="Blog">Blog</a>
        <a href="http://Academia.alfredomaussa.com/" id="Academia">Academia</a>
        <a href="http://Proyectos.alfredomaussa.com/" id="Proyectos">Proyectos</a>
      </div>
      <button class="btn btn-outline-secondary no-print" onclick="history.back();" style="
      position: absolute;
      left: 38px;
      top: 23px;
      ">Atrás</button>
    <header style="padding-top: 15px">
        <div class="container">
          <div class="row">
              <h1 class="col-sm-11">Alfredo José Maussa Caballero</h1>

              <div class="col-sm-0" style="text-align: -webkit-right;">
            <nav hidden class="topnav" style="width: fit-content;">
              <a href="./">Blog</a>
              <a href="entradas.html">Entradas</a>
              <a href="perfil.html">Perfil</a>
              <a href="Historial.html">Historial</a>
              <a href="publicaciones.html">Publicaciones</a>
            </nav>
            <div class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-teal no-print" onclick="window.print();return false;"><i class="fa fa-print"></i></div>
          </div>
          </div>
             
          </div>


          
      </header>

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:90%;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="imagenes/foto_perfil3.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black"></div>
        </div>
        <div class="w3-container">
          <br>
          <p>Una de mis principales pasiones y filosofía es el holismo, y la integridad de conocimientos. Me atrae abarcar desde varias perspectivas una posible solución y me encargo de estudiar e integrar diversos conocimientos para llegar a ello.</p>
          <hr>
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-gray"></i>Estudiante: Ingeniería Mecatrónica</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-gray"></i>Medellín, Col</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-gray"></i>alfredomaussa@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-gray"></i>+57 #######</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-gray"></i>Habilidades</b></p>
          <p>Programación</p>
          <div class="w3-light-grey w3-round-xlarge w3-small" style="-webkit-print-color-adjust: exact;">
            <div class="w3-container w3-center w3-round-xlarge w3-dark-gray" style="width:95%;-webkit-print-color-adjust: exact;">
              <div class="w3-center w3-text-white">95% </div>
            </div>
          </div>
          <p>Electrónica</p>
          <div class="w3-light-grey w3-round-xlarge w3-small" style="-webkit-print-color-adjust: exact;">
            <div class="w3-container w3-center w3-round-xlarge w3-dark-gray" style="width:85%;-webkit-print-color-adjust: exact;">85%</div>
          </div>
          <p>Automatización y control</p>
          <div class="w3-light-grey w3-round-xlarge w3-small" style="-webkit-print-color-adjust: exact;">
            <div class="w3-container w3-center w3-round-xlarge w3-dark-gray" style="width:80%;-webkit-print-color-adjust: exact;">80%</div>
          </div>
          <p>Mecánica</p>
          <div class="w3-light-grey w3-round-xlarge w3-small" style="-webkit-print-color-adjust: exact;">
            <div class="w3-container w3-center w3-round-xlarge w3-dark-gray" style="width:65%;-webkit-print-color-adjust: exact;">65%</div>
          </div>
       
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-gray"></i>Idiomas</b></p>
          <p>Español</p>
          <div class="w3-light-grey w3-round-xlarge" style="-webkit-print-color-adjust: exact;">
            <div class="w3-round-xlarge w3-dark-gray" style="height:24px;width:100%; -webkit-print-color-adjust: exact;"></div>
          </div>
          <p>Inglés</p>
          <div class="w3-light-grey w3-round-xlarge" style="-webkit-print-color-adjust: exact;">
            <div class="w3-round-xlarge w3-dark-gray" style="height:24px;width:80%; -webkit-print-color-adjust: exact;"></div>
          </div>
          
          
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">

      <div class="w3-container w3-card w3-white">
        <img hidden class="no-print" src="imagenes/flip_icon.PNG" alt="" style="left: 98.3%;
        top: 0px;">
        <h2 class="w3-text-grey w3-padding-16" style="text-align-last: justify; cursor:pointer;" onclick="location.href='http://academia.alfredomaussa.com/';"><i class="fa fa-university fa-fw w3-margin-right w3-xxlarge w3-text-dark-gray"></i>Educación <i hidden id="Aux11" class="no-print fa fa-eye w3-margin-right w3-xxlarge w3-text-light-green" onmousemove="openAcademico()" onmouseleave="closeAcademico()"><p id="Aux12">Acá!</p></i></h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Universidad EIA</b> <span class="w3-tag w3-light-green w3-round">Actualmente</span></h5>
          <h6 class="w3-text-gray"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2015 - 2020</h6>
          <p>Pre-grado, Ingeniería Mecatrónica</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Iot & AI</b></h5>
          <h6 class="w3-text-gray"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2018 - inf</h6>
          <p>Cursos en línea</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Colegio</b></h5>
          <h6 class="w3-text-gray"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2014</h6>
          <p>Bachiller</p><br>
        </div>
      </div>
<br>
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <img hidden class="no-print" src="imagenes/flip_icon.PNG" alt="" style="left: 98.3%;
        top: -1px;">
        <h2 class="w3-text-grey w3-padding-16" style="text-align-last: justify; cursor:pointer;" onclick="location.href='http://proyectos.alfredomaussa.com/';"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-dark-gray"></i>Proyectos <i hidden class="no-print fa fa-eye w3-margin-right w3-xxlarge w3-text-dark-gray" onmousemove="openProyectos()" onmouseleave="closeProyectos()""></i></h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Robot SCARA / Universidad</b></h5>
            <h6 class="w3-text-gray"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Ene 2019 - Jun 2019</h6>
            <p>Desarrollo de un robot, morfología SCARA, con objetivo de desarrollo de los cursos: Robótica y Control digital.</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Páginas web Front End / alfredomaussa.com</b></h5>
            <h6 class="w3-text-gray"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2019 - ...</h6>
            <p>Proyecto de vida, actualmente en curso...</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Robot por cables / Trabajo de Pre-grado</b></h5>
            <h6 class="w3-text-gray"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2019 - Jun 2020</h6>
            <p>Trabajo de Pre-grado, robot por cables autocalibrable.  </p><br>
          </div>

        </div>
         <!--   

        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <img hidden src="imagenes/flip_icon.PNG" alt="" style="left: 98.3%;
          top: -1px;">
          <h2 class="w3-text-grey w3-padding-16" style="text-align-last: justify; cursor:pointer;"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-dark-gray"></i>Proyectos <i hidden class="fa fa-eye w3-margin-right w3-xxlarge w3-text-dark-gray"></i></h2>
            <div class="w3-container">
              <h5 class="w3-opacity"><b>Pendiente...</b></h5>
              <h6 class="w3-text-gray"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Ene 2020 - ...</h6>
              <hr>
            </div>
    </div>
        <div class="flip-card no-print">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="imagenes/foto_perfil3.jpg" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>Alfredo Maussa</h1> 
                <p>Architect & Engineer</p> 
                <p>We love that guy</p>
              </div>
            </div>
          </div>

     End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

  <footer class="w3-container w3-gray w3-center w3-margin-top">
    <br>
  <p class="no-print">Redes sociales.</p>
<!--  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>-->
  <a href="https://github.com/A4lfr32" class="w3-gray no-print"><i class="fa fa-github w3-hover-opacity"></i></a>
  <a href="https://www.linkedin.com/in/alfredo-maussa-62b6b2125" class="no-print"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  <p class="no-print">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
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

</body>
</html>
