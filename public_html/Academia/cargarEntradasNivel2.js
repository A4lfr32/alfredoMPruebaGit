$( document ).ready(function() {

    console.log( "ready!" );
    loadXMLDoc();

});


      var xmlDoc;
      var para;
      function loadXMLDoc() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
          }
        };
        xmlhttp.open("GET", "../../entradas.xml", true);
        xmlhttp.send();
      }
      function myFunction(xml) {

  var i;
  xmlDoc = xml.responseXML;
  var entradaXML=xmlDoc.childNodes[0];

  for (i = 0; i <entradaXML.children.length; i++) {
    j=entradaXML.children.length-1-i;
    if (i%2){
      var PostItBlockOdd = document.createElement("article");
      PostItBlockOdd.innerHTML=" <hr>     <div class='row'><div class='col-md-5'>          <a href='#'>            <img class='img-fluid rounded mb-3 mb-md-0' src='../../imagenes/robotCablesApp.PNG' alt=''>          </a>        </div>        <div class='col-md-7'>          <h3>Aplicación web de robot por cables</h3> <small>04/01/2020</small>          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>          <a class='btn btn-primary' href='#'>Ver más</a>          <div style='float: right;' class='row'>          <span>tags: </span>        <div class='card text-white bg-dark m-1'>Matemáticas </div>        <div class='card text-white bg-dark m-1'>matemáticas </div>        </div>        </div>      </div> ";

    console.log("i: "+entradaXML.children[j].getAttributeNode("clases").value);
      PostItBlockOdd.className = entradaXML.children[j].getAttributeNode("clases").value;
  j=entradaXML.children.length-1-i; 
  PostItBlockOdd.getElementsByTagName('img')[0].setAttribute('src',xmlDoc.childNodes[0].children[j].getElementsByTagName("img")[0].getAttribute("src"));
  PostItBlockOdd.getElementsByTagName('h3')[0].innerHTML=xmlDoc.childNodes[0].children[j].getElementsByTagName("h2")[0].innerHTML;
  PostItBlockOdd.getElementsByTagName('small')[0].innerHTML=xmlDoc.childNodes[0].children[j].lastElementChild.innerHTML;
  document.getElementById("contenidoEntradas").append(PostItBlockOdd);
     } else {
      var PostItBlockEven = document.createElement("article");
      PostItBlockEven.innerHTML="<hr>      <div class='row'>      <div class='col-md-7'>     <h3>Contenido de academia</h3><small>04/01/2020</small>     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>     <a class='btn btn-primary' href='#'>Ver más</a>   </div>   <div class='col-md-5'>     <a href='#'>       <img class='img-fluid rounded mb-3 mb-md-0' src='../../imagenes/ContenidoAcademia.PNG' alt=''>     </a>   </div> </div> ";

    console.log("i: "+entradaXML.children[j].getAttributeNode("clases").value);
      PostItBlockEven.className = entradaXML.children[j].getAttributeNode("clases").value;
  j=entradaXML.children.length-1-i; 
  PostItBlockEven.getElementsByTagName('img')[0].setAttribute('src',xmlDoc.childNodes[0].children[j].getElementsByTagName("img")[0].getAttribute("src"));
  PostItBlockEven.getElementsByTagName('h3')[0].innerHTML=xmlDoc.childNodes[0].children[j].getElementsByTagName("h2")[0].innerHTML;
  PostItBlockEven.getElementsByTagName('small')[0].innerHTML=xmlDoc.childNodes[0].children[j].lastElementChild.innerHTML;
  PostItBlockEven.getElementsByTagName('small')[0].innerHTML=xmlDoc.childNodes[0].children[j].lastElementChild.innerHTML;
  document.getElementById("contenidoEntradas").append(PostItBlockEven);
     };
  
  
 // document.getElementById("contenidoEntradas").insertBefore(para, document.getElementById("contenidoEntradas").firstChild);
  
  }
$('article').not('.'+document.getElementById("tag").innerHTML).hide();
console.log("Hola: "+ document.getElementById("tag").innerHTML);
}