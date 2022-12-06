/* $("#id_servicio").change(precioxAuto,mostrarValores); 
$("#tipo_auto").change(precioxAuto,mostrarValores); */
/*      $("#sprecio_base").val(); */
;
function mostrarValores() {
       precio_venta = precioxAuto();
       $("#subtotal").val(precio_venta);

       var igv = parseFloat($('#subtotal').val() * 0.18).toFixed(2);

       $("#igv").val(igv);

       var total = (parseFloat($('#subtotal').val()) + parseFloat($('#igv').val())).toFixed(2);

       $("#total").val(total);
}
function precioxAuto(){
       precios = document.getElementById('tipo_auto');
      
       /* var precio_base = $('span[name="precio_base"]').text(); */
       /* var precio_base = $('span[name="precio_base"]').text(); */
       datosServicios= $('select[name="id_servicio"] option:selected').text().split('_');
       var precio_base = datosServicios[1];
       

       console.log(precio_base);

       var precio_venta = 0;

       if(precios.value == '1'){
           var precio_venta = parseFloat(precio_base);
       }
       if(precios.value == '2'){
           var precio_venta = parseFloat(precio_base) + 100;
       }
       if(precios.value == '3'){
           var precio_venta = parseFloat(precio_base) + 150;
       }
       if(precios.value == '4'){
           var precio_venta = parseFloat(precio_base) + 180;
       }
       
       
       return precio_venta.toFixed(2);
}

function comprobarinputs(){
    var subtotal = $("#subtotal").val();
    
    if(subtotal == 0 || subtotal == ""){
        alert("Vuelva a Cotizar por favor");
        return false;
    }

}
