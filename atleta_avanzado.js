window.onload = function(){
    fetch('php/api-traer-datos.php', {
        method: "POST",
        "Content-Type": "application/json"
    }).then(response => response.json()).then(data => {obj = data
        console.log(data);
    });
}

document.getElementById("nivel1").onclick = function() {
    document.getElementById("card1").style.display = "none";
    document.getElementById("card2").style.display = "none";
    var modalidad;
modalidad=document.getElementById("modalidad").value;
if(modalidad=="GYM"){
        var nivel;
    nivel=document.getElementById("nivel").value;
 
        document.getElementById("desaparecer").style.display = "block";
        document.getElementById("0").style.display = "block";
        document.getElementById("elselect").style.display = "none";
        document.getElementById("botonx").style.display = "none";
        document.getElementById("elselect2").style.display = "none";
    
    if(nivel=="Atleta avanzado"){
        var imagen = document.getElementById("imagen");
       imagen.src = "src/entrenamientos/correr.gif";
        document.getElementById("A").innerHTML = "Trotar";
                document.getElementById("B").innerHTML = "180 segundos";
        document.getElementById("lunes").onclick = function() {
       document.getElementById("mostrar").style.display = "none";
       document.getElementById("imagenp").style.display = "none";
       document.getElementById("mostrar2").style.display = "block";
            var imagen2 = document.getElementById("imagen2");
            var imagen3 = document.getElementById("imagen3");
    //BOTON1
            document.getElementById("SIG1").onclick = function() {
             document.getElementById("0").style.display = "none";
             document.getElementById("1").style.display = "block";
                var imagen1 = document.getElementById("imagen1");
                imagen1.src = "src/entrenamientos/25.gif"; 
                document.getElementById("D").innerHTML = "Flexiones";
                document.getElementById("E").innerHTML = "6 series de 15 repeticiones";
            
            }
    //BOTON2
    document.getElementById("SIG2").onclick = function() {
             document.getElementById("1").style.display = "none";
             document.getElementById("2").style.display = "block";
                var imagen2 = document.getElementById("imagen2");
                imagen2.src = "src/entrenamientos/33.gif"; 
                document.getElementById("F").innerHTML = "Press de banca plano";
                document.getElementById("G").innerHTML = "6 series de 15 repeticiones";
            
            }
     //BOTON3
            document.getElementById("SIG3").onclick = function() {
             document.getElementById("2").style.display = "none";
             document.getElementById("3").style.display = "block";
                var imagen3 = document.getElementById("imagen3");
                imagen3.src = "src/entrenamientos/34.gif"; 
                document.getElementById("H").innerHTML = "Press de banca inclinado";
                document.getElementById("I").innerHTML = "6 series de 15 repeticiones";
            
            }
    //BOTON4
    document.getElementById("SIG4").onclick = function() {
             document.getElementById("3").style.display = "none";
             document.getElementById("4").style.display = "block";
                var imagen4 = document.getElementById("imagen4");
                imagen4.src = "src/entrenamientos/35.gif"; 
                document.getElementById("J").innerHTML = "Press de banca declinado";
                document.getElementById("K").innerHTML = "6 series de 15 repeticiones";
            
            }
        //BOTON5
    document.getElementById("SIG5").onclick = function() {
             document.getElementById("4").style.display = "none";
             document.getElementById("5").style.display = "block";
                var imagen5 = document.getElementById("imagen5");
                imagen5.src = "src/entrenamientos/36.gif"; 
                document.getElementById("L").innerHTML = "FONDOS";
                document.getElementById("M").innerHTML = "6 series de 15 repeticiones";
            
            }
            //BOTON6
    document.getElementById("SIG6").onclick = function() {
             document.getElementById("5").style.display = "none";
             document.getElementById("6").style.display = "block";
                var imagen6 = document.getElementById("imagen6");
                imagen6.src = "src/entrenamientos/18.gif"; 
                document.getElementById("N").innerHTML = "Twist ruso";
                document.getElementById("Ñ").innerHTML = "6 series de 15 repeticiones";
            
            }
            document.getElementById("terminar1").onclick = function() {
                document.getElementById("terminar").style.display = "block";
            }
        }
    //MARTES
    document.getElementById("martes").onclick = function() {
        document.getElementById("mostrar").style.display = "none";
        document.getElementById("imagenp").style.display = "none";
        document.getElementById("mostrar2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             var imagen3 = document.getElementById("imagen3");
     //BOTON1
             document.getElementById("SIG1").onclick = function() {
              document.getElementById("0").style.display = "none";
              document.getElementById("1").style.display = "block";
                 var imagen1 = document.getElementById("imagen1");
                 imagen1.src = "src/entrenamientos/45.gif"; 
                 document.getElementById("D").innerHTML = "Curl de bíceps";
                 document.getElementById("E").innerHTML = "6 series de 15 repeticiones";
             
             }
     //BOTON2
     document.getElementById("SIG2").onclick = function() {
              document.getElementById("1").style.display = "none";
              document.getElementById("2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 imagen2.src = "src/entrenamientos/46.gif"; 
                 document.getElementById("F").innerHTML = "Estiramiento de tríceps con polea";
                 document.getElementById("G").innerHTML = "6 series de 15 repeticiones";
             
             }
      //BOTON3
             document.getElementById("SIG3").onclick = function() {
              document.getElementById("2").style.display = "none";
              document.getElementById("3").style.display = "block";
                 var imagen3 = document.getElementById("imagen3");
                 imagen3.src = "src/entrenamientos/47.gif"; 
                 document.getElementById("H").innerHTML = "Elevación de hombro";
                 document.getElementById("I").innerHTML = "6 series de 15 repeticiones";
             
             }
     //BOTON4
     document.getElementById("SIG4").onclick = function() {
              document.getElementById("3").style.display = "none";
              document.getElementById("4").style.display = "block";
                 var imagen4 = document.getElementById("imagen4");
                 imagen4.src = "src/entrenamientos/48.gif"; 
                 document.getElementById("J").innerHTML = "Elevación de hombros con mancuernas";
                 document.getElementById("K").innerHTML = "6 series de 15 repeticiones";
             
             }
         //BOTON5
     document.getElementById("SIG5").onclick = function() {
              document.getElementById("4").style.display = "none";
              document.getElementById("5").style.display = "block";
                 var imagen5 = document.getElementById("imagen5");
                 imagen5.src = "src/entrenamientos/50.gif"; 
                 document.getElementById("L").innerHTML = "Extensión de tríceps con mancuerna";
                 document.getElementById("M").innerHTML = "6 series de 15 repeticiones";
             
             }
             //BOTON6
     document.getElementById("SIG6").onclick = function() {
              document.getElementById("5").style.display = "none";
              document.getElementById("6").style.display = "block";
                 var imagen6 = document.getElementById("imagen6");
                 imagen6.src = "src/entrenamientos/52.gif"; 
                 document.getElementById("N").innerHTML = "Curl de bícep con barra";
                 document.getElementById("Ñ").innerHTML = "6 series de 15 repeticiones";
             
             }
             document.getElementById("terminar1").onclick = function() {
                 document.getElementById("terminar").style.display = "block";
             }
         }
    //MIERCOLES
    document.getElementById("miercoles").onclick = function() {
        document.getElementById("mostrar").style.display = "none";
        document.getElementById("imagenp").style.display = "none";
        document.getElementById("mostrar2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             var imagen3 = document.getElementById("imagen3");
     //BOTON1
             document.getElementById("SIG1").onclick = function() {
              document.getElementById("0").style.display = "none";
              document.getElementById("1").style.display = "block";
                 var imagen1 = document.getElementById("imagen1");
                 imagen1.src = "src/entrenamientos/62.gif"; 
                 document.getElementById("D").innerHTML = "Prensa de piernas";
                 document.getElementById("E").innerHTML = "6 series de 15 repeticiones";
             
             }
     //BOTON2
     document.getElementById("SIG2").onclick = function() {
              document.getElementById("1").style.display = "none";
              document.getElementById("2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 imagen2.src = "src/entrenamientos/63.gif"; 
                 document.getElementById("F").innerHTML = "Femoral";
                 document.getElementById("G").innerHTML = "6 series de 15 repeticiones";
             
             }
      //BOTON3
             document.getElementById("SIG3").onclick = function() {
              document.getElementById("2").style.display = "none";
              document.getElementById("3").style.display = "block";
                 var imagen3 = document.getElementById("imagen3");
                 imagen3.src = "src/entrenamientos/64.gif"; 
                 document.getElementById("H").innerHTML = "Curl de piernas acostado";
                 document.getElementById("I").innerHTML = "6 series de 15 repeticiones";
             
             }
     //BOTON4
     document.getElementById("SIG4").onclick = function() {
              document.getElementById("3").style.display = "none";
              document.getElementById("4").style.display = "block";
                 var imagen4 = document.getElementById("imagen4");
                 imagen4.src = "src/entrenamientos/65.gif"; 
                 document.getElementById("J").innerHTML = "Elevación de talón con barra";
                 document.getElementById("K").innerHTML = "6 series de 15 repeticiones";
             
             }
         //BOTON5
     document.getElementById("SIG5").onclick = function() {
              document.getElementById("4").style.display = "none";
              document.getElementById("5").style.display = "block";
                 var imagen5 = document.getElementById("imagen5");
                 imagen5.src = "src/entrenamientos/67.gif"; 
                 document.getElementById("L").innerHTML = "Sentadilla con peso";
                 document.getElementById("M").innerHTML = "6 series de 15 repeticiones";
             
             }
             //BOTON6
     document.getElementById("SIG6").onclick = function() {
              document.getElementById("5").style.display = "none";
              document.getElementById("6").style.display = "block";
                 var imagen6 = document.getElementById("imagen6");
                 imagen6.src = "src/entrenamientos/61.gif"; 
                 document.getElementById("N").innerHTML = "Cuadríceps";
                 document.getElementById("Ñ").innerHTML = "6 series de 15 repeticiones";
             
             }
             document.getElementById("terminar1").onclick = function() {
                 document.getElementById("terminar").style.display = "block";
             }
         }
    //JUEVES
    document.getElementById("jueves").onclick = function() {
        document.getElementById("mostrar").style.display = "none";
        document.getElementById("imagenp").style.display = "none";
        document.getElementById("mostrar2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             var imagen3 = document.getElementById("imagen3");
     //BOTON1
             document.getElementById("SIG1").onclick = function() {
              document.getElementById("0").style.display = "none";
              document.getElementById("1").style.display = "block";
                 var imagen1 = document.getElementById("imagen1");
                 imagen1.src = "src/entrenamientos/25.gif"; 
                 document.getElementById("D").innerHTML = "Flexiones";
                 document.getElementById("E").innerHTML = "6 series de 15 repeticiones";
             
             }
     //BOTON2
     document.getElementById("SIG2").onclick = function() {
              document.getElementById("1").style.display = "none";
              document.getElementById("2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 imagen2.src = "src/entrenamientos/33.gif"; 
                 document.getElementById("F").innerHTML = "Press de banca plano";
                 document.getElementById("G").innerHTML = "6 series de 15 repeticiones";
             
             }
      //BOTON3
             document.getElementById("SIG3").onclick = function() {
              document.getElementById("2").style.display = "none";
              document.getElementById("3").style.display = "block";
                 var imagen3 = document.getElementById("imagen3");
                 imagen3.src = "src/entrenamientos/34.gif"; 
                 document.getElementById("H").innerHTML = "Press de banca inclinado";
                 document.getElementById("I").innerHTML = "6 series de 15 repeticiones";
             
             }
     //BOTON4
     document.getElementById("SIG4").onclick = function() {
              document.getElementById("3").style.display = "none";
              document.getElementById("4").style.display = "block";
                 var imagen4 = document.getElementById("imagen4");
                 imagen4.src = "src/entrenamientos/35.gif"; 
                 document.getElementById("J").innerHTML = "Press de banca declinado";
                 document.getElementById("K").innerHTML = "6 series de 15 repeticiones";
             
             }
         //BOTON5
     document.getElementById("SIG5").onclick = function() {
              document.getElementById("4").style.display = "none";
              document.getElementById("5").style.display = "block";
                 var imagen5 = document.getElementById("imagen5");
                 imagen5.src = "src/entrenamientos/36.gif"; 
                 document.getElementById("L").innerHTML = "FONDOS";
                 document.getElementById("M").innerHTML = "6 series de 15 repeticiones";
             
             }
             //BOTON6
     document.getElementById("SIG6").onclick = function() {
              document.getElementById("5").style.display = "none";
              document.getElementById("6").style.display = "block";
                 var imagen6 = document.getElementById("imagen6");
                 imagen6.src = "src/entrenamientos/18.gif"; 
                 document.getElementById("N").innerHTML = "Twist ruso";
                 document.getElementById("Ñ").innerHTML = "6 series de 15 repeticiones";
             
             }
             document.getElementById("terminar1").onclick = function() {
                 document.getElementById("terminar").style.display = "block";
             }
         }
         //VIERNES
         document.getElementById("viernes").onclick = function() {
            document.getElementById("mostrar").style.display = "none";
            document.getElementById("imagenp").style.display = "none";
            document.getElementById("mostrar2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 var imagen3 = document.getElementById("imagen3");
         //BOTON1
                 document.getElementById("SIG1").onclick = function() {
                  document.getElementById("0").style.display = "none";
                  document.getElementById("1").style.display = "block";
                     var imagen1 = document.getElementById("imagen1");
                     imagen1.src = "src/entrenamientos/45.gif"; 
                     document.getElementById("D").innerHTML = "Curl de bíceps";
                     document.getElementById("E").innerHTML = "6 series de 15 repeticiones";
                 
                 }
         //BOTON2
         document.getElementById("SIG2").onclick = function() {
                  document.getElementById("1").style.display = "none";
                  document.getElementById("2").style.display = "block";
                     var imagen2 = document.getElementById("imagen2");
                     imagen2.src = "src/entrenamientos/46.gif"; 
                     document.getElementById("F").innerHTML = "Estiramiento de tríceps con polea";
                     document.getElementById("G").innerHTML = "6 series de 15 repeticiones";
                 
                 }
          //BOTON3
                 document.getElementById("SIG3").onclick = function() {
                  document.getElementById("2").style.display = "none";
                  document.getElementById("3").style.display = "block";
                     var imagen3 = document.getElementById("imagen3");
                     imagen3.src = "src/entrenamientos/47.gif"; 
                     document.getElementById("H").innerHTML = "Elevación de hombro";
                     document.getElementById("I").innerHTML = "6 series de 15 repeticiones";
                 
                 }
         //BOTON4
         document.getElementById("SIG4").onclick = function() {
                  document.getElementById("3").style.display = "none";
                  document.getElementById("4").style.display = "block";
                     var imagen4 = document.getElementById("imagen4");
                     imagen4.src = "src/entrenamientos/48.gif"; 
                     document.getElementById("J").innerHTML = "Elevación de hombros con mancuernas";
                     document.getElementById("K").innerHTML = "6 series de 15 repeticiones";
                 
                 }
             //BOTON5
         document.getElementById("SIG5").onclick = function() {
                  document.getElementById("4").style.display = "none";
                  document.getElementById("5").style.display = "block";
                     var imagen5 = document.getElementById("imagen5");
                     imagen5.src = "src/entrenamientos/50.gif"; 
                     document.getElementById("L").innerHTML = "Extensión de tríceps con mancuerna";
                     document.getElementById("M").innerHTML = "6 series de 15 repeticiones";
                 
                 }
                 //BOTON6
         document.getElementById("SIG6").onclick = function() {
                  document.getElementById("5").style.display = "none";
                  document.getElementById("6").style.display = "block";
                     var imagen6 = document.getElementById("imagen6");
                     imagen6.src = "src/entrenamientos/52.gif"; 
                     document.getElementById("N").innerHTML = "Curl de bícep con barra";
                     document.getElementById("Ñ").innerHTML = "6 series de 15 repeticiones";
                 
                 }
                 document.getElementById("terminar1").onclick = function() {
                     document.getElementById("terminar").style.display = "block";
                 }
             }
             //SABADO
             document.getElementById("sabado").onclick = function() {
                document.getElementById("mostrar").style.display = "none";
                document.getElementById("imagenp").style.display = "none";
                document.getElementById("mostrar2").style.display = "block";
                     var imagen2 = document.getElementById("imagen2");
                     var imagen3 = document.getElementById("imagen3");
             //BOTON1
                     document.getElementById("SIG1").onclick = function() {
                      document.getElementById("0").style.display = "none";
                      document.getElementById("1").style.display = "block";
                         var imagen1 = document.getElementById("imagen1");
                         imagen1.src = "src/entrenamientos/69.gif"; 
                         document.getElementById("D").innerHTML = "Elevación de piernas para glúteo";
                         document.getElementById("E").innerHTML = "6 series de 15 repeticiones";
                     
                     }
             //BOTON2
             document.getElementById("SIG2").onclick = function() {
                      document.getElementById("1").style.display = "none";
                      document.getElementById("2").style.display = "block";
                         var imagen2 = document.getElementById("imagen2");
                         imagen2.src = "src/entrenamientos/73.gif"; 
                         document.getElementById("F").innerHTML = "Zancada con apoyo de silla";
                         document.getElementById("G").innerHTML = "6 series de 15 repeticiones";
                     
                     }
              //BOTON3
                     document.getElementById("SIG3").onclick = function() {
                      document.getElementById("2").style.display = "none";
                      document.getElementById("3").style.display = "block";
                         var imagen3 = document.getElementById("imagen3");
                         imagen3.src = "src/entrenamientos/74.gif"; 
                         document.getElementById("H").innerHTML = "Extensión de glúteo en una pierna con silla";
                         document.getElementById("I").innerHTML = "6 series de 15 repeticiones";
                     
                     }
             //BOTON4
             document.getElementById("SIG4").onclick = function() {
                      document.getElementById("3").style.display = "none";
                      document.getElementById("4").style.display = "block";
                         var imagen4 = document.getElementById("imagen4");
                         imagen4.src = "src/entrenamientos/77.gif"; 
                         document.getElementById("J").innerHTML = "Elevación de glúteo con banda elástica";
                         document.getElementById("K").innerHTML = "6 series de 15 repeticiones";
                     
                     }
                 //BOTON5
             document.getElementById("SIG5").onclick = function() {
                      document.getElementById("4").style.display = "none";
                      document.getElementById("5").style.display = "block";
                         var imagen5 = document.getElementById("imagen5");
                         imagen5.src = "src/entrenamientos/11.gif"; 
                         document.getElementById("L").innerHTML = "Flexión lateral para oblicuos";
                         document.getElementById("M").innerHTML = "6 series de 15 repeticiones (lado derecho y lado izquierdo)";
                     
                     }
                     //BOTON6
             document.getElementById("SIG6").onclick = function() {
                      document.getElementById("5").style.display = "none";
                      document.getElementById("6").style.display = "block";
                         var imagen6 = document.getElementById("imagen6");
                         imagen6.src = "src/entrenamientos/12.gif"; 
                         document.getElementById("N").innerHTML = "Escalada de montaña";
                         document.getElementById("Ñ").innerHTML = "90 repeticiones de cada pierna.";
                     
                     }
                     document.getElementById("terminar1").onclick = function() {
                         document.getElementById("terminar").style.display = "block";
                     }
                 }
    
    
    
    }
    //NADA EN FORMA
    if(nivel=="Principiante"){
        var imagen = document.getElementById("imagen");
       imagen.src = "src/entrenamientos/correr.gif";
        document.getElementById("A").innerHTML = "Trotar";
                document.getElementById("B").innerHTML = "30 segundos";
        document.getElementById("lunes").onclick = function() {
       document.getElementById("mostrar").style.display = "none";
       document.getElementById("imagenp").style.display = "none";
       document.getElementById("mostrar2").style.display = "block";
            var imagen2 = document.getElementById("imagen2");
            var imagen3 = document.getElementById("imagen3");
    //BOTON1
            document.getElementById("SIG1").onclick = function() {
             document.getElementById("0").style.display = "none";
             document.getElementById("1").style.display = "block";
                var imagen1 = document.getElementById("imagen1");
                imagen1.src = "src/entrenamientos/25.gif"; 
                document.getElementById("D").innerHTML = "Flexiones";
                document.getElementById("E").innerHTML = "3 series de 15 repeticiones";
            
            }
    //BOTON2
    document.getElementById("SIG2").onclick = function() {
             document.getElementById("1").style.display = "none";
             document.getElementById("2").style.display = "block";
                var imagen2 = document.getElementById("imagen2");
                imagen2.src = "src/entrenamientos/33.gif"; 
                document.getElementById("F").innerHTML = "Press de banca plano";
                document.getElementById("G").innerHTML = "3 series de 15 repeticiones";
            
            }
     //BOTON3
            document.getElementById("SIG3").onclick = function() {
             document.getElementById("2").style.display = "none";
             document.getElementById("3").style.display = "block";
                var imagen3 = document.getElementById("imagen3");
                imagen3.src = "src/entrenamientos/34.gif"; 
                document.getElementById("H").innerHTML = "Press de banca inclinado";
                document.getElementById("I").innerHTML = "3 series de 15 repeticiones";
            
            }
    //BOTON4
    document.getElementById("SIG4").onclick = function() {
             document.getElementById("3").style.display = "none";
             document.getElementById("4").style.display = "block";
                var imagen4 = document.getElementById("imagen4");
                imagen4.src = "src/entrenamientos/35.gif"; 
                document.getElementById("J").innerHTML = "Press de banca declinado";
                document.getElementById("K").innerHTML = "3 series de 15 repeticiones";
            
            }
        //BOTON5
    document.getElementById("SIG5").onclick = function() {
             document.getElementById("4").style.display = "none";
             document.getElementById("5").style.display = "block";
                var imagen5 = document.getElementById("imagen5");
                imagen5.src = "src/entrenamientos/36.gif"; 
                document.getElementById("L").innerHTML = "FONDOS";
                document.getElementById("M").innerHTML = "3 series de 15 repeticiones";
            
            }
            //BOTON6
    document.getElementById("SIG6").onclick = function() {
             document.getElementById("5").style.display = "none";
             document.getElementById("6").style.display = "block";
                var imagen6 = document.getElementById("imagen6");
                imagen6.src = "src/entrenamientos/18.gif"; 
                document.getElementById("N").innerHTML = "Twist ruso";
                document.getElementById("Ñ").innerHTML = "3 series de 15 repeticiones de cada lado";
            
            }
            document.getElementById("terminar1").onclick = function() {
                document.getElementById("terminar").style.display = "block";
            }
        }
    //MARTES
    document.getElementById("martes").onclick = function() {
        document.getElementById("mostrar").style.display = "none";
        document.getElementById("imagenp").style.display = "none";
        document.getElementById("mostrar2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             var imagen3 = document.getElementById("imagen3");
     //BOTON1
             document.getElementById("SIG1").onclick = function() {
              document.getElementById("0").style.display = "none";
              document.getElementById("1").style.display = "block";
                 var imagen1 = document.getElementById("imagen1");
                 imagen1.src = "src/entrenamientos/45.gif"; 
                 document.getElementById("D").innerHTML = "Curl de bíceps";
                 document.getElementById("E").innerHTML = "3 series de 15 repeticiones";
             
             }
     //BOTON2
     document.getElementById("SIG2").onclick = function() {
              document.getElementById("1").style.display = "none";
              document.getElementById("2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 imagen2.src = "src/entrenamientos/46.gif"; 
                 document.getElementById("F").innerHTML = "Estiramiento de tríceps con polea";
                 document.getElementById("G").innerHTML = "3 series de 15 repeticiones";
             
             }
      //BOTON3
             document.getElementById("SIG3").onclick = function() {
              document.getElementById("2").style.display = "none";
              document.getElementById("3").style.display = "block";
                 var imagen3 = document.getElementById("imagen3");
                 imagen3.src = "src/entrenamientos/47.gif"; 
                 document.getElementById("H").innerHTML = "Elevación de hombro";
                 document.getElementById("I").innerHTML = "3 series de 15 repeticiones";
             
             }
     //BOTON4
     document.getElementById("SIG4").onclick = function() {
              document.getElementById("3").style.display = "none";
              document.getElementById("4").style.display = "block";
                 var imagen4 = document.getElementById("imagen4");
                 imagen4.src = "src/entrenamientos/48.gif"; 
                 document.getElementById("J").innerHTML = "Elevación de hombros con mancuernas";
                 document.getElementById("K").innerHTML = "3 series de 15 repeticiones";
             
             }
         //BOTON5
     document.getElementById("SIG5").onclick = function() {
              document.getElementById("4").style.display = "none";
              document.getElementById("5").style.display = "block";
                 var imagen5 = document.getElementById("imagen5");
                 imagen5.src = "src/entrenamientos/50.gif"; 
                 document.getElementById("L").innerHTML = "Extensión de tríceps con mancuerna";
                 document.getElementById("M").innerHTML = "3 series de 15 repeticiones";
             
             }
             //BOTON6
     document.getElementById("SIG6").onclick = function() {
              document.getElementById("5").style.display = "none";
              document.getElementById("6").style.display = "block";
                 var imagen6 = document.getElementById("imagen6");
                 imagen6.src = "src/entrenamientos/52.gif"; 
                 document.getElementById("N").innerHTML = "Curl de bícep con barra";
                 document.getElementById("Ñ").innerHTML = "3 series de 15 repeticiones";
             
             }
             document.getElementById("terminar1").onclick = function() {
                 document.getElementById("terminar").style.display = "block";
             }
         }
    //MIERCOLES
    document.getElementById("miercoles").onclick = function() {
        document.getElementById("mostrar").style.display = "none";
        document.getElementById("imagenp").style.display = "none";
        document.getElementById("mostrar2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             var imagen3 = document.getElementById("imagen3");
     //BOTON1
             document.getElementById("SIG1").onclick = function() {
              document.getElementById("0").style.display = "none";
              document.getElementById("1").style.display = "block";
                 var imagen1 = document.getElementById("imagen1");
                 imagen1.src = "src/entrenamientos/62.gif"; 
                 document.getElementById("D").innerHTML = "Prensa de piernas";
                 document.getElementById("E").innerHTML = "3 series de 15 repeticiones";
             
             }
     //BOTON2
     document.getElementById("SIG2").onclick = function() {
              document.getElementById("1").style.display = "none";
              document.getElementById("2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 imagen2.src = "src/entrenamientos/63.gif"; 
                 document.getElementById("F").innerHTML = "Femoral";
                 document.getElementById("G").innerHTML = "3 series de 15 repeticiones";
             
             }
      //BOTON3
             document.getElementById("SIG3").onclick = function() {
              document.getElementById("2").style.display = "none";
              document.getElementById("3").style.display = "block";
                 var imagen3 = document.getElementById("imagen3");
                 imagen3.src = "src/entrenamientos/64.gif"; 
                 document.getElementById("H").innerHTML = "Curl de piernas acostado";
                 document.getElementById("I").innerHTML = "3 series de 15 repeticiones";
             
             }
     //BOTON4
     document.getElementById("SIG4").onclick = function() {
              document.getElementById("3").style.display = "none";
              document.getElementById("4").style.display = "block";
                 var imagen4 = document.getElementById("imagen4");
                 imagen4.src = "src/entrenamientos/65.gif"; 
                 document.getElementById("J").innerHTML = "Elevación de talón con barra";
                 document.getElementById("K").innerHTML = "3 series de 15 repeticiones";
             
             }
         //BOTON5
     document.getElementById("SIG5").onclick = function() {
              document.getElementById("4").style.display = "none";
              document.getElementById("5").style.display = "block";
                 var imagen5 = document.getElementById("imagen5");
                 imagen5.src = "src/entrenamientos/67.gif"; 
                 document.getElementById("L").innerHTML = "Sentadilla con peso";
                 document.getElementById("M").innerHTML = "3 series de 15 repeticiones";
             
             }
             //BOTON6
     document.getElementById("SIG6").onclick = function() {
              document.getElementById("5").style.display = "none";
              document.getElementById("6").style.display = "block";
                 var imagen6 = document.getElementById("imagen6");
                 imagen6.src = "src/entrenamientos/61.gif"; 
                 document.getElementById("N").innerHTML = "Cuadríceps";
                 document.getElementById("Ñ").innerHTML = "3 series de 15 repeticiones";
             
             }
             document.getElementById("terminar1").onclick = function() {
                 document.getElementById("terminar").style.display = "block";
             }
         }
    //JUEVES
    document.getElementById("jueves").onclick = function() {
        document.getElementById("mostrar").style.display = "none";
        document.getElementById("imagenp").style.display = "none";
        document.getElementById("mostrar2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             var imagen3 = document.getElementById("imagen3");
     //BOTON1
             document.getElementById("SIG1").onclick = function() {
              document.getElementById("0").style.display = "none";
              document.getElementById("1").style.display = "block";
                 var imagen1 = document.getElementById("imagen1");
                 imagen1.src = "src/entrenamientos/25.gif"; 
                 document.getElementById("D").innerHTML = "Flexiones";
                 document.getElementById("E").innerHTML = "3 series de 15 repeticiones";
             
             }
     //BOTON2
     document.getElementById("SIG2").onclick = function() {
              document.getElementById("1").style.display = "none";
              document.getElementById("2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 imagen2.src = "src/entrenamientos/33.gif"; 
                 document.getElementById("F").innerHTML = "Press de banca plano";
                 document.getElementById("G").innerHTML = "3 series de 15 repeticiones";
             
             }
      //BOTON3
             document.getElementById("SIG3").onclick = function() {
              document.getElementById("2").style.display = "none";
              document.getElementById("3").style.display = "block";
                 var imagen3 = document.getElementById("imagen3");
                 imagen3.src = "src/entrenamientos/34.gif"; 
                 document.getElementById("H").innerHTML = "Press de banca inclinado";
                 document.getElementById("I").innerHTML = "3 series de 15 repeticiones";
             
             }
     //BOTON4
     document.getElementById("SIG4").onclick = function() {
              document.getElementById("3").style.display = "none";
              document.getElementById("4").style.display = "block";
                 var imagen4 = document.getElementById("imagen4");
                 imagen4.src = "src/entrenamientos/35.gif"; 
                 document.getElementById("J").innerHTML = "Press de banca declinado";
                 document.getElementById("K").innerHTML = "3 series de 15 repeticiones";
             
             }
         //BOTON5
     document.getElementById("SIG5").onclick = function() {
              document.getElementById("4").style.display = "none";
              document.getElementById("5").style.display = "block";
                 var imagen5 = document.getElementById("imagen5");
                 imagen5.src = "src/entrenamientos/36.gif"; 
                 document.getElementById("L").innerHTML = "FONDOS";
                 document.getElementById("M").innerHTML = "3 series de 15 repeticiones";
             
             }
             //BOTON6
     document.getElementById("SIG6").onclick = function() {
              document.getElementById("5").style.display = "none";
              document.getElementById("6").style.display = "block";
                 var imagen6 = document.getElementById("imagen6");
                 imagen6.src = "src/entrenamientos/18.gif"; 
                 document.getElementById("N").innerHTML = "Twist ruso";
                 document.getElementById("Ñ").innerHTML = "3 series de 15 repeticiones de cada lado";
             
             }
             document.getElementById("terminar1").onclick = function() {
                 document.getElementById("terminar").style.display = "block";
             }
         }
         //VIERNES
         document.getElementById("viernes").onclick = function() {
            document.getElementById("mostrar").style.display = "none";
            document.getElementById("imagenp").style.display = "none";
            document.getElementById("mostrar2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 var imagen3 = document.getElementById("imagen3");
         //BOTON1
                 document.getElementById("SIG1").onclick = function() {
                  document.getElementById("0").style.display = "none";
                  document.getElementById("1").style.display = "block";
                     var imagen1 = document.getElementById("imagen1");
                     imagen1.src = "src/entrenamientos/45.gif"; 
                     document.getElementById("D").innerHTML = "Curl de bíceps";
                     document.getElementById("E").innerHTML = "3 series de 15 repeticiones";
                 
                 }
         //BOTON2
         document.getElementById("SIG2").onclick = function() {
                  document.getElementById("1").style.display = "none";
                  document.getElementById("2").style.display = "block";
                     var imagen2 = document.getElementById("imagen2");
                     imagen2.src = "src/entrenamientos/46.gif"; 
                     document.getElementById("F").innerHTML = "Estiramiento de tríceps con polea";
                     document.getElementById("G").innerHTML = "3 series de 15 repeticiones";
                 
                 }
          //BOTON3
                 document.getElementById("SIG3").onclick = function() {
                  document.getElementById("2").style.display = "none";
                  document.getElementById("3").style.display = "block";
                     var imagen3 = document.getElementById("imagen3");
                     imagen3.src = "src/entrenamientos/47.gif"; 
                     document.getElementById("H").innerHTML = "Elevación de hombro";
                     document.getElementById("I").innerHTML = "3 series de 15 repeticiones";
                 
                 }
         //BOTON4
         document.getElementById("SIG4").onclick = function() {
                  document.getElementById("3").style.display = "none";
                  document.getElementById("4").style.display = "block";
                     var imagen4 = document.getElementById("imagen4");
                     imagen4.src = "src/entrenamientos/48.gif"; 
                     document.getElementById("J").innerHTML = "Elevación de hombros con mancuernas";
                     document.getElementById("K").innerHTML = "3 series de 15 repeticiones";
                 
                 }
             //BOTON5
         document.getElementById("SIG5").onclick = function() {
                  document.getElementById("4").style.display = "none";
                  document.getElementById("5").style.display = "block";
                     var imagen5 = document.getElementById("imagen5");
                     imagen5.src = "src/entrenamientos/50.gif"; 
                     document.getElementById("L").innerHTML = "Extensión de tríceps con mancuerna";
                     document.getElementById("M").innerHTML = "3 series de 15 repeticiones";
                 
                 }
                 //BOTON6
         document.getElementById("SIG6").onclick = function() {
                  document.getElementById("5").style.display = "none";
                  document.getElementById("6").style.display = "block";
                     var imagen6 = document.getElementById("imagen6");
                     imagen6.src = "src/entrenamientos/52.gif"; 
                     document.getElementById("N").innerHTML = "Curl de bícep con barra";
                     document.getElementById("Ñ").innerHTML = "3 series de 15 repeticiones";
                 
                 }
                 document.getElementById("terminar1").onclick = function() {
                     document.getElementById("terminar").style.display = "block";
                 }
             }
             //SABADO
             document.getElementById("sabado").onclick = function() {
                document.getElementById("mostrar").style.display = "none";
                document.getElementById("imagenp").style.display = "none";
                document.getElementById("mostrar2").style.display = "block";
                     var imagen2 = document.getElementById("imagen2");
                     var imagen3 = document.getElementById("imagen3");
             //BOTON1
                     document.getElementById("SIG1").onclick = function() {
                      document.getElementById("0").style.display = "none";
                      document.getElementById("1").style.display = "block";
                         var imagen1 = document.getElementById("imagen1");
                         imagen1.src = "src/entrenamientos/69.gif"; 
                         document.getElementById("D").innerHTML = "Elevación de piernas para glúteo";
                         document.getElementById("E").innerHTML = "3 series de 15 repeticiones";
                     
                     }
             //BOTON2
             document.getElementById("SIG2").onclick = function() {
                      document.getElementById("1").style.display = "none";
                      document.getElementById("2").style.display = "block";
                         var imagen2 = document.getElementById("imagen2");
                         imagen2.src = "src/entrenamientos/73.gif"; 
                         document.getElementById("F").innerHTML = "Zancada con apoyo de silla";
                         document.getElementById("G").innerHTML = "3 series de 15 repeticiones";
                     
                     }
              //BOTON3
                     document.getElementById("SIG3").onclick = function() {
                      document.getElementById("2").style.display = "none";
                      document.getElementById("3").style.display = "block";
                         var imagen3 = document.getElementById("imagen3");
                         imagen3.src = "src/entrenamientos/74.gif"; 
                         document.getElementById("H").innerHTML = "Extensión de glúteo en una pierna con silla";
                         document.getElementById("I").innerHTML = "3 series de 15 repeticiones";
                     
                     }
             //BOTON4
             document.getElementById("SIG4").onclick = function() {
                      document.getElementById("3").style.display = "none";
                      document.getElementById("4").style.display = "block";
                         var imagen4 = document.getElementById("imagen4");
                         imagen4.src = "src/entrenamientos/77.gif"; 
                         document.getElementById("J").innerHTML = "Elevación de glúteo con banda elástica";
                         document.getElementById("K").innerHTML = "3 series de 15 repeticiones";
                     
                     }
                 //BOTON5
             document.getElementById("SIG5").onclick = function() {
                      document.getElementById("4").style.display = "none";
                      document.getElementById("5").style.display = "block";
                         var imagen5 = document.getElementById("imagen5");
                         imagen5.src = "src/entrenamientos/11.gif"; 
                         document.getElementById("L").innerHTML = "Flexión lateral para oblicuos";
                         document.getElementById("M").innerHTML = "3 series de 15 repeticiones (lado derecho y lado izquierdo)";
                     
                     }
                     //BOTON6
             document.getElementById("SIG6").onclick = function() {
                      document.getElementById("5").style.display = "none";
                      document.getElementById("6").style.display = "block";
                         var imagen6 = document.getElementById("imagen6");
                         imagen6.src = "src/entrenamientos/12.gif"; 
                         document.getElementById("N").innerHTML = "Escalada de montaña";
                         document.getElementById("Ñ").innerHTML = "40 repeticiones de cada pierna.";
                     
                     }
                     document.getElementById("terminar1").onclick = function() {
                         document.getElementById("terminar").style.display = "block";
                     }
                 }
    
    
    
    }
    //EXPERIENCIA
    if(nivel=="Atleta intermedio"){
        var imagen = document.getElementById("imagen");
       imagen.src = "src/entrenamientos/correr.gif";
        document.getElementById("A").innerHTML = "Trotar";
                document.getElementById("B").innerHTML = "60 segundos";
        document.getElementById("lunes").onclick = function() {
       document.getElementById("mostrar").style.display = "none";
       document.getElementById("imagenp").style.display = "none";
       document.getElementById("mostrar2").style.display = "block";
            var imagen2 = document.getElementById("imagen2");
            var imagen3 = document.getElementById("imagen3");
    //BOTON1
            document.getElementById("SIG1").onclick = function() {
             document.getElementById("0").style.display = "none";
             document.getElementById("1").style.display = "block";
                var imagen1 = document.getElementById("imagen1");
                imagen1.src = "src/entrenamientos/25.gif"; 
                document.getElementById("D").innerHTML = "Flexiones";
                document.getElementById("E").innerHTML = "4 series de 15 repeticiones";
            
            }
    //BOTON2
    document.getElementById("SIG2").onclick = function() {
             document.getElementById("1").style.display = "none";
             document.getElementById("2").style.display = "block";
                var imagen2 = document.getElementById("imagen2");
                imagen2.src = "src/entrenamientos/33.gif"; 
                document.getElementById("F").innerHTML = "Press de banca plano";
                document.getElementById("G").innerHTML = "4 series de 15 repeticiones";
            
            }
     //BOTON3
            document.getElementById("SIG3").onclick = function() {
             document.getElementById("2").style.display = "none";
             document.getElementById("3").style.display = "block";
                var imagen3 = document.getElementById("imagen3");
                imagen3.src = "src/entrenamientos/34.gif"; 
                document.getElementById("H").innerHTML = "Press de banca inclinado";
                document.getElementById("I").innerHTML = "4 series de 15 repeticiones";
            
            }
    //BOTON4
    document.getElementById("SIG4").onclick = function() {
             document.getElementById("3").style.display = "none";
             document.getElementById("4").style.display = "block";
                var imagen4 = document.getElementById("imagen4");
                imagen4.src = "src/entrenamientos/35.gif"; 
                document.getElementById("J").innerHTML = "Press de banca declinado";
                document.getElementById("K").innerHTML = "4 series de 15 repeticiones";
            
            }
        //BOTON5
    document.getElementById("SIG5").onclick = function() {
             document.getElementById("4").style.display = "none";
             document.getElementById("5").style.display = "block";
                var imagen5 = document.getElementById("imagen5");
                imagen5.src = "src/entrenamientos/36.gif"; 
                document.getElementById("L").innerHTML = "FONDOS";
                document.getElementById("M").innerHTML = "4 series de 15 repeticiones";
            
            }
            //BOTON6
    document.getElementById("SIG6").onclick = function() {
             document.getElementById("5").style.display = "none";
             document.getElementById("6").style.display = "block";
                var imagen6 = document.getElementById("imagen6");
                imagen6.src = "src/entrenamientos/18.gif"; 
                document.getElementById("N").innerHTML = "Twist ruso";
                document.getElementById("Ñ").innerHTML = "4 series de 15 repeticiones de cada lado";
            
            }
            document.getElementById("terminar1").onclick = function() {
                document.getElementById("terminar").style.display = "block";
            }
        }
    //MARTES
    document.getElementById("martes").onclick = function() {
        document.getElementById("mostrar").style.display = "none";
        document.getElementById("imagenp").style.display = "none";
        document.getElementById("mostrar2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             var imagen3 = document.getElementById("imagen3");
     //BOTON1
             document.getElementById("SIG1").onclick = function() {
              document.getElementById("0").style.display = "none";
              document.getElementById("1").style.display = "block";
                 var imagen1 = document.getElementById("imagen1");
                 imagen1.src = "src/entrenamientos/45.gif"; 
                 document.getElementById("D").innerHTML = "Curl de bíceps";
                 document.getElementById("E").innerHTML = "4 series de 15 repeticiones";
             
             }
     //BOTON2
     document.getElementById("SIG2").onclick = function() {
              document.getElementById("1").style.display = "none";
              document.getElementById("2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 imagen2.src = "src/entrenamientos/46.gif"; 
                 document.getElementById("F").innerHTML = "Estiramiento de tríceps con polea";
                 document.getElementById("G").innerHTML = "4 series de 15 repeticiones";
             
             }
      //BOTON3
             document.getElementById("SIG3").onclick = function() {
              document.getElementById("2").style.display = "none";
              document.getElementById("3").style.display = "block";
                 var imagen3 = document.getElementById("imagen3");
                 imagen3.src = "src/entrenamientos/47.gif"; 
                 document.getElementById("H").innerHTML = "Elevación de hombro";
                 document.getElementById("I").innerHTML = "4 series de 15 repeticiones";
             
             }
     //BOTON4
     document.getElementById("SIG4").onclick = function() {
              document.getElementById("3").style.display = "none";
              document.getElementById("4").style.display = "block";
                 var imagen4 = document.getElementById("imagen4");
                 imagen4.src = "src/entrenamientos/48.gif"; 
                 document.getElementById("J").innerHTML = "Elevación de hombros con mancuernas";
                 document.getElementById("K").innerHTML = "4 series de 15 repeticiones";
             
             }
         //BOTON5
     document.getElementById("SIG5").onclick = function() {
              document.getElementById("4").style.display = "none";
              document.getElementById("5").style.display = "block";
                 var imagen5 = document.getElementById("imagen5");
                 imagen5.src = "src/entrenamientos/50.gif"; 
                 document.getElementById("L").innerHTML = "Extensión de tríceps con mancuerna";
                 document.getElementById("M").innerHTML = "4 series de 15 repeticiones";
             
             }
             //BOTON6
     document.getElementById("SIG6").onclick = function() {
              document.getElementById("5").style.display = "none";
              document.getElementById("6").style.display = "block";
                 var imagen6 = document.getElementById("imagen6");
                 imagen6.src = "src/entrenamientos/52.gif"; 
                 document.getElementById("N").innerHTML = "Curl de bícep con barra";
                 document.getElementById("Ñ").innerHTML = "4 series de 15 repeticiones";
             
             }
             document.getElementById("terminar1").onclick = function() {
                 document.getElementById("terminar").style.display = "block";
             }
         }
    //MIERCOLES
    document.getElementById("miercoles").onclick = function() {
        document.getElementById("mostrar").style.display = "none";
        document.getElementById("imagenp").style.display = "none";
        document.getElementById("mostrar2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             var imagen3 = document.getElementById("imagen3");
     //BOTON1
             document.getElementById("SIG1").onclick = function() {
              document.getElementById("0").style.display = "none";
              document.getElementById("1").style.display = "block";
                 var imagen1 = document.getElementById("imagen1");
                 imagen1.src = "src/entrenamientos/62.gif"; 
                 document.getElementById("D").innerHTML = "Prensa de piernas";
                 document.getElementById("E").innerHTML = "4 series de 15 repeticiones";
             
             }
     //BOTON2
     document.getElementById("SIG2").onclick = function() {
              document.getElementById("1").style.display = "none";
              document.getElementById("2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 imagen2.src = "src/entrenamientos/63.gif"; 
                 document.getElementById("F").innerHTML = "Femoral";
                 document.getElementById("G").innerHTML = "4 series de 15 repeticiones";
             
             }
      //BOTON3
             document.getElementById("SIG3").onclick = function() {
              document.getElementById("2").style.display = "none";
              document.getElementById("3").style.display = "block";
                 var imagen3 = document.getElementById("imagen3");
                 imagen3.src = "src/entrenamientos/64.gif"; 
                 document.getElementById("H").innerHTML = "Curl de piernas acostado";
                 document.getElementById("I").innerHTML = "4 series de 15 repeticiones";
             
             }
     //BOTON4
     document.getElementById("SIG4").onclick = function() {
              document.getElementById("3").style.display = "none";
              document.getElementById("4").style.display = "block";
                 var imagen4 = document.getElementById("imagen4");
                 imagen4.src = "src/entrenamientos/65.gif"; 
                 document.getElementById("J").innerHTML = "Elevación de talón con barra";
                 document.getElementById("K").innerHTML = "4 series de 15 repeticiones";
             
             }
         //BOTON5
     document.getElementById("SIG5").onclick = function() {
              document.getElementById("4").style.display = "none";
              document.getElementById("5").style.display = "block";
                 var imagen5 = document.getElementById("imagen5");
                 imagen5.src = "src/entrenamientos/67.gif"; 
                 document.getElementById("L").innerHTML = "Sentadilla con peso";
                 document.getElementById("M").innerHTML = "4 series de 15 repeticiones";
             
             }
             //BOTON6
     document.getElementById("SIG6").onclick = function() {
              document.getElementById("5").style.display = "none";
              document.getElementById("6").style.display = "block";
                 var imagen6 = document.getElementById("imagen6");
                 imagen6.src = "src/entrenamientos/61.gif"; 
                 document.getElementById("N").innerHTML = "Cuadríceps";
                 document.getElementById("Ñ").innerHTML = "4 series de 15 repeticiones";
             
             }
             document.getElementById("terminar1").onclick = function() {
                 document.getElementById("terminar").style.display = "block";
             }
         }
    //JUEVES
    document.getElementById("jueves").onclick = function() {
        document.getElementById("mostrar").style.display = "none";
        document.getElementById("imagenp").style.display = "none";
        document.getElementById("mostrar2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             var imagen3 = document.getElementById("imagen3");
     //BOTON1
             document.getElementById("SIG1").onclick = function() {
              document.getElementById("0").style.display = "none";
              document.getElementById("1").style.display = "block";
                 var imagen1 = document.getElementById("imagen1");
                 imagen1.src = "src/entrenamientos/25.gif"; 
                 document.getElementById("D").innerHTML = "Flexiones";
                 document.getElementById("E").innerHTML = "4 series de 15 repeticiones";
             
             }
     //BOTON2
     document.getElementById("SIG2").onclick = function() {
              document.getElementById("1").style.display = "none";
              document.getElementById("2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 imagen2.src = "src/entrenamientos/33.gif"; 
                 document.getElementById("F").innerHTML = "Press de banca plano";
                 document.getElementById("G").innerHTML = "4 series de 15 repeticiones";
             
             }
      //BOTON3
             document.getElementById("SIG3").onclick = function() {
              document.getElementById("2").style.display = "none";
              document.getElementById("3").style.display = "block";
                 var imagen3 = document.getElementById("imagen3");
                 imagen3.src = "src/entrenamientos/34.gif"; 
                 document.getElementById("H").innerHTML = "Press de banca inclinado";
                 document.getElementById("I").innerHTML = "4 series de 15 repeticiones";
             
             }
     //BOTON4
     document.getElementById("SIG4").onclick = function() {
              document.getElementById("3").style.display = "none";
              document.getElementById("4").style.display = "block";
                 var imagen4 = document.getElementById("imagen4");
                 imagen4.src = "src/entrenamientos/35.gif"; 
                 document.getElementById("J").innerHTML = "Press de banca declinado";
                 document.getElementById("K").innerHTML = "4 series de 15 repeticiones";
             
             }
         //BOTON5
     document.getElementById("SIG5").onclick = function() {
              document.getElementById("4").style.display = "none";
              document.getElementById("5").style.display = "block";
                 var imagen5 = document.getElementById("imagen5");
                 imagen5.src = "src/entrenamientos/36.gif"; 
                 document.getElementById("L").innerHTML = "FONDOS";
                 document.getElementById("M").innerHTML = "4 series de 15 repeticiones";
             
             }
             //BOTON6
     document.getElementById("SIG6").onclick = function() {
              document.getElementById("5").style.display = "none";
              document.getElementById("6").style.display = "block";
                 var imagen6 = document.getElementById("imagen6");
                 imagen6.src = "src/entrenamientos/18.gif"; 
                 document.getElementById("N").innerHTML = "Twist ruso";
                 document.getElementById("Ñ").innerHTML = "4 series de 15 repeticiones de cada lado";
             
             }
             document.getElementById("terminar1").onclick = function() {
                 document.getElementById("terminar").style.display = "block";
             }
         }
         //VIERNES
         document.getElementById("viernes").onclick = function() {
            document.getElementById("mostrar").style.display = "none";
            document.getElementById("imagenp").style.display = "none";
            document.getElementById("mostrar2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 var imagen3 = document.getElementById("imagen3");
         //BOTON1
                 document.getElementById("SIG1").onclick = function() {
                  document.getElementById("0").style.display = "none";
                  document.getElementById("1").style.display = "block";
                     var imagen1 = document.getElementById("imagen1");
                     imagen1.src = "src/entrenamientos/45.gif"; 
                     document.getElementById("D").innerHTML = "Curl de bíceps";
                     document.getElementById("E").innerHTML = "4 series de 15 repeticiones";
                 
                 }
         //BOTON2
         document.getElementById("SIG2").onclick = function() {
                  document.getElementById("1").style.display = "none";
                  document.getElementById("2").style.display = "block";
                     var imagen2 = document.getElementById("imagen2");
                     imagen2.src = "src/entrenamientos/46.gif"; 
                     document.getElementById("F").innerHTML = "Estiramiento de tríceps con polea";
                     document.getElementById("G").innerHTML = "4 series de 15 repeticiones";
                 
                 }
          //BOTON3
                 document.getElementById("SIG3").onclick = function() {
                  document.getElementById("2").style.display = "none";
                  document.getElementById("3").style.display = "block";
                     var imagen3 = document.getElementById("imagen3");
                     imagen3.src = "src/entrenamientos/47.gif"; 
                     document.getElementById("H").innerHTML = "Elevación de hombro";
                     document.getElementById("I").innerHTML = "4 series de 15 repeticiones";
                 
                 }
         //BOTON4
         document.getElementById("SIG4").onclick = function() {
                  document.getElementById("3").style.display = "none";
                  document.getElementById("4").style.display = "block";
                     var imagen4 = document.getElementById("imagen4");
                     imagen4.src = "src/entrenamientos/48.gif"; 
                     document.getElementById("J").innerHTML = "Elevación de hombros con mancuernas";
                     document.getElementById("K").innerHTML = "4 series de 15 repeticiones";
                 
                 }
             //BOTON5
         document.getElementById("SIG5").onclick = function() {
                  document.getElementById("4").style.display = "none";
                  document.getElementById("5").style.display = "block";
                     var imagen5 = document.getElementById("imagen5");
                     imagen5.src = "src/entrenamientos/50.gif"; 
                     document.getElementById("L").innerHTML = "Extensión de tríceps con mancuerna";
                     document.getElementById("M").innerHTML = "4 series de 15 repeticiones";
                 
                 }
                 //BOTON6
         document.getElementById("SIG6").onclick = function() {
                  document.getElementById("5").style.display = "none";
                  document.getElementById("6").style.display = "block";
                     var imagen6 = document.getElementById("imagen6");
                     imagen6.src = "src/entrenamientos/52.gif"; 
                     document.getElementById("N").innerHTML = "Curl de bícep con barra";
                     document.getElementById("Ñ").innerHTML = "4 series de 15 repeticiones";
                 
                 }
                 document.getElementById("terminar1").onclick = function() {
                     document.getElementById("terminar").style.display = "block";
                 }
             }
             //SABADO
             document.getElementById("sabado").onclick = function() {
                document.getElementById("mostrar").style.display = "none";
                document.getElementById("imagenp").style.display = "none";
                document.getElementById("mostrar2").style.display = "block";
                     var imagen2 = document.getElementById("imagen2");
                     var imagen3 = document.getElementById("imagen3");
             //BOTON1
                     document.getElementById("SIG1").onclick = function() {
                      document.getElementById("0").style.display = "none";
                      document.getElementById("1").style.display = "block";
                         var imagen1 = document.getElementById("imagen1");
                         imagen1.src = "src/entrenamientos/69.gif"; 
                         document.getElementById("D").innerHTML = "Elevación de piernas para glúteo";
                         document.getElementById("E").innerHTML = "4 series de 15 repeticiones";
                     
                     }
             //BOTON2
             document.getElementById("SIG2").onclick = function() {
                      document.getElementById("1").style.display = "none";
                      document.getElementById("2").style.display = "block";
                         var imagen2 = document.getElementById("imagen2");
                         imagen2.src = "src/entrenamientos/73.gif"; 
                         document.getElementById("F").innerHTML = "Zancada con apoyo de silla";
                         document.getElementById("G").innerHTML = "4 series de 15 repeticiones";
                     
                     }
              //BOTON3
                     document.getElementById("SIG3").onclick = function() {
                      document.getElementById("2").style.display = "none";
                      document.getElementById("3").style.display = "block";
                         var imagen3 = document.getElementById("imagen3");
                         imagen3.src = "src/entrenamientos/74.gif"; 
                         document.getElementById("H").innerHTML = "Extensión de glúteo en una pierna con silla";
                         document.getElementById("I").innerHTML = "4 series de 15 repeticiones";
                     
                     }
             //BOTON4
             document.getElementById("SIG4").onclick = function() {
                      document.getElementById("3").style.display = "none";
                      document.getElementById("4").style.display = "block";
                         var imagen4 = document.getElementById("imagen4");
                         imagen4.src = "src/entrenamientos/77.gif"; 
                         document.getElementById("J").innerHTML = "Elevación de glúteo con banda elástica";
                         document.getElementById("K").innerHTML = "4 series de 15 repeticiones";
                     
                     }
                 //BOTON5
             document.getElementById("SIG5").onclick = function() {
                      document.getElementById("4").style.display = "none";
                      document.getElementById("5").style.display = "block";
                         var imagen5 = document.getElementById("imagen5");
                         imagen5.src = "src/entrenamientos/11.gif"; 
                         document.getElementById("L").innerHTML = "Flexión lateral para oblicuos";
                         document.getElementById("M").innerHTML = "4 series de 15 repeticiones (lado derecho y lado izquierdo)";
                     
                     }
                     //BOTON6
             document.getElementById("SIG6").onclick = function() {
                      document.getElementById("5").style.display = "none";
                      document.getElementById("6").style.display = "block";
                         var imagen6 = document.getElementById("imagen6");
                         imagen6.src = "src/entrenamientos/12.gif"; 
                         document.getElementById("N").innerHTML = "Escalada de montaña";
                         document.getElementById("Ñ").innerHTML = "50 repeticiones de cada pierna.";
                     
                     }
                     document.getElementById("terminar1").onclick = function() {
                         document.getElementById("terminar").style.display = "block";
                     }
                 }
    
    
    
    }
    
}
//jaus

if(modalidad=="CASA"){
    var nivel;
nivel=document.getElementById("nivel").value;

    document.getElementById("desaparecer").style.display = "block";
    document.getElementById("0").style.display = "block";
    document.getElementById("elselect").style.display = "none";
    document.getElementById("botonx").style.display = "none";
    document.getElementById("elselect2").style.display = "none";

if(nivel=="Atleta avanzado"){
    var imagen = document.getElementById("imagen");
   imagen.src = "src/entrenamientos/tijera.gif";
    document.getElementById("A").innerHTML = "Saltos de tijera";
            document.getElementById("B").innerHTML = "180 segundos";
    document.getElementById("lunes").onclick = function() {
   document.getElementById("mostrar").style.display = "none";
   document.getElementById("imagenp").style.display = "none";
   document.getElementById("mostrar2").style.display = "block";
        var imagen2 = document.getElementById("imagen2");
        var imagen3 = document.getElementById("imagen3");
//BOTON1
        document.getElementById("SIG1").onclick = function() {
         document.getElementById("0").style.display = "none";
         document.getElementById("1").style.display = "block";
            var imagen1 = document.getElementById("imagen1");
            imagen1.src = "src/entrenamientos/25.gif"; 
            document.getElementById("D").innerHTML = "Flexiones";
            document.getElementById("E").innerHTML = "6 series de 15 repeticiones";
        
        }
//BOTON2
document.getElementById("SIG2").onclick = function() {
         document.getElementById("1").style.display = "none";
         document.getElementById("2").style.display = "block";
            var imagen2 = document.getElementById("imagen2");
            imagen2.src = "src/entrenamientos/burpees.gif"; 
            document.getElementById("F").innerHTML = "Burpees";
            document.getElementById("G").innerHTML = "6 series de 15 repeticiones";
        
        }
 //BOTON3
        document.getElementById("SIG3").onclick = function() {
         document.getElementById("2").style.display = "none";
         document.getElementById("3").style.display = "block";
            var imagen3 = document.getElementById("imagen3");
            imagen3.src = "src/entrenamientos/28.gif"; 
            document.getElementById("H").innerHTML = "Flexión en diamante";
            document.getElementById("I").innerHTML = "6 series de 15 repeticiones";
        
        }
//BOTON4
document.getElementById("SIG4").onclick = function() {
         document.getElementById("3").style.display = "none";
         document.getElementById("4").style.display = "block";
            var imagen4 = document.getElementById("imagen4");
            imagen4.src = "src/entrenamientos/27.gif"; 
            document.getElementById("J").innerHTML = "Flexión militar";
            document.getElementById("K").innerHTML = "6 series de 15 repeticiones";
        
        }
    //BOTON5
document.getElementById("SIG5").onclick = function() {
         document.getElementById("4").style.display = "none";
         document.getElementById("5").style.display = "block";
            var imagen5 = document.getElementById("imagen5");
            imagen5.src = "src/entrenamientos/29.gif"; 
            document.getElementById("L").innerHTML = "Flexión abierta";
            document.getElementById("M").innerHTML = "6 series de 15 repeticiones";
        
        }
        //BOTON6
document.getElementById("SIG6").onclick = function() {
         document.getElementById("5").style.display = "none";
         document.getElementById("6").style.display = "block";
            var imagen6 = document.getElementById("imagen6");
            imagen6.src = "src/entrenamientos/31.gif"; 
            document.getElementById("N").innerHTML = "Flexión con apoyo de base";
            document.getElementById("Ñ").innerHTML = "6 series de 15 repeticiones";
        
        }
        document.getElementById("terminar1").onclick = function() {
            document.getElementById("terminar").style.display = "block";
        }
    }
//MARTES
document.getElementById("martes").onclick = function() {
    document.getElementById("mostrar").style.display = "none";
    document.getElementById("imagenp").style.display = "none";
    document.getElementById("mostrar2").style.display = "block";
         var imagen2 = document.getElementById("imagen2");
         var imagen3 = document.getElementById("imagen3");
 //BOTON1
         document.getElementById("SIG1").onclick = function() {
          document.getElementById("0").style.display = "none";
          document.getElementById("1").style.display = "block";
             var imagen1 = document.getElementById("imagen1");
             imagen1.src = "src/entrenamientos/triceps.gif"; 
             document.getElementById("D").innerHTML = "Tríceps en suelo o silla";
             document.getElementById("E").innerHTML = "6 series de 15 repeticiones";
         
         }
 //BOTON2
 document.getElementById("SIG2").onclick = function() {
          document.getElementById("1").style.display = "none";
          document.getElementById("2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             imagen2.src = "src/entrenamientos/41.gif"; 
             document.getElementById("F").innerHTML = "Flexiones de tríceps";
             document.getElementById("G").innerHTML = "6 series de 15 repeticiones";
         
         }
  //BOTON3
         document.getElementById("SIG3").onclick = function() {
          document.getElementById("2").style.display = "none";
          document.getElementById("3").style.display = "block";
             var imagen3 = document.getElementById("imagen3");
             imagen3.src = "src/entrenamientos/31.gif"; 
             document.getElementById("H").innerHTML = "Flexión con apoyo de base";
             document.getElementById("I").innerHTML = "6 series de 15 repeticiones";
         
         }
 //BOTON4
 document.getElementById("SIG4").onclick = function() {
          document.getElementById("3").style.display = "none";
          document.getElementById("4").style.display = "block";
             var imagen4 = document.getElementById("imagen4");
             imagen4.src = "src/entrenamientos/27.gif"; 
             document.getElementById("J").innerHTML = "Flexión militar";
             document.getElementById("K").innerHTML = "6 series de 15 repeticiones";
         
         }
     //BOTON5
 document.getElementById("SIG5").onclick = function() {
          document.getElementById("4").style.display = "none";
          document.getElementById("5").style.display = "block";
             var imagen5 = document.getElementById("imagen5");
             imagen5.src = "src/entrenamientos/30.gif"; 
             document.getElementById("L").innerHTML = "Flexión cerrada";
             document.getElementById("M").innerHTML = "6 series de 15 repeticiones";
         
         }
         //BOTON6
 document.getElementById("SIG6").onclick = function() {
          document.getElementById("5").style.display = "none";
          document.getElementById("6").style.display = "block";
             var imagen6 = document.getElementById("imagen6");
             imagen6.src = "src/entrenamientos/44.gif"; 
             document.getElementById("N").innerHTML = "Gancho lateral";
             document.getElementById("Ñ").innerHTML = "6 series de 15 repeticiones de cada lado";
         
         }
         document.getElementById("terminar1").onclick = function() {
             document.getElementById("terminar").style.display = "block";
         }
     }
//MIERCOLES
document.getElementById("miercoles").onclick = function() {
    document.getElementById("mostrar").style.display = "none";
    document.getElementById("imagenp").style.display = "none";
    document.getElementById("mostrar2").style.display = "block";
         var imagen2 = document.getElementById("imagen2");
         var imagen3 = document.getElementById("imagen3");
 //BOTON1
         document.getElementById("SIG1").onclick = function() {
          document.getElementById("0").style.display = "none";
          document.getElementById("1").style.display = "block";
             var imagen1 = document.getElementById("imagen1");
             imagen1.src = "src/entrenamientos/53.gif"; 
             document.getElementById("D").innerHTML = "Zancadas";
             document.getElementById("E").innerHTML = "6 series de 15 repeticiones de cada lado";
         
         }
 //BOTON2
 document.getElementById("SIG2").onclick = function() {
          document.getElementById("1").style.display = "none";
          document.getElementById("2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             imagen2.src = "src/entrenamientos/54.gif"; 
             document.getElementById("F").innerHTML = "Elevación de piernas en base";
             document.getElementById("G").innerHTML = "6 series de 15 repeticiones";
         
         }
  //BOTON3
         document.getElementById("SIG3").onclick = function() {
          document.getElementById("2").style.display = "none";
          document.getElementById("3").style.display = "block";
             var imagen3 = document.getElementById("imagen3");
             imagen3.src = "src/entrenamientos/57.gif"; 
             document.getElementById("H").innerHTML = "Sentadilla con salto";
             document.getElementById("I").innerHTML = "6 series de 15 repeticiones";
         
         }
 //BOTON4
 document.getElementById("SIG4").onclick = function() {
          document.getElementById("3").style.display = "none";
          document.getElementById("4").style.display = "block";
             var imagen4 = document.getElementById("imagen4");
             imagen4.src = "src/entrenamientos/59.gif"; 
             document.getElementById("J").innerHTML = "Pilates";
             document.getElementById("K").innerHTML = "6 series de 15 repeticiones";
         
         }
     //BOTON5
 document.getElementById("SIG5").onclick = function() {
          document.getElementById("4").style.display = "none";
          document.getElementById("5").style.display = "block";
             var imagen5 = document.getElementById("imagen5");
             imagen5.src = "src/entrenamientos/60.gif"; 
             document.getElementById("L").innerHTML = "Sentadilla";
             document.getElementById("M").innerHTML = "6 series de 15 repeticiones";
         
         }
         //BOTON6
 document.getElementById("SIG6").onclick = function() {
          document.getElementById("5").style.display = "none";
          document.getElementById("6").style.display = "block";
             var imagen6 = document.getElementById("imagen6");
             imagen6.src = "src/entrenamientos/56.gif"; 
             document.getElementById("N").innerHTML = "Aleteos de pierna";
             document.getElementById("Ñ").innerHTML = "6 series de 15 repeticiones";
         
         }
         document.getElementById("terminar1").onclick = function() {
             document.getElementById("terminar").style.display = "block";
         }
     }
//JUEVES
document.getElementById("jueves").onclick = function() {
    document.getElementById("mostrar").style.display = "none";
    document.getElementById("imagenp").style.display = "none";
    document.getElementById("mostrar2").style.display = "block";
         var imagen2 = document.getElementById("imagen2");
         var imagen3 = document.getElementById("imagen3");
 //BOTON1
         document.getElementById("SIG1").onclick = function() {
          document.getElementById("0").style.display = "none";
          document.getElementById("1").style.display = "block";
             var imagen1 = document.getElementById("imagen1");
             imagen1.src = "src/entrenamientos/25.gif"; 
             document.getElementById("D").innerHTML = "Flexiones";
             document.getElementById("E").innerHTML = "6 series de 15 repeticiones";
         
         }
 //BOTON2
 document.getElementById("SIG2").onclick = function() {
          document.getElementById("1").style.display = "none";
          document.getElementById("2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             imagen2.src = "src/entrenamientos/burpees.gif"; 
             document.getElementById("F").innerHTML = "Burpees";
             document.getElementById("G").innerHTML = "6 series de 15 repeticiones";
         
         }
  //BOTON3
         document.getElementById("SIG3").onclick = function() {
          document.getElementById("2").style.display = "none";
          document.getElementById("3").style.display = "block";
             var imagen3 = document.getElementById("imagen3");
             imagen3.src = "src/entrenamientos/28.gif"; 
             document.getElementById("H").innerHTML = "Flexión en diamante";
             document.getElementById("I").innerHTML = "6 series de 15 repeticiones";
         
         }
 //BOTON4
 document.getElementById("SIG4").onclick = function() {
          document.getElementById("3").style.display = "none";
          document.getElementById("4").style.display = "block";
             var imagen4 = document.getElementById("imagen4");
             imagen4.src = "src/entrenamientos/27.gif"; 
             document.getElementById("J").innerHTML = "Flexión militar";
             document.getElementById("K").innerHTML = "6 series de 15 repeticiones";
         
         }
     //BOTON5
 document.getElementById("SIG5").onclick = function() {
          document.getElementById("4").style.display = "none";
          document.getElementById("5").style.display = "block";
             var imagen5 = document.getElementById("imagen5");
             imagen5.src = "src/entrenamientos/29.gif"; 
             document.getElementById("L").innerHTML = "Flexión abierta";
             document.getElementById("M").innerHTML = "6 series de 15 repeticiones";
         
         }
         //BOTON6
 document.getElementById("SIG6").onclick = function() {
          document.getElementById("5").style.display = "none";
          document.getElementById("6").style.display = "block";
             var imagen6 = document.getElementById("imagen6");
             imagen6.src = "src/entrenamientos/31.gif"; 
             document.getElementById("N").innerHTML = "Flexión con apoyo de base";
             document.getElementById("Ñ").innerHTML = "6 series de 15 repeticiones";
         
         }
         document.getElementById("terminar1").onclick = function() {
             document.getElementById("terminar").style.display = "block";
         }
     }
     //VIERNES
     document.getElementById("viernes").onclick = function() {
        document.getElementById("mostrar").style.display = "none";
        document.getElementById("imagenp").style.display = "none";
        document.getElementById("mostrar2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             var imagen3 = document.getElementById("imagen3");
     //BOTON1
             document.getElementById("SIG1").onclick = function() {
              document.getElementById("0").style.display = "none";
              document.getElementById("1").style.display = "block";
                 var imagen1 = document.getElementById("imagen1");
                 imagen1.src = "src/entrenamientos/triceps.gif"; 
                 document.getElementById("D").innerHTML = "Tríceps en suelo o silla";
                 document.getElementById("E").innerHTML = "6 series de 15 repeticiones";
             
             }
     //BOTON2
     document.getElementById("SIG2").onclick = function() {
              document.getElementById("1").style.display = "none";
              document.getElementById("2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 imagen2.src = "src/entrenamientos/41.gif"; 
                 document.getElementById("F").innerHTML = "Flexiones de tríceps";
                 document.getElementById("G").innerHTML = "6 series de 15 repeticiones";
             
             }
      //BOTON3
             document.getElementById("SIG3").onclick = function() {
              document.getElementById("2").style.display = "none";
              document.getElementById("3").style.display = "block";
                 var imagen3 = document.getElementById("imagen3");
                 imagen3.src = "src/entrenamientos/31.gif"; 
                 document.getElementById("H").innerHTML = "Flexión con apoyo de base";
                 document.getElementById("I").innerHTML = "6 series de 15 repeticiones";
             
             }
     //BOTON4
     document.getElementById("SIG4").onclick = function() {
              document.getElementById("3").style.display = "none";
              document.getElementById("4").style.display = "block";
                 var imagen4 = document.getElementById("imagen4");
                 imagen4.src = "src/entrenamientos/27.gif"; 
                 document.getElementById("J").innerHTML = "Flexión militar";
                 document.getElementById("K").innerHTML = "6 series de 15 repeticiones";
             
             }
         //BOTON5
     document.getElementById("SIG5").onclick = function() {
              document.getElementById("4").style.display = "none";
              document.getElementById("5").style.display = "block";
                 var imagen5 = document.getElementById("imagen5");
                 imagen5.src = "src/entrenamientos/30.gif"; 
                 document.getElementById("L").innerHTML = "Flexión cerrada";
                 document.getElementById("M").innerHTML = "6 series de 15 repeticiones";
             
             }
             //BOTON6
     document.getElementById("SIG6").onclick = function() {
              document.getElementById("5").style.display = "none";
              document.getElementById("6").style.display = "block";
                 var imagen6 = document.getElementById("imagen6");
                 imagen6.src = "src/entrenamientos/44.gif"; 
                 document.getElementById("N").innerHTML = "Gancho lateral";
                 document.getElementById("Ñ").innerHTML = "6 series de 15 repeticiones de cada lado";
             
             }
             document.getElementById("terminar1").onclick = function() {
                 document.getElementById("terminar").style.display = "block";
             }
         }
         //SABADO
         document.getElementById("sabado").onclick = function() {
            document.getElementById("mostrar").style.display = "none";
            document.getElementById("imagenp").style.display = "none";
            document.getElementById("mostrar2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 var imagen3 = document.getElementById("imagen3");
         //BOTON1
                 document.getElementById("SIG1").onclick = function() {
                  document.getElementById("0").style.display = "none";
                  document.getElementById("1").style.display = "block";
                     var imagen1 = document.getElementById("imagen1");
                     imagen1.src = "src/entrenamientos/69.gif"; 
                     document.getElementById("D").innerHTML = "Elevación de piernas para glúteo";
                     document.getElementById("E").innerHTML = "6 series de 15 repeticiones";
                 
                 }
         //BOTON2
         document.getElementById("SIG2").onclick = function() {
                  document.getElementById("1").style.display = "none";
                  document.getElementById("2").style.display = "block";
                     var imagen2 = document.getElementById("imagen2");
                     imagen2.src = "src/entrenamientos/73.gif"; 
                     document.getElementById("F").innerHTML = "Zancada con apoyo de silla";
                     document.getElementById("G").innerHTML = "6 series de 15 repeticiones";
                 
                 }
          //BOTON3
                 document.getElementById("SIG3").onclick = function() {
                  document.getElementById("2").style.display = "none";
                  document.getElementById("3").style.display = "block";
                     var imagen3 = document.getElementById("imagen3");
                     imagen3.src = "src/entrenamientos/74.gif"; 
                     document.getElementById("H").innerHTML = "Extensión de glúteo en una pierna con silla";
                     document.getElementById("I").innerHTML = "6 series de 15 repeticiones";
                 
                 }
         //BOTON4
         document.getElementById("SIG4").onclick = function() {
                  document.getElementById("3").style.display = "none";
                  document.getElementById("4").style.display = "block";
                     var imagen4 = document.getElementById("imagen4");
                     imagen4.src = "src/entrenamientos/77.gif"; 
                     document.getElementById("J").innerHTML = "Elevación de glúteo con banda elástica";
                     document.getElementById("K").innerHTML = "6 series de 15 repeticiones";
                 
                 }
             //BOTON5
         document.getElementById("SIG5").onclick = function() {
                  document.getElementById("4").style.display = "none";
                  document.getElementById("5").style.display = "block";
                     var imagen5 = document.getElementById("imagen5");
                     imagen5.src = "src/entrenamientos/11.gif"; 
                     document.getElementById("L").innerHTML = "Flexión lateral para oblicuos";
                     document.getElementById("M").innerHTML = "6 series de 15 repeticiones (lado derecho y lado izquierdo)";
                 
                 }
                 //BOTON6
         document.getElementById("SIG6").onclick = function() {
                  document.getElementById("5").style.display = "none";
                  document.getElementById("6").style.display = "block";
                     var imagen6 = document.getElementById("imagen6");
                     imagen6.src = "src/entrenamientos/12.gif"; 
                     document.getElementById("N").innerHTML = "Escalada de montaña";
                     document.getElementById("Ñ").innerHTML = "90 repeticiones de cada pierna.";
                 
                 }
                 document.getElementById("terminar1").onclick = function() {
                     document.getElementById("terminar").style.display = "block";
                 }
             }



}
//NADA EN FORMA
if(nivel=="Principiante"){
    var imagen = document.getElementById("imagen");
   imagen.src = "src/entrenamientos/tijera.gif";
    document.getElementById("A").innerHTML = "Saltos de tijera";
            document.getElementById("B").innerHTML = "60 segundos";
    document.getElementById("lunes").onclick = function() {
   document.getElementById("mostrar").style.display = "none";
   document.getElementById("imagenp").style.display = "none";
   document.getElementById("mostrar2").style.display = "block";
        var imagen2 = document.getElementById("imagen2");
        var imagen3 = document.getElementById("imagen3");
//BOTON1
        document.getElementById("SIG1").onclick = function() {
         document.getElementById("0").style.display = "none";
         document.getElementById("1").style.display = "block";
            var imagen1 = document.getElementById("imagen1");
            imagen1.src = "src/entrenamientos/25.gif"; 
            document.getElementById("D").innerHTML = "Flexiones";
            document.getElementById("E").innerHTML = "3 series de 15 repeticiones";
        
        }
//BOTON2
document.getElementById("SIG2").onclick = function() {
         document.getElementById("1").style.display = "none";
         document.getElementById("2").style.display = "block";
            var imagen2 = document.getElementById("imagen2");
            imagen2.src = "src/entrenamientos/burpees.gif"; 
            document.getElementById("F").innerHTML = "Burpees";
            document.getElementById("G").innerHTML = "3 series de 15 repeticiones";
        
        }
 //BOTON3
        document.getElementById("SIG3").onclick = function() {
         document.getElementById("2").style.display = "none";
         document.getElementById("3").style.display = "block";
            var imagen3 = document.getElementById("imagen3");
            imagen3.src = "src/entrenamientos/28.gif"; 
            document.getElementById("H").innerHTML = "Flexión en diamante";
            document.getElementById("I").innerHTML = "3 series de 15 repeticiones";
        
        }
//BOTON4
document.getElementById("SIG4").onclick = function() {
         document.getElementById("3").style.display = "none";
         document.getElementById("4").style.display = "block";
            var imagen4 = document.getElementById("imagen4");
            imagen4.src = "src/entrenamientos/27.gif"; 
            document.getElementById("J").innerHTML = "Flexión militar";
            document.getElementById("K").innerHTML = "3 series de 15 repeticiones";
        
        }
    //BOTON5
document.getElementById("SIG5").onclick = function() {
         document.getElementById("4").style.display = "none";
         document.getElementById("5").style.display = "block";
            var imagen5 = document.getElementById("imagen5");
            imagen5.src = "src/entrenamientos/29.gif"; 
            document.getElementById("L").innerHTML = "Flexión abierta";
            document.getElementById("M").innerHTML = "3 series de 15 repeticiones";
        
        }
        //BOTON6
document.getElementById("SIG6").onclick = function() {
         document.getElementById("5").style.display = "none";
         document.getElementById("6").style.display = "block";
            var imagen6 = document.getElementById("imagen6");
            imagen6.src = "src/entrenamientos/31.gif"; 
            document.getElementById("N").innerHTML = "Flexión con apoyo de base";
            document.getElementById("Ñ").innerHTML = "3 series de 15 repeticiones";
        
        }
        document.getElementById("terminar1").onclick = function() {
            document.getElementById("terminar").style.display = "block";
        }
    }
//MARTES
document.getElementById("martes").onclick = function() {
    document.getElementById("mostrar").style.display = "none";
    document.getElementById("imagenp").style.display = "none";
    document.getElementById("mostrar2").style.display = "block";
         var imagen2 = document.getElementById("imagen2");
         var imagen3 = document.getElementById("imagen3");
 //BOTON1
         document.getElementById("SIG1").onclick = function() {
          document.getElementById("0").style.display = "none";
          document.getElementById("1").style.display = "block";
             var imagen1 = document.getElementById("imagen1");
             imagen1.src = "src/entrenamientos/triceps.gif"; 
             document.getElementById("D").innerHTML = "Tríceps en suelo o silla";
             document.getElementById("E").innerHTML = "3 series de 15 repeticiones";
         
         }
 //BOTON2
 document.getElementById("SIG2").onclick = function() {
          document.getElementById("1").style.display = "none";
          document.getElementById("2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             imagen2.src = "src/entrenamientos/41.gif"; 
             document.getElementById("F").innerHTML = "Flexiones de tríceps";
             document.getElementById("G").innerHTML = "3 series de 15 repeticiones";
         
         }
  //BOTON3
         document.getElementById("SIG3").onclick = function() {
          document.getElementById("2").style.display = "none";
          document.getElementById("3").style.display = "block";
             var imagen3 = document.getElementById("imagen3");
             imagen3.src = "src/entrenamientos/31.gif"; 
             document.getElementById("H").innerHTML = "Flexión con apoyo de base";
             document.getElementById("I").innerHTML = "3 series de 15 repeticiones";
         
         }
 //BOTON4
 document.getElementById("SIG4").onclick = function() {
          document.getElementById("3").style.display = "none";
          document.getElementById("4").style.display = "block";
             var imagen4 = document.getElementById("imagen4");
             imagen4.src = "src/entrenamientos/27.gif"; 
             document.getElementById("J").innerHTML = "Flexión militar";
             document.getElementById("K").innerHTML = "3 series de 15 repeticiones";
         
         }
     //BOTON5
 document.getElementById("SIG5").onclick = function() {
          document.getElementById("4").style.display = "none";
          document.getElementById("5").style.display = "block";
             var imagen5 = document.getElementById("imagen5");
             imagen5.src = "src/entrenamientos/30.gif"; 
             document.getElementById("L").innerHTML = "Flexión cerrada";
             document.getElementById("M").innerHTML = "3 series de 15 repeticiones";
         
         }
         //BOTON6
 document.getElementById("SIG6").onclick = function() {
          document.getElementById("5").style.display = "none";
          document.getElementById("6").style.display = "block";
             var imagen6 = document.getElementById("imagen6");
             imagen6.src = "src/entrenamientos/44.gif"; 
             document.getElementById("N").innerHTML = "Gancho lateral";
             document.getElementById("Ñ").innerHTML = "3 series de 15 repeticiones de cada lado";
         
         }
         document.getElementById("terminar1").onclick = function() {
             document.getElementById("terminar").style.display = "block";
         }
     }
//MIERCOLES
document.getElementById("miercoles").onclick = function() {
    document.getElementById("mostrar").style.display = "none";
    document.getElementById("imagenp").style.display = "none";
    document.getElementById("mostrar2").style.display = "block";
         var imagen2 = document.getElementById("imagen2");
         var imagen3 = document.getElementById("imagen3");
 //BOTON1
         document.getElementById("SIG1").onclick = function() {
          document.getElementById("0").style.display = "none";
          document.getElementById("1").style.display = "block";
             var imagen1 = document.getElementById("imagen1");
             imagen1.src = "src/entrenamientos/53.gif"; 
             document.getElementById("D").innerHTML = "Zancadas";
             document.getElementById("E").innerHTML = "3 series de 15 repeticiones de cada lado";
         
         }
 //BOTON2
 document.getElementById("SIG2").onclick = function() {
          document.getElementById("1").style.display = "none";
          document.getElementById("2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             imagen2.src = "src/entrenamientos/54.gif"; 
             document.getElementById("F").innerHTML = "Elevación de piernas en base";
             document.getElementById("G").innerHTML = "3 series de 15 repeticiones";
         
         }
  //BOTON3
         document.getElementById("SIG3").onclick = function() {
          document.getElementById("2").style.display = "none";
          document.getElementById("3").style.display = "block";
             var imagen3 = document.getElementById("imagen3");
             imagen3.src = "src/entrenamientos/57.gif"; 
             document.getElementById("H").innerHTML = "Sentadilla con salto";
             document.getElementById("I").innerHTML = "3 series de 15 repeticiones";
         
         }
 //BOTON4
 document.getElementById("SIG4").onclick = function() {
          document.getElementById("3").style.display = "none";
          document.getElementById("4").style.display = "block";
             var imagen4 = document.getElementById("imagen4");
             imagen4.src = "src/entrenamientos/59.gif"; 
             document.getElementById("J").innerHTML = "Pilates";
             document.getElementById("K").innerHTML = "3 series de 15 repeticiones";
         
         }
     //BOTON5
 document.getElementById("SIG5").onclick = function() {
          document.getElementById("4").style.display = "none";
          document.getElementById("5").style.display = "block";
             var imagen5 = document.getElementById("imagen5");
             imagen5.src = "src/entrenamientos/60.gif"; 
             document.getElementById("L").innerHTML = "Sentadilla";
             document.getElementById("M").innerHTML = "3 series de 15 repeticiones";
         
         }
         //BOTON6
 document.getElementById("SIG6").onclick = function() {
          document.getElementById("5").style.display = "none";
          document.getElementById("6").style.display = "block";
             var imagen6 = document.getElementById("imagen6");
             imagen6.src = "src/entrenamientos/56.gif"; 
             document.getElementById("N").innerHTML = "Aleteos de pierna";
             document.getElementById("Ñ").innerHTML = "3 series de 15 repeticiones";
         
         }
         document.getElementById("terminar1").onclick = function() {
             document.getElementById("terminar").style.display = "block";
         }
     }
//JUEVES
document.getElementById("jueves").onclick = function() {
    document.getElementById("mostrar").style.display = "none";
    document.getElementById("imagenp").style.display = "none";
    document.getElementById("mostrar2").style.display = "block";
         var imagen2 = document.getElementById("imagen2");
         var imagen3 = document.getElementById("imagen3");
 //BOTON1
         document.getElementById("SIG1").onclick = function() {
          document.getElementById("0").style.display = "none";
          document.getElementById("1").style.display = "block";
             var imagen1 = document.getElementById("imagen1");
             imagen1.src = "src/entrenamientos/25.gif"; 
             document.getElementById("D").innerHTML = "Flexiones";
             document.getElementById("E").innerHTML = "3 series de 15 repeticiones";
         
         }
 //BOTON2
 document.getElementById("SIG2").onclick = function() {
          document.getElementById("1").style.display = "none";
          document.getElementById("2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             imagen2.src = "src/entrenamientos/burpees.gif"; 
             document.getElementById("F").innerHTML = "Burpees";
             document.getElementById("G").innerHTML = "3 series de 15 repeticiones";
         
         }
  //BOTON3
         document.getElementById("SIG3").onclick = function() {
          document.getElementById("2").style.display = "none";
          document.getElementById("3").style.display = "block";
             var imagen3 = document.getElementById("imagen3");
             imagen3.src = "src/entrenamientos/28.gif"; 
             document.getElementById("H").innerHTML = "Flexión en diamante";
             document.getElementById("I").innerHTML = "3 series de 15 repeticiones";
         
         }
 //BOTON4
 document.getElementById("SIG4").onclick = function() {
          document.getElementById("3").style.display = "none";
          document.getElementById("4").style.display = "block";
             var imagen4 = document.getElementById("imagen4");
             imagen4.src = "src/entrenamientos/27.gif"; 
             document.getElementById("J").innerHTML = "Flexión militar";
             document.getElementById("K").innerHTML = "3 series de 15 repeticiones";
         
         }
     //BOTON5
 document.getElementById("SIG5").onclick = function() {
          document.getElementById("4").style.display = "none";
          document.getElementById("5").style.display = "block";
             var imagen5 = document.getElementById("imagen5");
             imagen5.src = "src/entrenamientos/29.gif"; 
             document.getElementById("L").innerHTML = "Flexión abierta";
             document.getElementById("M").innerHTML = "3 series de 15 repeticiones";
         
         }
         //BOTON6
 document.getElementById("SIG6").onclick = function() {
          document.getElementById("5").style.display = "none";
          document.getElementById("6").style.display = "block";
             var imagen6 = document.getElementById("imagen6");
             imagen6.src = "src/entrenamientos/31.gif"; 
             document.getElementById("N").innerHTML = "Flexión con apoyo de base";
             document.getElementById("Ñ").innerHTML = "3 series de 15 repeticiones";
         
         }
         document.getElementById("terminar1").onclick = function() {
             document.getElementById("terminar").style.display = "block";
         }
     }
     //VIERNES
     document.getElementById("viernes").onclick = function() {
        document.getElementById("mostrar").style.display = "none";
        document.getElementById("imagenp").style.display = "none";
        document.getElementById("mostrar2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             var imagen3 = document.getElementById("imagen3");
     //BOTON1
             document.getElementById("SIG1").onclick = function() {
              document.getElementById("0").style.display = "none";
              document.getElementById("1").style.display = "block";
                 var imagen1 = document.getElementById("imagen1");
                 imagen1.src = "src/entrenamientos/triceps.gif"; 
                 document.getElementById("D").innerHTML = "Tríceps en suelo o silla";
                 document.getElementById("E").innerHTML = "3 series de 15 repeticiones";
             
             }
     //BOTON2
     document.getElementById("SIG2").onclick = function() {
              document.getElementById("1").style.display = "none";
              document.getElementById("2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 imagen2.src = "src/entrenamientos/41.gif"; 
                 document.getElementById("F").innerHTML = "Flexiones de tríceps";
                 document.getElementById("G").innerHTML = "3 series de 15 repeticiones";
             
             }
      //BOTON3
             document.getElementById("SIG3").onclick = function() {
              document.getElementById("2").style.display = "none";
              document.getElementById("3").style.display = "block";
                 var imagen3 = document.getElementById("imagen3");
                 imagen3.src = "src/entrenamientos/31.gif"; 
                 document.getElementById("H").innerHTML = "Flexión con apoyo de base";
                 document.getElementById("I").innerHTML = "3 series de 15 repeticiones";
             
             }
     //BOTON4
     document.getElementById("SIG4").onclick = function() {
              document.getElementById("3").style.display = "none";
              document.getElementById("4").style.display = "block";
                 var imagen4 = document.getElementById("imagen4");
                 imagen4.src = "src/entrenamientos/27.gif"; 
                 document.getElementById("J").innerHTML = "Flexión militar";
                 document.getElementById("K").innerHTML = "3 series de 15 repeticiones";
             
             }
         //BOTON5
     document.getElementById("SIG5").onclick = function() {
              document.getElementById("4").style.display = "none";
              document.getElementById("5").style.display = "block";
                 var imagen5 = document.getElementById("imagen5");
                 imagen5.src = "src/entrenamientos/30.gif"; 
                 document.getElementById("L").innerHTML = "Flexión cerrada";
                 document.getElementById("M").innerHTML = "3 series de 15 repeticiones";
             
             }
             //BOTON6
     document.getElementById("SIG6").onclick = function() {
              document.getElementById("5").style.display = "none";
              document.getElementById("6").style.display = "block";
                 var imagen6 = document.getElementById("imagen6");
                 imagen6.src = "src/entrenamientos/44.gif"; 
                 document.getElementById("N").innerHTML = "Gancho lateral";
                 document.getElementById("Ñ").innerHTML = "3 series de 15 repeticiones de cada lado";
             
             }
             document.getElementById("terminar1").onclick = function() {
                 document.getElementById("terminar").style.display = "block";
             }
         }
         //SABADO
         document.getElementById("sabado").onclick = function() {
            document.getElementById("mostrar").style.display = "none";
            document.getElementById("imagenp").style.display = "none";
            document.getElementById("mostrar2").style.display = "block";
                 var imagen2 = document.getElementById("imagen2");
                 var imagen3 = document.getElementById("imagen3");
         //BOTON1
                 document.getElementById("SIG1").onclick = function() {
                  document.getElementById("0").style.display = "none";
                  document.getElementById("1").style.display = "block";
                     var imagen1 = document.getElementById("imagen1");
                     imagen1.src = "src/entrenamientos/69.gif"; 
                     document.getElementById("D").innerHTML = "Elevación de piernas para glúteo";
                     document.getElementById("E").innerHTML = "3 series de 15 repeticiones";
                 
                 }
         //BOTON2
         document.getElementById("SIG2").onclick = function() {
                  document.getElementById("1").style.display = "none";
                  document.getElementById("2").style.display = "block";
                     var imagen2 = document.getElementById("imagen2");
                     imagen2.src = "src/entrenamientos/73.gif"; 
                     document.getElementById("F").innerHTML = "Zancada con apoyo de silla";
                     document.getElementById("G").innerHTML = "3 series de 15 repeticiones";
                 
                 }
          //BOTON3
                 document.getElementById("SIG3").onclick = function() {
                  document.getElementById("2").style.display = "none";
                  document.getElementById("3").style.display = "block";
                     var imagen3 = document.getElementById("imagen3");
                     imagen3.src = "src/entrenamientos/74.gif"; 
                     document.getElementById("H").innerHTML = "Extensión de glúteo en una pierna con silla";
                     document.getElementById("I").innerHTML = "3 series de 15 repeticiones";
                 
                 }
         //BOTON4
         document.getElementById("SIG4").onclick = function() {
                  document.getElementById("3").style.display = "none";
                  document.getElementById("4").style.display = "block";
                     var imagen4 = document.getElementById("imagen4");
                     imagen4.src = "src/entrenamientos/77.gif"; 
                     document.getElementById("J").innerHTML = "Elevación de glúteo con banda elástica";
                     document.getElementById("K").innerHTML = "3 series de 15 repeticiones";
                 
                 }
             //BOTON5
         document.getElementById("SIG5").onclick = function() {
                  document.getElementById("4").style.display = "none";
                  document.getElementById("5").style.display = "block";
                     var imagen5 = document.getElementById("imagen5");
                     imagen5.src = "src/entrenamientos/11.gif"; 
                     document.getElementById("L").innerHTML = "Flexión lateral para oblicuos";
                     document.getElementById("M").innerHTML = "3 series de 15 repeticiones (lado derecho y lado izquierdo)";
                 
                 }
                 //BOTON6
         document.getElementById("SIG6").onclick = function() {
                  document.getElementById("5").style.display = "none";
                  document.getElementById("6").style.display = "block";
                     var imagen6 = document.getElementById("imagen6");
                     imagen6.src = "src/entrenamientos/12.gif"; 
                     document.getElementById("N").innerHTML = "Escalada de montaña";
                     document.getElementById("Ñ").innerHTML = "50 repeticiones de cada pierna.";
                 
                 }
                 document.getElementById("terminar1").onclick = function() {
                     document.getElementById("terminar").style.display = "block";
                 }
             }



}
//EXPERIENCIA
if(nivel=="Atleta intermedio"){
    var imagen = document.getElementById("imagen");
    imagen.src = "src/entrenamientos/tijera.gif";
     document.getElementById("A").innerHTML = "Saltos de tijera";
             document.getElementById("B").innerHTML = "120 segundos";
     document.getElementById("lunes").onclick = function() {
    document.getElementById("mostrar").style.display = "none";
    document.getElementById("imagenp").style.display = "none";
    document.getElementById("mostrar2").style.display = "block";
         var imagen2 = document.getElementById("imagen2");
         var imagen3 = document.getElementById("imagen3");
 //BOTON1
         document.getElementById("SIG1").onclick = function() {
          document.getElementById("0").style.display = "none";
          document.getElementById("1").style.display = "block";
             var imagen1 = document.getElementById("imagen1");
             imagen1.src = "src/entrenamientos/25.gif"; 
             document.getElementById("D").innerHTML = "Flexiones";
             document.getElementById("E").innerHTML = "4 series de 15 repeticiones";
         
         }
 //BOTON2
 document.getElementById("SIG2").onclick = function() {
          document.getElementById("1").style.display = "none";
          document.getElementById("2").style.display = "block";
             var imagen2 = document.getElementById("imagen2");
             imagen2.src = "src/entrenamientos/burpees.gif"; 
             document.getElementById("F").innerHTML = "Burpees";
             document.getElementById("G").innerHTML = "4 series de 15 repeticiones";
         
         }
  //BOTON3
         document.getElementById("SIG3").onclick = function() {
          document.getElementById("2").style.display = "none";
          document.getElementById("3").style.display = "block";
             var imagen3 = document.getElementById("imagen3");
             imagen3.src = "src/entrenamientos/28.gif"; 
             document.getElementById("H").innerHTML = "Flexión en diamante";
             document.getElementById("I").innerHTML = "4 series de 15 repeticiones";
         
         }
 //BOTON4
 document.getElementById("SIG4").onclick = function() {
          document.getElementById("3").style.display = "none";
          document.getElementById("4").style.display = "block";
             var imagen4 = document.getElementById("imagen4");
             imagen4.src = "src/entrenamientos/27.gif"; 
             document.getElementById("J").innerHTML = "Flexión militar";
             document.getElementById("K").innerHTML = "4 series de 15 repeticiones";
         
         }
     //BOTON5
 document.getElementById("SIG5").onclick = function() {
          document.getElementById("4").style.display = "none";
          document.getElementById("5").style.display = "block";
             var imagen5 = document.getElementById("imagen5");
             imagen5.src = "src/entrenamientos/29.gif"; 
             document.getElementById("L").innerHTML = "Flexión abierta";
             document.getElementById("M").innerHTML = "4 series de 15 repeticiones";
         
         }
         //BOTON6
 document.getElementById("SIG6").onclick = function() {
          document.getElementById("5").style.display = "none";
          document.getElementById("6").style.display = "block";
             var imagen6 = document.getElementById("imagen6");
             imagen6.src = "src/entrenamientos/31.gif"; 
             document.getElementById("N").innerHTML = "Flexión con apoyo de base";
             document.getElementById("Ñ").innerHTML = "4 series de 15 repeticiones";
         
         }
         document.getElementById("terminar1").onclick = function() {
             document.getElementById("terminar").style.display = "block";
         }
     }
 //MARTES
 document.getElementById("martes").onclick = function() {
     document.getElementById("mostrar").style.display = "none";
     document.getElementById("imagenp").style.display = "none";
     document.getElementById("mostrar2").style.display = "block";
          var imagen2 = document.getElementById("imagen2");
          var imagen3 = document.getElementById("imagen3");
  //BOTON1
          document.getElementById("SIG1").onclick = function() {
           document.getElementById("0").style.display = "none";
           document.getElementById("1").style.display = "block";
              var imagen1 = document.getElementById("imagen1");
              imagen1.src = "src/entrenamientos/triceps.gif"; 
              document.getElementById("D").innerHTML = "Tríceps en suelo o silla";
              document.getElementById("E").innerHTML = "4 series de 15 repeticiones";
          
          }
  //BOTON2
  document.getElementById("SIG2").onclick = function() {
           document.getElementById("1").style.display = "none";
           document.getElementById("2").style.display = "block";
              var imagen2 = document.getElementById("imagen2");
              imagen2.src = "src/entrenamientos/41.gif"; 
              document.getElementById("F").innerHTML = "Flexiones de tríceps";
              document.getElementById("G").innerHTML = "4 series de 15 repeticiones";
          
          }
   //BOTON3
          document.getElementById("SIG3").onclick = function() {
           document.getElementById("2").style.display = "none";
           document.getElementById("3").style.display = "block";
              var imagen3 = document.getElementById("imagen3");
              imagen3.src = "src/entrenamientos/31.gif"; 
              document.getElementById("H").innerHTML = "Flexión con apoyo de base";
              document.getElementById("I").innerHTML = "4 series de 15 repeticiones";
          
          }
  //BOTON4
  document.getElementById("SIG4").onclick = function() {
           document.getElementById("3").style.display = "none";
           document.getElementById("4").style.display = "block";
              var imagen4 = document.getElementById("imagen4");
              imagen4.src = "src/entrenamientos/27.gif"; 
              document.getElementById("J").innerHTML = "Flexión militar";
              document.getElementById("K").innerHTML = "4 series de 15 repeticiones";
          
          }
      //BOTON5
  document.getElementById("SIG5").onclick = function() {
           document.getElementById("4").style.display = "none";
           document.getElementById("5").style.display = "block";
              var imagen5 = document.getElementById("imagen5");
              imagen5.src = "src/entrenamientos/30.gif"; 
              document.getElementById("L").innerHTML = "Flexión cerrada";
              document.getElementById("M").innerHTML = "4 series de 15 repeticiones";
          
          }
          //BOTON6
  document.getElementById("SIG6").onclick = function() {
           document.getElementById("5").style.display = "none";
           document.getElementById("6").style.display = "block";
              var imagen6 = document.getElementById("imagen6");
              imagen6.src = "src/entrenamientos/44.gif"; 
              document.getElementById("N").innerHTML = "Gancho lateral";
              document.getElementById("Ñ").innerHTML = "4 series de 15 repeticiones de cada lado";
          
          }
          document.getElementById("terminar1").onclick = function() {
              document.getElementById("terminar").style.display = "block";
          }
      }
 //MIERCOLES
 document.getElementById("miercoles").onclick = function() {
     document.getElementById("mostrar").style.display = "none";
     document.getElementById("imagenp").style.display = "none";
     document.getElementById("mostrar2").style.display = "block";
          var imagen2 = document.getElementById("imagen2");
          var imagen3 = document.getElementById("imagen3");
  //BOTON1
          document.getElementById("SIG1").onclick = function() {
           document.getElementById("0").style.display = "none";
           document.getElementById("1").style.display = "block";
              var imagen1 = document.getElementById("imagen1");
              imagen1.src = "src/entrenamientos/53.gif"; 
              document.getElementById("D").innerHTML = "Zancadas";
              document.getElementById("E").innerHTML = "4 series de 15 repeticiones de cada lado";
          
          }
  //BOTON2
  document.getElementById("SIG2").onclick = function() {
           document.getElementById("1").style.display = "none";
           document.getElementById("2").style.display = "block";
              var imagen2 = document.getElementById("imagen2");
              imagen2.src = "src/entrenamientos/54.gif"; 
              document.getElementById("F").innerHTML = "Elevación de piernas en base";
              document.getElementById("G").innerHTML = "4 series de 15 repeticiones";
          
          }
   //BOTON3
          document.getElementById("SIG3").onclick = function() {
           document.getElementById("2").style.display = "none";
           document.getElementById("3").style.display = "block";
              var imagen3 = document.getElementById("imagen3");
              imagen3.src = "src/entrenamientos/57.gif"; 
              document.getElementById("H").innerHTML = "Sentadilla con salto";
              document.getElementById("I").innerHTML = "4 series de 15 repeticiones";
          
          }
  //BOTON4
  document.getElementById("SIG4").onclick = function() {
           document.getElementById("3").style.display = "none";
           document.getElementById("4").style.display = "block";
              var imagen4 = document.getElementById("imagen4");
              imagen4.src = "src/entrenamientos/59.gif"; 
              document.getElementById("J").innerHTML = "Pilates";
              document.getElementById("K").innerHTML = "4 series de 15 repeticiones";
          
          }
      //BOTON5
  document.getElementById("SIG5").onclick = function() {
           document.getElementById("4").style.display = "none";
           document.getElementById("5").style.display = "block";
              var imagen5 = document.getElementById("imagen5");
              imagen5.src = "src/entrenamientos/60.gif"; 
              document.getElementById("L").innerHTML = "Sentadilla";
              document.getElementById("M").innerHTML = "4 series de 15 repeticiones";
          
          }
          //BOTON6
  document.getElementById("SIG6").onclick = function() {
           document.getElementById("5").style.display = "none";
           document.getElementById("6").style.display = "block";
              var imagen6 = document.getElementById("imagen6");
              imagen6.src = "src/entrenamientos/56.gif"; 
              document.getElementById("N").innerHTML = "Aleteos de pierna";
              document.getElementById("Ñ").innerHTML = "4 series de 15 repeticiones";
          
          }
          document.getElementById("terminar1").onclick = function() {
              document.getElementById("terminar").style.display = "block";
          }
      }
 //JUEVES
 document.getElementById("jueves").onclick = function() {
     document.getElementById("mostrar").style.display = "none";
     document.getElementById("imagenp").style.display = "none";
     document.getElementById("mostrar2").style.display = "block";
          var imagen2 = document.getElementById("imagen2");
          var imagen3 = document.getElementById("imagen3");
  //BOTON1
          document.getElementById("SIG1").onclick = function() {
           document.getElementById("0").style.display = "none";
           document.getElementById("1").style.display = "block";
              var imagen1 = document.getElementById("imagen1");
              imagen1.src = "src/entrenamientos/25.gif"; 
              document.getElementById("D").innerHTML = "Flexiones";
              document.getElementById("E").innerHTML = "4 series de 15 repeticiones";
          
          }
  //BOTON2
  document.getElementById("SIG2").onclick = function() {
           document.getElementById("1").style.display = "none";
           document.getElementById("2").style.display = "block";
              var imagen2 = document.getElementById("imagen2");
              imagen2.src = "src/entrenamientos/burpees.gif"; 
              document.getElementById("F").innerHTML = "Burpees";
              document.getElementById("G").innerHTML = "4 series de 15 repeticiones";
          
          }
   //BOTON3
          document.getElementById("SIG3").onclick = function() {
           document.getElementById("2").style.display = "none";
           document.getElementById("3").style.display = "block";
              var imagen3 = document.getElementById("imagen3");
              imagen3.src = "src/entrenamientos/28.gif"; 
              document.getElementById("H").innerHTML = "Flexión en diamante";
              document.getElementById("I").innerHTML = "4 series de 15 repeticiones";
          
          }
  //BOTON4
  document.getElementById("SIG4").onclick = function() {
           document.getElementById("3").style.display = "none";
           document.getElementById("4").style.display = "block";
              var imagen4 = document.getElementById("imagen4");
              imagen4.src = "src/entrenamientos/27.gif"; 
              document.getElementById("J").innerHTML = "Flexión militar";
              document.getElementById("K").innerHTML = "4 series de 15 repeticiones";
          
          }
      //BOTON5
  document.getElementById("SIG5").onclick = function() {
           document.getElementById("4").style.display = "none";
           document.getElementById("5").style.display = "block";
              var imagen5 = document.getElementById("imagen5");
              imagen5.src = "src/entrenamientos/29.gif"; 
              document.getElementById("L").innerHTML = "Flexión abierta";
              document.getElementById("M").innerHTML = "4 series de 15 repeticiones";
          
          }
          //BOTON6
  document.getElementById("SIG6").onclick = function() {
           document.getElementById("5").style.display = "none";
           document.getElementById("6").style.display = "block";
              var imagen6 = document.getElementById("imagen6");
              imagen6.src = "src/entrenamientos/31.gif"; 
              document.getElementById("N").innerHTML = "Flexión con apoyo de base";
              document.getElementById("Ñ").innerHTML = "4 series de 15 repeticiones";
          
          }
          document.getElementById("terminar1").onclick = function() {
              document.getElementById("terminar").style.display = "block";
          }
      }
      //VIERNES
      document.getElementById("viernes").onclick = function() {
         document.getElementById("mostrar").style.display = "none";
         document.getElementById("imagenp").style.display = "none";
         document.getElementById("mostrar2").style.display = "block";
              var imagen2 = document.getElementById("imagen2");
              var imagen3 = document.getElementById("imagen3");
      //BOTON1
              document.getElementById("SIG1").onclick = function() {
               document.getElementById("0").style.display = "none";
               document.getElementById("1").style.display = "block";
                  var imagen1 = document.getElementById("imagen1");
                  imagen1.src = "src/entrenamientos/triceps.gif"; 
                  document.getElementById("D").innerHTML = "Tríceps en suelo o silla";
                  document.getElementById("E").innerHTML = "4 series de 15 repeticiones";
              
              }
      //BOTON2
      document.getElementById("SIG2").onclick = function() {
               document.getElementById("1").style.display = "none";
               document.getElementById("2").style.display = "block";
                  var imagen2 = document.getElementById("imagen2");
                  imagen2.src = "src/entrenamientos/41.gif"; 
                  document.getElementById("F").innerHTML = "Flexiones de tríceps";
                  document.getElementById("G").innerHTML = "4 series de 15 repeticiones";
              
              }
       //BOTON3
              document.getElementById("SIG3").onclick = function() {
               document.getElementById("2").style.display = "none";
               document.getElementById("3").style.display = "block";
                  var imagen3 = document.getElementById("imagen3");
                  imagen3.src = "src/entrenamientos/31.gif"; 
                  document.getElementById("H").innerHTML = "Flexión con apoyo de base";
                  document.getElementById("I").innerHTML = "4 series de 15 repeticiones";
              
              }
      //BOTON4
      document.getElementById("SIG4").onclick = function() {
               document.getElementById("3").style.display = "none";
               document.getElementById("4").style.display = "block";
                  var imagen4 = document.getElementById("imagen4");
                  imagen4.src = "src/entrenamientos/27.gif"; 
                  document.getElementById("J").innerHTML = "Flexión militar";
                  document.getElementById("K").innerHTML = "4 series de 15 repeticiones";
              
              }
          //BOTON5
      document.getElementById("SIG5").onclick = function() {
               document.getElementById("4").style.display = "none";
               document.getElementById("5").style.display = "block";
                  var imagen5 = document.getElementById("imagen5");
                  imagen5.src = "src/entrenamientos/30.gif"; 
                  document.getElementById("L").innerHTML = "Flexión cerrada";
                  document.getElementById("M").innerHTML = "4 series de 15 repeticiones";
              
              }
              //BOTON6
      document.getElementById("SIG6").onclick = function() {
               document.getElementById("5").style.display = "none";
               document.getElementById("6").style.display = "block";
                  var imagen6 = document.getElementById("imagen6");
                  imagen6.src = "src/entrenamientos/44.gif"; 
                  document.getElementById("N").innerHTML = "Gancho lateral";
                  document.getElementById("Ñ").innerHTML = "4 series de 15 repeticiones de cada lado";
              
              }
              document.getElementById("terminar1").onclick = function() {
                  document.getElementById("terminar").style.display = "block";
              }
          }
          //SABADO
          document.getElementById("sabado").onclick = function() {
             document.getElementById("mostrar").style.display = "none";
             document.getElementById("imagenp").style.display = "none";
             document.getElementById("mostrar2").style.display = "block";
                  var imagen2 = document.getElementById("imagen2");
                  var imagen3 = document.getElementById("imagen3");
          //BOTON1
                  document.getElementById("SIG1").onclick = function() {
                   document.getElementById("0").style.display = "none";
                   document.getElementById("1").style.display = "block";
                      var imagen1 = document.getElementById("imagen1");
                      imagen1.src = "src/entrenamientos/69.gif"; 
                      document.getElementById("D").innerHTML = "Elevación de piernas para glúteo";
                      document.getElementById("E").innerHTML = "4 series de 15 repeticiones";
                  
                  }
          //BOTON2
          document.getElementById("SIG2").onclick = function() {
                   document.getElementById("1").style.display = "none";
                   document.getElementById("2").style.display = "block";
                      var imagen2 = document.getElementById("imagen2");
                      imagen2.src = "src/entrenamientos/73.gif"; 
                      document.getElementById("F").innerHTML = "Zancada con apoyo de silla";
                      document.getElementById("G").innerHTML = "4 series de 15 repeticiones";
                  
                  }
           //BOTON3
                  document.getElementById("SIG3").onclick = function() {
                   document.getElementById("2").style.display = "none";
                   document.getElementById("3").style.display = "block";
                      var imagen3 = document.getElementById("imagen3");
                      imagen3.src = "src/entrenamientos/74.gif"; 
                      document.getElementById("H").innerHTML = "Extensión de glúteo en una pierna con silla";
                      document.getElementById("I").innerHTML = "4 series de 15 repeticiones";
                  
                  }
          //BOTON4
          document.getElementById("SIG4").onclick = function() {
                   document.getElementById("3").style.display = "none";
                   document.getElementById("4").style.display = "block";
                      var imagen4 = document.getElementById("imagen4");
                      imagen4.src = "src/entrenamientos/77.gif"; 
                      document.getElementById("J").innerHTML = "Elevación de glúteo con banda elástica";
                      document.getElementById("K").innerHTML = "4 series de 15 repeticiones";
                  
                  }
              //BOTON5
          document.getElementById("SIG5").onclick = function() {
                   document.getElementById("4").style.display = "none";
                   document.getElementById("5").style.display = "block";
                      var imagen5 = document.getElementById("imagen5");
                      imagen5.src = "src/entrenamientos/11.gif"; 
                      document.getElementById("L").innerHTML = "Flexión lateral para oblicuos";
                      document.getElementById("M").innerHTML = "4 series de 15 repeticiones (lado derecho y lado izquierdo)";
                  
                  }
                  //BOTON6
          document.getElementById("SIG6").onclick = function() {
                   document.getElementById("5").style.display = "none";
                   document.getElementById("6").style.display = "block";
                      var imagen6 = document.getElementById("imagen6");
                      imagen6.src = "src/entrenamientos/12.gif"; 
                      document.getElementById("N").innerHTML = "Escalada de montaña";
                      document.getElementById("Ñ").innerHTML = "80 repeticiones de cada pierna.";
                  
                  }
                  document.getElementById("terminar1").onclick = function() {
                      document.getElementById("terminar").style.display = "block";
                  }
              }


}

}



}
