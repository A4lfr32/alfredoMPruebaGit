<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
     crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163888921-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163888921-1');
</script>
     
<link rel="stylesheet" href="../css/mySidenav.css">
    <style>
    li span {
      cursor: pointer;
    }

    .btn-light {
      border-top-left-radius: 0%;
      border-top-right-radius: 0%;
    }

    .certificado{
      position: relative;
      top: -100px;
      transition: top 0.5s, clip-path 0.5s;
    clip-path: inset(100px 0px 160px 0px);
    }
    .certificado:hover{
      top: -0px;

clip-path: inset(0px 0px 0px 0px);
}

div.card span {
              background-color: #a8daae;
              /* background-color: #d4d4d4; */
              color: black;
              text-align: -webkit-center;
              height: 210pp;
              /* color: #dadada; */
              border-top-right-radius:3px;
              border-top-left-radius:3px;
              cursor: pointer;
              
    font-family: initial;
    /* font-size: -webkit-xxx-large; */
  }
          
    </style>
    
    <title>Academia</title>
    <?php include 'bloques.php'; ?>

</head>
<body>

      <!-- Navigation -->
      <?php require '../mySidenav.php' ?>

     


      
    <!-- Page Content -->
<div class="container">
<div>
        <!-- Page Heading -->
        <h1 class="my-4" style="position: sticky;top: 0;z-index: 1;background-color: white;">Mecatrónica
          <small>Contenido</small>
          <hr>
        </h1>
      
        <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-6 mb-4">
            <div class="card h-10">
              <span class="shadow" style="font-size: xx-large;" onclick="window.location = 'matematicas';"><br>
          <h1 style="font-size: larger;">Matemática</h1>
          
          <br></span>
              <div class="card-body collapse" id="collapseMatematica">
                <!--h4 class="card-title">
                  <a href="/matematicas/">Matemática</a>
                </h4------>
              <div class="row">
                  <div class="col-6 list-group list-group-flush">
                    <a href="matematicas/algebralineal.html" class="list-group-item list-group-item-action">Algebra lineal</a>
                    <a href="matematicas/analisisnumerico.html" class="list-group-item list-group-item-action">Análisis numérico</a>
                    <a href="matematicas/calculodiferencial.html" class="list-group-item list-group-item-action">Cálculo diferencial</span</a>
                    <a href="matematicas/calculointegral.html" class="list-group-item list-group-item-action">Cálculo integral</a>
                    <a href="matematicas/calculovariasvariables.html" class="list-group-item list-group-item-action">Cálculo varias variables</a>
                  </div>
                  <div class="col-6 list-group list-group-flush">
                    <a href="matematicas/ecuacionesdiferenciales.html" class="list-group-item list-group-item-action" style="border-top: 0">Ecuaciones diferenciales</a>
                    <a href="matematicas/geometria.html" class="list-group-item list-group-item-action">Geometría</a>
                    <a href="matematicas/matematicasespeciales.html" class="list-group-item list-group-item-action">Matemáticas especiales</a>
                    <a href="matematicas/probabilidadyestadistica.html" class="list-group-item list-group-item-action">Probabilidad y estadistica</a>
              </div>

              </div>
              </div>
              <a class="btn btn-light" data-toggle="collapse" href="#collapseMatematica" role="button" aria-expanded="false" aria-controls="collapseExample">
                Expandir
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-6 mb-4">
            <div class="card h-10">
              <span class="shadow" style="font-size: xx-large;" onclick="window.location = 'fisica';"><br>
          <h1 style="font-size: larger;">Física</h1>
          
          <br></span>               <!--h4 class="card-title">
                  <a href="fisica">Física</a>
                </h4---->

                <div class="list-group list-group-flush collapse" id="collapseFisica">
                <a href="fisica/mecanicaclasica.html" class="list-group-item list-group-item-action">Mecánica clásica</a>
                <a href="fisica/estatica.html" class="list-group-item list-group-item-action">Estática</a>
                <a href="fisica/dinamica.html" class="list-group-item list-group-item-action">Dinámica</a>
                <a href="fisica/campos.html" class="list-group-item list-group-item-action">Campos</a>
                <a href="fisica/ondas.html" class="list-group-item list-group-item-action">Ondas</a>
            <a></a>
          </div>
          <a class="btn btn-light" data-toggle="collapse" href="#collapseFisica" role="button" aria-expanded="false" aria-controls="collapseExample">Expandir</a>

            </div>
          </div>

          <br>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
              <span class="shadow" onclick="window.location = 'mecanica';"><br>
          <h1>Mecánica</h1>
          
          <br></span>               <div class="list-group list-group-flush collapse" id="collapseMecanica">
                <!--h4 class="card-title">
                  <a href="/mecanica">Mecánica</a>
                </h4---->
                <a href="mecanica/cienciademateriales.html" class="list-group-item list-group-item-action">Ciencia de materiales</a>
                <a href="mecanica/mecanicademateriales.html" class="list-group-item list-group-item-action">Mecanica de materiales</a>
                <a href="mecanica/procesosdetransformacionindustrial.html" class="list-group-item list-group-item-action">Procesos de transformación industrial</a>
                <a href="mecanica/sistemasmecanicos.html" class="list-group-item list-group-item-action">Sistemas mecánicos</a>
                <a href="mecanica/mecanicaclasica.html" class="list-group-item list-group-item-action">Mecánica clásica</a>
                <a href="mecanica/mecanicadelagrangeyhamilton.html" class="list-group-item list-group-item-action">Mecánica lagrange y Hamilton</a>
            <a></a>
          </div>
          <a class="btn btn-light" data-toggle="collapse" href="#collapseMecanica" role="button" aria-expanded="false" aria-controls="collapseExample">Expandir</a>

            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
              <span class="shadow" onclick="window.location = 'electronica';"><br>
          <h1>Electrónica</h1>
          
          <br></span> 
              <div class="list-group list-group-flush collapse" id="collapseElectronica">
                <!--h4 class="card-title">
                  <a href="/electronica">Electrónica</a>
                </h4-->
                <a href="electronica/circuitoselectronicosymaquinas.html" class="list-group-item list-group-item-action">Circuitos electricos y máquinas</a>
                <a href="electronica/electronicaanalogadepotencia.html" class="list-group-item list-group-item-action">Electrónica análoga de potencia</a>
                <a href="electronica/electronicadigital.html" class="list-group-item list-group-item-action">Electrónica digital</a>
            <a></a>
          </div>
          <a class="btn btn-light" data-toggle="collapse" href="#collapseElectronica" role="button" aria-expanded="false" aria-controls="collapseExample">Expandir</a>

            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
              <span class="shadow" onclick="window.location = 'informatica';"><br>
          <h1>Informática</h1>
          
          <br></span>   
                <div class="list-group list-group-flush collapse" id="collapseInformatica">
                <!--h4 class="card-title">
                  <a href="/informatica">Informática</a>
                </h4---->
            <a href="informatica/fundamentosdeprogramacion.html" class="list-group-item list-group-item-action">Fundamentos de programación</a>
            <a href="informatica/programacion.html" class="list-group-item list-group-item-action">Programación</a>
            <a href="informatica/paginasweb.html" class="list-group-item list-group-item-action">Páginas web</a>
            <a></a>
              </div>
              <a class="btn btn-light" data-toggle="collapse" href="#collapseInformatica" role="button" aria-expanded="false" aria-controls="collapseExample">Expandir</a>

            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
              <span class="shadow" onclick="window.location = 'control';"><br>
          <h1>Control</h1>
          
          <br></span> 
              <div class="list-group list-group-flush collapse" id="collapseControl">
                <!--h4 class="card-title">
                  <a href="/control">Control</a>
                </h4-->
                <a href="control/modelosysimulacion.html" class="list-group-item list-group-item-action">Señales y sistemas</a>
                <a href="control/modelosysimulacion.html" class="list-group-item list-group-item-action">Modelos y simulación</a>
                <a href="control/controlanalogo.html" class="list-group-item list-group-item-action">Control analógico</a>
                <a href="control/controldigital.html" class="list-group-item list-group-item-action">Control digital</a>
                <a href="control/robotica.html" class="list-group-item list-group-item-action">Robótica</a>
                <a href="control/comunicacionyredes.html" class="list-group-item list-group-item-action">Comunicación y redes industriales</a>
                <a href="control/sistemasinteligentes.html" class="list-group-item list-group-item-action">Sistemas inteligentes</a>
            <a></a>
          </div>
          <a class="btn btn-light" data-toggle="collapse" href="#collapseControl" role="button" aria-expanded="false" aria-controls="collapseExample">Expandir</a>

            </div>
          </div>
        </div>
        <!-- /.row -->
 
        <div class="card">
          <!--a href=""><img class="card-img-top" src="" height="90" alt=""></a-->
          <span class="shadow" onclick="window.location = 'otros';"><br>
