  var cont = 0;
  var P_0_x;
  var P_0_y;

  var flagTrayectoria;
var c_1_inicial;
var c_2_inicial;

var diff_c_1;
var diff_c_2;
var flag = 0;

function dectobin(num,motor) {
  var base2 = (num >>> 0).toString(2);
  var hi = "0b"+base2.padStart(32, '0');

  return bytes = [motor,
    (hi >> 24) & 0xFF,
    (hi >> 16) & 0xFF,
    (hi >> 8) & 0xFF,
    hi & 0xFF,
    motor+1
];
console.log(bytes);

}

   // function appletOnLoad(api){ api.evalCommand('Segment((1,2),(3,4))'); alert("asfre");}
   // ggbApplet.appletOnLoad(api) {
  //alert("asfre");
//}


$(document).ready(function(){
var theta1;
var theta2;

  $("#btnActuDir").click(function(){
    var i = 0;

      x0_ini = ggbApplet.getXcoord('S_1');
      y0_ini = ggbApplet.getYcoord('S_1');
      x1_ini = ggbApplet.getXcoord('S_2');
      y1_ini = ggbApplet.getYcoord('S_2');

    do {
      i++;
    var F1 = $(inputF1).val();
    var F2 = $(inputF2).val();
    ggbApplet.setValue('F1',F1);
    ggbApplet.setValue('F2',F2);
  //  ggbApplet.setValue('F2',11);
console.log(ggbApplet.getValue('Fuerza(1,1)'));
//console.log(ggbApplet.getValue('Fuerza(2,1)'));

      var x0 = ggbApplet.getXcoord('S_1');
      var y0 = ggbApplet.getYcoord('S_1');
      var x1 = ggbApplet.getXcoord('S_2');
      var y1 = ggbApplet.getYcoord('S_2');

      var sp1x = ggbApplet.getXcoord('SP_1');
      var sp1y = ggbApplet.getYcoord('SP_1');

      var sp2x = ggbApplet.getXcoord('SP_2');
      var sp2y = ggbApplet.getYcoord('SP_2');

      

       theta1 = ggbApplet.getValue('theta1');
       theta2 = ggbApplet.getValue('theta2');
//      var Gradtheta1 = ggbApplet.getValue('theta1Grad')/100;
  //    var Gradtheta2 = ggbApplet.getValue('theta2Grad')/100;

      var Gradtheta1 = Math.pow(9/F1,2)* ggbApplet.getValue('theta1Grad')/500;
      var Gradtheta2 = Math.pow(9/F2,2)* ggbApplet.getValue('theta2Grad')/500;

      //console.log("t1: "+theta1+"t2: "+theta2);
      //console.log("Gt1: "+Gradtheta1+"Gt2: "+Gradtheta2+"Error: "+ggbApplet.getValueString('Error'));
      
      //var Gradtheta1 = 0.2;
      //var Gradtheta2 = 0.2;
      
      //-theta(1)*sin(theta(1))*(acel(1)-(cos(theta(1))*F(1)+cos(theta(2))*F(2)))*F(1)+theta(1)*cos(theta(1))*(acel(2)-(sin(theta(1))*F(1)+sin(theta(2))*F(2)))*F(1)
      
      ggbApplet.setCoords('S_1',(x0-sp1x)*Math.cos(Gradtheta1)-(y0-sp1y)*Math.sin(Gradtheta1)+sp1x,(x0-sp1x)*Math.sin(Gradtheta1)+(y0-sp1y)*Math.cos(Gradtheta1)+sp1y);
      ggbApplet.setCoords('S_2',(x1-sp2x)*Math.cos(Gradtheta2)-(y1-sp2y)*Math.sin(Gradtheta2)+sp2x,(x1-sp2x)*Math.sin(Gradtheta2)+(y1-sp2y)*Math.cos(Gradtheta2)+sp2y);
     //ggbApplet.setCoords('S_1',x0*a,y0*a);

     var Error_F = Math.abs(ggbApplet.getValue('Error(1,1)'))+Math.abs(ggbApplet.getValue('Error(2,1)'));
    } while (i<50 && Error_F> 0.1)
      if (Error_F>0.1) {
        ggbApplet.setCoords('S_1',x0_ini,y0_ini);
        ggbApplet.setCoords('S_2',x1_ini,y1_ini);
      alert("El error en el cálculo es de: "+Error_F+"Es probable que tenga que elegir otra combinación de fuerzas");
    } else {
      contador++;

      if (his_sp1x.length<10){
        
        counterAux.push(contador);
        his_sp1x.push(ggbApplet.getXcoord('SP_1'));
        his_sp1y.push(ggbApplet.getYcoord('SP_1'));
        his_sp2x.push(ggbApplet.getXcoord('SP_2'));
        his_sp2y.push(ggbApplet.getYcoord('SP_2'));

        dirtheta1.push(ggbApplet.getValue('theta1'));
        dirtheta2.push(ggbApplet.getValue('theta2'));
  } else{
    console.log("supero los 10");
    his_sp1x.shift();
    his_sp1y.shift();
    his_sp2x.shift();
    his_sp2y.shift();
    his_sp1x.push(ggbApplet.getXcoord('SP_1'));
    his_sp1y.push(ggbApplet.getYcoord('SP_1'));
    his_sp2x.push(ggbApplet.getYcoord('SP_2'));
    his_sp2y.push(ggbApplet.getYcoord('SP_2'));

    dirtheta1.shift();
    dirtheta2.shift();
    dirtheta1.push(ggbApplet.getValue('theta1'));
    dirtheta2.push(ggbApplet.getValue('theta2'));

    counterAux.shift();
    counterAux.push(contador);

  }}
//var Auxdir = 

    console.log("Error fue: "+Error_F);

  });

  var contador=0;
var counterAux =[];
  var his_sp1x=[];
  var his_sp1y=[];
  var his_sp2x=[];
  var his_sp2y=[];
  var dirtheta1=[]; 
  var dirtheta2=[];


  $("#btnActuMag").click(function(){
    var alfa=1/1000;
    
    for (let j = 0; j < 300; j++) {
      var i = 0;
    counterAux.forEach(element => {
      S_1ActuX=ggbApplet.getXcoord('S_1');
      S_1ActuY= ggbApplet.getYcoord('S_1');
      S_2ActuX= ggbApplet.getXcoord('S_2');
      S_2ActuY= ggbApplet.getYcoord('S_2');
      
      VectorErrorS_1x=(his_sp1x[i]-S_1ActuX);
      VectorErrorS_1y=(his_sp1y[i]-S_1ActuY);
      
      VectorErrorS_2x=(his_sp2x[i]-S_2ActuX);
      VectorErrorS_2y=(his_sp2y[i]-S_2ActuY);
      
//console.log((VectorErrorS_1x/Math.pow(Math.cos(dirtheta1[i]),2)-VectorErrorS_1y/(Math.cos(dirtheta1[i])*Math.sin(dirtheta1[i]))));
      ggbApplet.setCoords('S_1',S_1ActuX+alfa*(VectorErrorS_1x/Math.pow(Math.cos(dirtheta1[i]),2)-VectorErrorS_1y/(Math.cos(dirtheta1[i])*Math.sin(dirtheta1[i]))),S_1ActuY+alfa*(VectorErrorS_1y/Math.pow(Math.sin(dirtheta1[i]),2)-VectorErrorS_1x/(Math.cos(dirtheta1[i])*Math.sin(dirtheta1[i]))));
      ggbApplet.setCoords('S_2',S_2ActuX+alfa*(VectorErrorS_2x/Math.pow(Math.cos(dirtheta2[i]),2)-VectorErrorS_2y/(Math.cos(dirtheta2[i])*Math.sin(dirtheta2[i]))),S_2ActuY+alfa*(VectorErrorS_2y/Math.pow(Math.sin(dirtheta2[i]),2)-VectorErrorS_2x/(Math.cos(dirtheta2[i])*Math.sin(dirtheta2[i]))));

      i++;
    });
  }

//var error_soporte = 
//ggbApplet.getYcoord('P_0');
  });

  $("#btn1").click(function(){
      var x1 = $(input1).val();
      var y1 = $(input2).val();
      ggbApplet.setCoords('S_1',x1,y1);

  });
  $("#btn2").click(function(){
      var x2 = $(input3).val();
      var y2 = $(input4).val();
      ggbApplet.setCoords('S_2',x2,y2);

  });
  $("#btn3").click(function(){
    if (his_sp1x.length<10){
        
        counterAux.push(contador);
        his_sp1x.push(ggbApplet.getXcoord('SP_1'));
        his_sp1y.push(ggbApplet.getYcoord('SP_1'));
        his_sp2x.push(ggbApplet.getXcoord('SP_2'));
        his_sp2y.push(ggbApplet.getYcoord('SP_2'));
        
        dirtheta1.push(ggbApplet.getValue('theta1'));
        dirtheta2.push(ggbApplet.getValue('theta2'));
  } else{
    console.log("supero los 10");
    his_sp1x.shift();
    his_sp1y.shift();
    his_sp2x.shift();
    his_sp2y.shift();
    his_sp1x.push(ggbApplet.getXcoord('SP_1'));
    his_sp1y.push(ggbApplet.getYcoord('SP_1'));
    his_sp2x.push(ggbApplet.getXcoord('SP_2'));
    his_sp2y.push(ggbApplet.getYcoord('SP_2'));

    dirtheta1.shift();
    dirtheta2.shift();
    dirtheta1.push(ggbApplet.getValue('theta1'));
    dirtheta2.push(ggbApplet.getValue('theta2'));

    counterAux.shift();
    counterAux.push(contador);

  }
  console.log("sff");

  });
// -> esta parte era del streaming
  // $("#btnIP").click(function(){
  //   var IP = $(inputIP).val();
  //   alert(IP+":81\/stream");
  //   $("#my_image").attr("src",IP+":81\/stream");
  // });
  

});



