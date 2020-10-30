<?php
function Blocke ($titulo, $fecha,$Dir_imagen,$Descripcion)
{
    echo
"<div class='card col align-self-center col-md-6'>
  <img class='card-img-top' src='certificados/$Dir_imagen' alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title'>$titulo</h5>
    <p class='card-text'>$Descripcion</p>
    <p class='card-text'><small class='text-muted'>Última subida: $fecha</small></p>
    
  </div>
</div>";
}

function Blocke2 ($href,$Dir_imagen,$Descripcion,$hideInfo)
{
    echo
"<div class='col-lg-3 col-md-4 col-sm-6 mb-4'>
<div class='card'>
  <a href='$href'><img class='card-img-top' src='$Dir_imagen' width='100' height='143' alt=''></a>
  <div hidden class='card-body'>
    <!--h4 class='card-title'>
      <a href='$hideInfo'>Matlab</a>
    </h4-->
    <p class='card-text'>$Descripcion</p>
  </div>
</div>
</div>";
}


?>