<h1>Inteligencia artificial</h1>

<br></span>
            <div class="list-group list-group-flush collapse" id="collapseOtros">
            <!--h4 class="card-title">
              <a href="/informatica">Informática</a>
            </h4---->
        <a href="./otros/machinelearning.html" class="list-group-item list-group-item-action">Machine learning</a>
        <a href="#" class="list-group-item list-group-item-action">Detección de objetos</a>
        <a href="#" class="list-group-item list-group-item-action">Clasificación de imágenes: ¿cómo reconocer el contenido de una imagen?</a>
        <a href="./otros/BlockChain.html" class="list-group-item list-group-item-action">BlockChain</a>
        <a href="./otros/Javascript.html" class="list-group-item list-group-item-action">Javascript, JQuey, and JSON</a>
        <a href="https://www.coursera.org/learn/fitting-statistical-models-data-python/home/welcome" class="list-group-item list-group-item-action">Fitting Statistical Models to Data with Python</a>
        <a href="https://www.coursera.org/learn/deep-neural-networks-with-pytorch/home/welcome" class="list-group-item list-group-item-action">Deep Neural Networks with PyTorch</a>
        <a href="https://www.edx.org/es/professional-certificate/ibm-deep-learning" class="list-group-item list-group-item-action">Professional Certificate en Deep Learning</a>
        <a href="https://courses.edx.org/courses/course-v1:IBM+DL0110EN+3T2019/course/" class="list-group-item list-group-item-action">Deep Learning with Python and PyTorch</a>
        <a href="https://www.coursera.org/learn/data-analysis-with-python" class="list-group-item list-group-item-action">Análisis de datos con Python</a>
        <a href="https://www.coursera.org/learn/introduction-to-deep-learning-with-keras/home/welcome" class="list-group-item list-group-item-action">Introduction to Deep Learning & Neural Networks with Keras</a>
        <a href="https://www.coursera.org/professional-certificates/ai-engineer#courses" class="list-group-item list-group-item-action">Certificado profesional de IBM AI Engineering</a>
        <a href="https://www.coursera.org/learn/neural-networks-deep-learning/home/welcome" class="list-group-item list-group-item-action">Neural Networks and Deep Learning</a>
          </div>
