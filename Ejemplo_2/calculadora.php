<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="calculadora.css">
    <title>Calculadora</title>
</head>
<body onload="init();">
<?php  include_once 'includes/templates/header.php' ?> 
   <table class="Calculadora">
       <script src="calcu.js"></script>
       <tr>
           <td colspan="4"><span id="resultado"></span></td>
       </tr>
       <tr>
           <td><button id="siete">7</button></td>
           <td><button id="ocho">8</button></td>
           <td><button id="nueve">9</button></td>
           <td><button id="division" onclick="division()">/</button></td>
       </tr>
       <tr>
           <td><button id="cuatro">4</button></td>
           <td><button id="cinco">5</button></td>
           <td><button id="seis">6</button></td>
           <td><button id="multiplicacion" onclick="multiplicacion()">*</button></td>
       </tr>
       <tr>
           <td><button id="uno">1</button></td>
           <td><button id="dos">2</button></td>
           <td><button id="tres">3</button></td>
           <td><button id="resta" onclick="resta()">-</button></td>
       </tr>
       <tr>
           <td><button id="igual">=</button></td>
           <td><button id="reset">C</button></td>
           <td><button id="cero">0</button></td>
           <td><button id="sumar" onclick="sumar()">+</button></td>
       </tr>
   </table>

</body>
</html>