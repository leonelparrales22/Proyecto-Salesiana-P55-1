<style type="text/css">
.switch {
  position: relative;
  display: inline-block;
  /*60*/ 
  width: 300px;
  /*34*/
  height: 100px;
}
 
/* Ocultamos el checkbox html */
.switch input {
  display:none;
}
 
/* Formateamos la caja del interruptor sobre la cual se deslizará la perilla de control o slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}
 
/* Pintamos la perilla de control o slider usando el selector before */
.slider:before {
  position: absolute;
  content: "";
  /*26*/
  height: 95px;
  /*26*/
  width: 100px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
 
/* Cambiamos el color de fondo cuando el checkbox esta activado */
input:checked + .slider {
  background-color: #E27AD8;
}
 
/* Deslizamos el slider a la derecha cuando el checkbox esta activado */ 
input:checked + .slider:before {
  -webkit-transform: translateX(193px);
  -ms-transform: translateX(193px);
  transform: translateX(193px);
}
 
/* Aplicamos efecto de bordes redondeados en slider y en el fondo del slider */
.slider.round {
  border-radius: 34px;
}
 
.slider.round:before {
  border-radius: 50%;
}
</style>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
Encender/Apagar Ventilador:
<br>
<br>
<center>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<img src="<?php echo base_url();?>img/Ventilador.jpg" alt="Smiley face" height="300" width="300">
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<label class="switch">
  <input type="checkbox">
  <div class="slider round"></div>
</label>
</center>

<br>