<a class="btn btn-light" data-toggle="collapse" href="#collapseOtros" role="button" aria-expanded="false" aria-controls="collapseExample">Expandir</a>

        </div>
        <hr>
      </div>

      <div>
        <!-- Page Heading -->
        <h1 class="my-4" id="herramientas" style="position: sticky;top: 0;z-index: 1;background-color: white;">Herramientas
                <small>Programas y software</small>
                <hr>
              </h1>
              <div class="row">
                <!-- <h3 class="col-3">Lenguajes</h3> -->
                  <button type="button" class="btn btn-light col-2">Python</button>
                  <button type="button" class="btn btn-light col-3">Assembler</button>
                  <button type="button" class="btn btn-light col-2">Grafcet</button>
                  <button type="button" class="btn btn-light col-3">Ladder</button>
                  
              <!-- <h3 class="col-3">Programas</h3> -->
                <button type="button" class="btn btn-light col-2">Matlab</button>
                <button type="button" class="btn btn-light col-3">Simulink</button>
                <button type="button" class="btn btn-light col-2">Labview</button>
                <button type="button" class="btn btn-light col-3">Visual studio</button>

<?php 
//Blocke2('informatica/MATLAB','https://d1d1c1tnh6i0t6.cloudfront.net/wp-content/uploads/2018/01/matlab-logo.jpg','MATLAB combina un entorno de escritorio perfeccionado para el análisis iterativo y los procesos de diseño con un lenguaje de programación que expresa las matemáticas de matrices y arrays directamente.','https://www.mathworks.com/products/matlab.html');
//Blocke2('#','https://udemy-images.udemy.com/course/480x270/2005152_6ac1_2.jpg','Diseñe y simule su sistema en Simulink antes de convertirlo en hardware. Explore e implemente diseños que, de otro modo, no se plantearía... y sin tener que redactar código C, C++ ó HDL.','https://es.mathworks.com/products/simulink.html');
//Blocke2('#','https://www.digiajay.com/wp-content/uploads/2017/12/LabVIEW-Logo.jpg','LabVIEW es un software de ingeniería de sistemas que requiere pruebas, medidas y control con acceso rápido a hardware e información de datos.','');
//Blocke2('#','https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto/gigs/108415327/original/473a755f7bc410fa441c8d0e5299623cc6b3a10b/make-assignments-in-microsoft-visual-basic-and-c-sharp.jpg','C# y Visual Basic son lenguajes de programación diseñados para crear una gran variedad de aplicaciones que se ejecutan en .NET Framework.','https://visualstudio.microsoft.com/es/vs/features/net-development/');

