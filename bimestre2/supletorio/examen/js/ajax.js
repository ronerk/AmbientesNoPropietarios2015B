//========================
//CREACION DEL OBJETO AJAX
//========================
function objetoAjax(){
    var xmlhttp=false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
 
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}
 
//==================
function mostrarMateriaNivel(){
 
    divResultado = document.getElementById('listamateria');
    if(document.getElementById('materia').checked==true)
    {
        $('input[type==checkbox]').each(function(){
            this.checked =true;
        });
        
    }else {
         $('input[type==checkbox]').each(function(){
            this.checked =false;
        });
    }
    
  /*  materia=document.getElementById('materia').checked;
    materia==true;
   
 
    ajax=objetoAjax();
    ajax.open("POST", "include/mat_nivel.php");
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.send("idmateria="+materia)*/
}
 
 function enviar(check){
    
     for(var i=1; i<=check; i++){
         if(document.getElementById('materia'+i).checked==true){
             var monto = document.getElementById('materia'+i).value;
             document.getElementById('materiac').value=monto;
         }
     }
 }
 
//==================
