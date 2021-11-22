function ShowSelected()
{

var cod = document.getElementById("corral").value;

$.ajax({
    url:'lista-animales',
    type:'Get',
    data: 
    {
      _token: "{{ csrf_token() }}",
      corral : cod
    },
    success:(res) => {
        console.log(res.data)
        var object = res.data
        var body = document.getElementById("body").innerHTML= " ";
        var body = document.getElementById("body");
        var suma=0;
        var media=0;

        for(i=0; i<object.length; i++){
            var tr = document.createElement('tr');
            console.log(res.data[i].nombre);
            var td_id = document.createElement('td');
            td_id.innerText = res.data[i].id;
            
            var td_nombre = document.createElement('td');
                td_nombre.innerText = res.data[i].nombre;
            var td_peso = document.createElement('td');
                td_peso.innerText = res.data[i].peso+' (KG)';
            var td_edad = document.createElement('td');
                td_edad.innerText = res.data[i].edad;
            var td_detalle = document.createElement('td');
                td_detalle.innerText = res.data[i].detalle;
            tr.append(td_id,td_nombre,td_peso,td_edad,td_detalle);
            body.append(tr);

            suma += parseInt(res.data[i].edad);
            media = suma/object.length;
        }

        document.getElementById("media").innerHTML= media;
        
    }
  });
 
}


