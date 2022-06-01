
    <div class="menu ">
<!--MENU-->
<div class="card mb-3 card-content">
    <img src="http://localhost/public/img/lentejas.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Hamburguesas de lentejas</h5>
      <p class="card-text">4 X $370</p>  
      <div class="botones">
        <button id="botonClick"><img id="suma" src="http://localhost/public/img/suma.png" alt=""></button>
        <button id="botonClick1"><img id="resta" src="http://localhost/public/img/resta.png" alt=""></button>
      </div>
      <div class="info">
          <div class="ininfo">
            <p id="cantidad">Unidades:&nbsp;&nbsp;</p>
            <p id="areaContador"></p>
          </div>
        <div class="ininfo">
            <p id="precio">$</p>
            <p id="subtotal"></p>
        </div>
    </div>
        <script type="text/javascript">
            var botonElement = document.getElementById("botonClick");
            var botonElement1 = document.getElementById("botonClick1");
            var pElement = document.getElementById("areaContador");
            var pElement1 = document.getElementById("subtotal");
            var pElement2 = document.getElementById("cantidad");
            var pElement3 = document.getElementById("precio");
            var contador = 0;
            var subTotal = 0;
            botonElement.onclick = function () {
                pElement.style.display="block";
                pElement1.style.display="block";
                pElement2.style.display="flex";
                pElement3.style.display="flex";
                contador=contador+4;
                subTotal=subTotal+370;
                botonElement1.style.display="block";
                pElement.textContent = contador;
                pElement1.textContent = subTotal;
            }
            botonElement1.onclick = function () {
                
                contador=contador-4;
                subTotal=subTotal-370;
                pElement.textContent = contador;
                pElement1.textContent = subTotal;
                if(contador==0){
                    botonElement1.style.display="none";
                    pElement.style.display="none";
                    pElement1.style.display="none";
                    pElement2.style.display="none";
                    pElement3.style.display="none";

                }
            }
        </script>   
     </div>
  </div>
  <div class="card mb-3 card-content">
    <img src="http://localhost/public/img/arvejas.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Hamburguesas de arvejas</h5>
      <p class="card-text">4 X $350</p>  
      <div class="botones">
        <button id="botonClicka"><img id="suma" src="http://localhost/public/img/suma.png" alt=""></button>
        <button id="botonClick1a"><img id="resta" src="http://localhost/public/img/resta.png" alt=""></button>
      </div>
      <div class="info">
          <div class="ininfo">
            <p id="cantidada">Unidades:&nbsp;&nbsp;</p>
            <p id="areaContadora"></p>
          </div>
        <div class="ininfo">
            <p id="precioa">$</p>
            <p id="subtotala"></p>
        </div>
    </div>
        <script type="text/javascript">
            var botonElementa = document.getElementById("botonClicka");
            var botonElement1a = document.getElementById("botonClick1a");
            var pElementa = document.getElementById("areaContadora");
            var pElement1a = document.getElementById("subtotala");
            var pElement2a = document.getElementById("cantidada");
            var pElement3a = document.getElementById("precioa");
            var contadora = 0;
            var subTotala = 0;
            botonElementa.onclick = function () {
                pElementa.style.display="block";
                pElement1a.style.display="block";
                pElement2a.style.display="flex";
                pElement3a.style.display="flex";
                contadora=contadora+4;
                subTotala=subTotala+350;
                botonElement1a.style.display="block";
                pElementa.textContent = contadora;
                pElement1a.textContent = subTotala;
            }
            botonElement1a.onclick = function () {
                
                contadora=contadora-4;
                subTotala=subTotala-350;
                pElementa.textContent = contadora;
                pElement1a.textContent = subTotala;
                if(contadora==0){
                    botonElement1a.style.display="none";
                    pElementa.style.display="none";
                    pElement1a.style.display="none";
                    pElement2a.style.display="none";
                    pElement3a.style.display="none";

                }
            }
        </script>   
     </div>
  </div>
  <div class="card mb-3 card-content">
    <img src="http://localhost/public/img/garbanzos.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Hamburguesas de garbanzos</h5>
      <p class="card-text">4 X $360</p>  
      <div class="botones">
        <button id="botonClickg"><img id="suma" src="http://localhost/public/img/suma.png" alt=""></button>
        <button id="botonClick1g"><img id="resta" src="http://localhost/public/img/resta.png" alt=""></button>
      </div>
      <div class="info">
          <div class="ininfo">
            <p id="cantidadg">Unidades:&nbsp;&nbsp;</p>
            <p id="areaContadorg"></p>
          </div>
        <div class="ininfo">
            <p id="preciog">$</p>
            <p id="subtotalg"></p>
        </div>
    </div>
        <script type="text/javascript">
            var botonElementg = document.getElementById("botonClickg");
            var botonElement1g = document.getElementById("botonClick1g");
            var pElementg = document.getElementById("areaContadorg");
            var pElement1g = document.getElementById("subtotalg");
            var pElement2g = document.getElementById("cantidadg");
            var pElement3g = document.getElementById("preciog");
            var contadorg = 0;
            var subTotalg = 0;
            botonElementg.onclick = function () {
                pElementg.style.display="block";
                pElement1g.style.display="block";
                pElement2g.style.display="flex";
                pElement3g.style.display="flex";
                contadorg=contadorg+4;
                subTotalg=subTotalg+360;
                botonElement1g.style.display="block";
                pElementg.textContent = contadorg;
                pElement1g.textContent = subTotalg;
            }
            botonElement1g.onclick = function () {
                
                contadorg=contadorg-4;
                subTotalg=subTotalg-360;
                pElementg.textContent = contadorg;
                pElement1g.textContent = subTotalg;
                if(contadorg==0){
                    botonElement1g.style.display="none";
                    pElementg.style.display="none";
                    pElement1g.style.display="none";
                    pElement2g.style.display="none";
                    pElement3g.style.display="none";

                }
            }
        </script>   
     </div>
  </div>
     </div>
     <div class="compra">
        <div id="lista">
            <p id="prueba" ></p>
                <script type="text/javascript">
                    var total = subtotal+subtotala+subTotalg;
                    var prueba = document.write(total)
                    var p =document.getElementById("prueba");
                    p.innerHTML=prueba;
                    
                    

                </script>
        </div>
        <div class="corroborar-pedido">
      <a
        href="https://api.whatsapp.com/send?phone=111531094603&text=hola,%20qué%20tal?"
        target="blank">CORROBORAR PEDIDO</a>
    </div>
    <!--JAVASCRIPT-->
        <script type="text/javascript">
            var Corrobora = document.getElementById("fin");
            var Lista = document.getElementById("lista");
            Corrobora.onclick = function () {
                Corrobora.style.display="none";
                Lista.style.display="block";
            }
        </script>   

     </div>