?>  
              <!-- <h3 class="col-3">Diseño asistido por computadora (CAD)</h3> -->
                <button type="button" class="btn btn-light col-2">Autodesk Inventor</button>
                <button type="button" class="btn btn-light col-3">Siemens NX</button>
                <button type="button" class="btn btn-light col-2">Solid edge</button>
                <button type="button" class="btn btn-light col-3">Solid work</button>

                <?php 

//                Blocke2('mecanica/Inventor','https://cdn.shopify.com/s/files/1/1880/7891/products/DigitalCovers_INV_2017_7cdf320f-ff2a-499d-908f-c92c033bd861_1024x1024.png?v=1507048797','El software CAD Inventor® proporciona herramientas de calidad profesional para diseño mecánico 3D, documentación y simulación de productos. Trabaja de manera eficiente con una combinación potente de capacidades de diseño paramétrico, directo, de formas libres y basado en reglas.','https://latinoamerica.autodesk.com/products/inventor/overview');

//                Blocke2('mecanica/Inventor','https://ingemetrica.com/en/wp-content/uploads/sites/2/2016/02/02_logo_NX.jpg','El software NX de Siemens es una solución integral potente y flexible que le ayuda a ofrecer productos mejorados de forma más rápida y eficaz. NX pone a su disposición soluciones de diseño, simulación y fabricación de próxima generación que permiten a las empresas aprovechar todo el valor de los duplicados generales.','https://www.plm.automation.siemens.com/global/es/products/nx/');

