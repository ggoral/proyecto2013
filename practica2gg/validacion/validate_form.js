function validate_form(){
  var user=document.forms["login_form"]["user"].value;
  var pass=document.forms["login_form"]["pass"].value;

  if ( user==null || user==""){
      alert("Ingrese el Nombre");
      document.getElementById('user').focus();
      //return false;
  }
  else{
      localStorage.nombre=user;
      return false;
  }
}

function Numerico(e){
  var charCode
  // Veo si es Netscape o Explorer
  if (navigator.appName == "Netscape")
    charCode = e.which // leo la tecla que ingreso
  else
    charCode = e.keyCode
  
  status = charCode
  // Chequeamos que sea un numero comparandolo con los valores ASCII
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    alert("Solo esta permitido el ingreso de valores Numericos")
    return false
  }
  return true
}

function NoNumerico(e){
  var charCode
  // Veo si es Netscape o Explorer
  if (navigator.appName == "Netscape")
    charCode = e.which // leo la tecla que ingreso
  else
    charCode = e.keyCode // leo la tecla que ingreso
  status = charCode
  // Chequeamos que sea un numero comparandolo con los valores ASCII
  if (e.altKey || e.ctrlKey || e.shiftKey ){
    return true
  }
  // if ((charCode < 48 || charCode > 57) && (charCode != 193)&& (charCode != 201)&& (charCode != 211)&& (charCode != 205)&& (charCode != 218)&& (charCode != 225)&& (charCode != 233)&& (charCode != 237)&& (charCode != 243)&& (charCode != 250))
  if (charCode < 48 || charCode > 57){
    return true
  }
  alert("Solo esta permitido el ingreso de valores Alfabeticos")
  return false
}
