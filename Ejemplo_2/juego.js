function aleatorio(opc1, opc2)
{
	var numero = Math.floor( Math.random() * (opc2 - opc1 + 1) + opc1);
	return numero;
}

var piedra = 0;
var papel = 1;
var tijera = 2;

var opciones = ["Piedra", "Papel", "Tijera"];

var objUsuario;
var objPaguina = aleatorio(0,2); 

objUsuario = prompt("¿Que eliges?\nPiedra: 0\nPapel: 1\nTijera: 2" , 0);

alert("La paguina:" + opciones[objPaguina]);


if(objUsuario == piedra)
{
  alert("Elegiste Piedra!");
  if(objPaguina == piedra)
  {
  	alert("Empate!");
  }
  
  else if(objPaguina == papel)
  {
    alert("Perdiste!");
  }
  
  else if(objPaguina == tijera)
  {
    alert("Ganaste!");
  }

}
  
  
else if(objUsuario == papel)
{
  alert("Elegiste Papel!");
  if(objPaguina == piedra)
  {
    alert("Ganaste!");
  }
  
  else if(objPaguina == papel)
  {
    alert("Empate!");
  }
  
  else if(objPaguina == tijera) 
  {
    alert("Perdiste!");
  }
  
}

else if(objPaguina == tijera)
{
	alert("Elegiste Tijera!");
	if(objPaguina == piedra)
    {
      alert("Perdiste!");
    }
    
    
    else if(objPaguina == papel)
    {
      alert("Ganaste!");	
    }

    else if(objPaguina == tijera)
    { 
      alert("Empate!");
    }

}

else

{
	alert("Debes elegir 0,1 ó 2!");
}