//                Blocke2('mecanica/Inventor','https://www.gerotordesignstudio.com/wp-content/uploads/2018/08/solid_edge_logo_1.jpg','Solid Edge 2019 de Siemens ofrece el desarrollo de productos de próxima generación para los ingenieros de hoy en día. Inmejorable diseño eléctrico y de placas de circuitos impresos. Análisis de simulaciones totalmente integrado. Las herramientas más modernas para la fabricación aditiva y sustractiva. Nuevas funciones para la gestión de los requisitos. Y una colaboración en los proyectos basada en la nube, segura y gratuita.','https://solidedge.siemens.com/es/');
//                Blocke2('mecanica/Inventor','https://botw-pd.s3.amazonaws.com/styles/logo-thumbnail/s3/112012/solidworks_0.png?itok=2Iq-ZAmC','SOLIDWORKS 2019 proporciona la gran variedad de herramientas necesarias para abordar los problemas más complejos con el nivel de detalle adecuado con el fin de conseguir un acabado pormenorizado en todos los trabajos. Las nuevas funciones le permiten mejorar el proceso de desarrollo de productos para que pasen a producción mucho antes.','https://www.solidworks.com/es');
                ?>  
              </div>

      </div>


      <div>
        <h1 id="certificados" style="position: sticky;top: 0;z-index: 1;background-color: white;">Certificados</h1>
        <hr>
        <div class="row">
          <button type="button" class="btn btn-light col-3">OnRamp | Matlab</button>
          <button type="button" class="btn btn-light col-3">OnRamp | Simulink</button>
          <button type="button" class="btn btn-light col-3">Python | Kaggle</button>
          <button type="button" class="btn btn-light col-3">Intro to Machine learning | Kaggle</button>
          <button type="button" class="btn btn-light col-3">Visualización de datos | Kaggle</button>
          <button type="button" class="btn btn-light col-3">Bases de datos con Panda | Kaggle</button>
          <button type="button" class="btn btn-light col-3">Machine learning intermedio | Kaggle</button>
          <button type="button" class="btn btn-light col-3">Deep learning | Kaggle</button>
          <button type="button" class="btn btn-light col-4">Neural_Networks_and_Deep_Learning | Coursera</button>
          <button type="button" class="btn btn-light col-4">Improving Deep Neural Networks | Coursera</button>
          <button type="button" class="btn btn-light col-4">Structuring Machine Learning Projects | Coursera</button>
          <hr>
        </div>
        <div class="row">

          <!-- <?php 
          Blocke('Matlab Onramp','09/04/2020','Matlab1.png','Certificado uso de Matlab. <a href="https://matlabacademy.mathworks.com/progress/share/certificate.html?id=e2f2b709-0311-47da-a4fa-a8dcde209e5a">Click</a>'); 
          Blocke('Simulink Onramp','09/04/2019','simulink.png','Certificado uso de Simulink. <a href="https://matlabacademy.mathworks.com/progress/share/certificate.html?id=4a480e10-e108-4b74-a381-ddb63ed0cfa4">Click</a>'); 
          Blocke('Micro-curso de python en Kaggle','22/04/2020','C_Python.png','Curso introductorio que ofrece'); 
          Blocke('Introdución al Machine Learning en Kaggle','22/04/2020','Intro to Machine Learning.png','Curso introductorio que ofrece'); 
          Blocke('Visualización de datos en Kaggle','22/04/2020','Visualization.png','Curso introductorio que ofrece'); 
          Blocke('Manejo de bases de datos con Panda','22/05/2020','C_pandas.png','Manipulación de datos'); 
          Blocke('Machine learning intermedio','23/05/2020','C_ML2.png','...'); 
          Blocke('Deep learning','24/05/2020','DLearning.png','...'); 
          Blocke('Neural_Networks_and_Deep_Learning','14/06/2020','Neural_Networks_and_Deep_Learning.PNG','...'); 
          Blocke('Improving Deep Neural Networks:Hyperparameter tuning, Regularization and Optimization','14/06/2020','Improving_Deep_Neural_Networks.PNG','...'); 
          Blocke('Structuring Machine Learning Projects','14/06/2020','Structuring_Machine_Learning_Projects.PNG','...'); 
          ?> -->
        </div>
      </div>
                
            <!-- /.row -->

          </div>

          <?php require '../footerphp.php' ?>

        <!-- Pagination -->
        <ul hidden class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
          </li>
        </ul>
      
      </div>
      <!-- /.container -->


      <script>
        
        function addElement () { 
        // crea un nuevo div 
        // y añade contenido 
        var newDiv = document.createElement("a"); 
        var newContent = document.createTextNode("Hola!¿Qué tal?"); 
        newDiv.appendChild(newContent); //añade texto al div creado. 

        // añade el elemento creado y su contenido al DOM 
        // var currentDiv = document.getElementById("div1"); 
        // document.body.insertBefore(newDiv, currentDiv); 
}

      </script>
</body>
</html>