// function f1(){
//    //alert("Funcion cargada al inicio");
//    value = $('#corral').val('value').change();
// alert(value);
// }
 
// window.onload = f1;


$(document).ready(function(){
$('#corral').change(evt => {
    var archivo = evt.target.files[0];
    alert(archivo)
});
});

function ShowSelected()
{
/* Para obtener el valor */
var cod = document.getElementById("corral").value;
alert(cod);

$.ajax({
    url:'lista-animales',
    type:'Get',
    data: 
    {
      _token: "{{ csrf_token() }}",
      corral : cod
    },
    success:(res) => {
      alert(res);
      console.log(res)
    }
  });
 
/* Para obtener el texto */
// var combo = document.getElementById("corral");
// var selected = combo.options[combo.selectedIndex].text;
// alert(selected);
}


