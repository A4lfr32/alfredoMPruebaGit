

function SelectChanged(tag) {
    sessionStorage.setItem("cookie_"+document.getElementsByTagName('h1')[0].id, tag); // guardas en cookie
    console.log(tag);
    document.getElementById("Main").innerHTML = cargarContenido(tag); // ejecutas el cambio
  }


  function scrollingF(){

    let valores = [];
    let contentItem=document.getElementById("Main").children
    for (i = 0; i < contentItem.length; i++) {
      if (contentItem[i].tagName=="H2" || contentItem[i].tagName=="H3") {
        valores.push(contentItem[i].getBoundingClientRect().top<100);
      }
    }
    let elementList=document.getElementsByClassName("list-group")[0].children;
    for (i=0; i< elementList.length;i++) {
      elementList[i].style.borderLeft="";
      elementList[i].style.left="";
      elementList[i].style.backgroundColor = "";
      elementList[i].style.color = "";
    }
    let actual = valores.lastIndexOf(true);

    if (actual==-1){actual=0}
    let elementStyle = document.getElementsByClassName("list-group")[0].children[actual].style;
    elementStyle.borderLeft="solid";
    elementStyle.left="-3px";
    elementStyle.backgroundColor = "#d6d6d6";
    elementStyle.color = "black";
  }


  
  window.onload = function() {
    let Aux = document.getElementsByTagName('h1')[0].id
    var storedValue = sessionStorage.getItem("cookie_"+Aux); 
    if (storedValue !== null) {
      $("#mySelect").val(storedValue); 
      cargarContenido(storedValue);
      console.log(storedValue);
  } else {
      $("#mySelect").val(0); 
      cargarContenido(0);
  }
  };

    // Carga el contenido izquierdo y la informaciòn
    function cargarContenidoEntero(xml,tag) {
        xmlDoc = xml.responseXML;
        let contents2 = xmlDoc.children[0].children[tag].children
        document.getElementById("contenido").innerHTML="";
    
        for (var i = 0; i < contents2.length; i++) {
          if (contents2[i].tagName=="h2"){
            contents2[i].id="Tema-"+i;
            let node = document.createElement("div");
            node.innerHTML='<a href="#Tema-'+i+'" class="list-group-item-action list-group-item">'+contents2[i].innerHTML+'<hr></a>'
            document.getElementById("contenido").appendChild(node.firstChild);
            console.log(contents2[i]);
          } else if (contents2[i].tagName=="h3"){
            contents2[i].id="Tema-"+i;
            let node = document.createElement("div");
            node.innerHTML='<a href="#Tema-'+i+'" class="list-group-item-action list-group-item pl-4 p-1">'+contents2[i].innerHTML+'<hr></a>'
            document.getElementById("contenido").appendChild(node.firstChild);
            console.log(contents2[i]);
          }
          document.getElementById("Main").innerHTML=xmlDoc.children[0].children[tag].innerHTML;
    
        }
      } 
      var xmlDoc;
      function cargarContenido(tag) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            cargarContenidoEntero(this,tag);
          }
        };
        xmlhttp.open("GET", document.getElementsByTagName('h1')[0].getAttribute("data-xmlname")+".xml", true);
        xmlhttp.send();
      }