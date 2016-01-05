
$(document).ready(inicializar);

function inicializar(){

$("#BotonA").click(mostrar);

}

function mostrar(){
  $("#caja").toggle("slow");
}




$(document).ready(function()
{
$("#ocultar").click(function(){
  $('.intro').hide(3000)
})
});


$(document).ready(function()
{
$("#ocultarBoton").click(function(){
  $('div').hide(3000)
})
});



$(document).ready(function()
{
  

  $(".selector").click(function(){
   
    $('ul>li').first().hide(3000).css('text-decoration','underline')
    
  })

});



$(document).ready(function()
{
  
  $("#lista1").click(function()
  {
    $('#primeroL1').hide(3000).css('text-decoration','underline');
      });
  
  
  $("#lista2").click(function()
  {
    $('#primeroL2').hide(3000).css('text-decoration','underline');
  });
  

 

});

$(document).ready(function()
{
 $("tr:odd").css("background-color", "#DF0101"); 
    $("tr:even").css("background-color", "#4B8A08"); 
});



$(document).ready(function()
{
  
 $("#message").hover(function(){
   $(this).animate({opacity: 0.3 }, 400).append("<span>Evento Hover dentro del div </span>")}, 
 function()
 {
   $(this).find("span:last").remove().animate({opacity: 1 }, 400);
})


$("#encabezado").hover(function(){
   $(this).animate({opacity: 0.3 }, 400).append("<span> Fuera del div</span>")}, 
 function()
 {
   $(this).find("span:last").remove();
})
});




$(document).ready(function()
{
  //Metodo focus() y blur() para el campo txtNombre
 $("#txtNombre").focus(function(){
   $(this).animate({opacity: 0.3 }, 400).css('background-color', 'blue')//#4B8A08 Color verde
 })
 $("#txtNombre").blur(function(){
   $(this).animate({opacity: 0.3 }, 400).css('background-color', 'green')//#DF0101 Color rojo
 });
 
 //Metodo focus() y blur() para el campo txtApellido
 $("#txtApellido").focus(function(){
   $(this).animate({opacity: 0.3 }, 400).css('background-color', 'blue')//#4B8A08 Color verde
 })
 $("#txtApellido").blur(function(){
   $(this).animate({opacity: 0.3 }, 400).css('background-color', 'green')//#DF0101 Color rojo
 });
 
 
});