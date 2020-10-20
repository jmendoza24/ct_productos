function ver_cot(id_cotizacion){


   var parametros ={ 
        "id_cotizacion":id_cotizacion,              
   };
    $.ajax({
          url:"/api/v1/ver_cot",
          type: "get",
          data:parametros,
          success: function(respuesta){  
          $('#contenido2').html(respuesta);
              $('.decimal-inputmask').inputmask({ "alias": "decimal" , "radixPoint": "." });
              $(".currency").inputmask({ alias : "currency", prefix: '$ ' });
              $(".percentage-mask").inputmask({mask: "99.99%",});




          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function ver_oc(id_cotizacion){


   var parametros ={ 
        "id_cotizacion":id_cotizacion,              
   };
    $.ajax({
          url:"/api/v1/ver_oc",
          type: "get",
          data:parametros,
          success: function(respuesta){  
          $('#contenido2').html(respuesta);
              $('.decimal-inputmask').inputmask({ "alias": "decimal" , "radixPoint": "." });
              $(".currency").inputmask({ alias : "currency", prefix: '$ ' });
              $(".percentage-mask").inputmask({mask: "99.99%",});



          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}




function guarda_cotizacion_tc(num_cot){
  
    var tipo_cambio=$('#tipo_cambio').val();

    $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Se aplicara un nuevo tipo de cambio ala cotización.¿Deseas continuar?</strong></h3>',
           buttons: {
               Aceptar: function () {
               

                 $.ajax({
                        url:"/api/v1/guarda_cotizacion_tc",
                        type: "get",
                        data:{'num_cot':num_cot,'tipo_cambio':tipo_cambio},
                        success: function(respuesta){ 


                             window.location.href = '/revives.rev';


                        },  
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                           //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                        }   

                    });

                 
               },
               Cancelar: function(){

               }
           }
       });
}


function habilita_tipo2(id_cotizacion){

    var id_tipo_cliente=$('#id_tipo_cliente').val();
    if (id_tipo_cliente==1){

   $("#viejo").css('display', 'inline');
   $("#nuevo").css('display', 'none');

   $("#cviejo").css('display', 'inline');
   $("#cnuevo").css('display', 'none');

   $("#listar").css('display', 'inline');
   $("#listan").css('display', 'none');

   $('#correo').attr('disabled', 'disabled');
   $('#telefono').attr('disabled', 'disabled');
   $('#descuento').attr('disabled', 'disabled');


   bs_contactos2(id_cotizacion);

    }else if(id_tipo_cliente==0){

   $.blockUI({ message: 'Actualizando.' }); 

   $("#nuevo").css('display', 'inline');
   $("#viejo").css('display', 'none');

   $("#cnuevo").css('display', 'inline');
   $("#cviejo").css('display', 'none');

   $("#listan").css('display', 'inline');
   $("#listar").css('display', 'none');

   $('#correo').removeAttr('disabled');
   $('#telefono').removeAttr('disabled');
   $('#descuento').removeAttr('disabled');

   

     setTimeout($.unblockUI, 2000);

           setTimeout(function(){
                    guarda_cotizacion(id_cotizacion)
                },2000);


    }else{



    }


} 


function guarda_comentarios_cotizacion(id_cotizacion){

  var descripcion=$('#descripcion'+id_cotizacion).val();

  $.ajax({
          url:"/api/v1/guarda_comentarios_cotizacion",
          type: "get",
          datatype:'json',
          data:{'id_cotizacion':id_cotizacion,'descripcion':descripcion},
          success: function(respuesta)
          {    
               
          }
      }) ; 

}


function lista(id_cotizacion){
        
    var lista=$('#lista').val();

    $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>La lista de precios se cambiara, los productos se eliminaran de la cotización ¿Deseas contiuar?</strong></h3>',
           buttons: {
               Aceptar: function () {
               guarda_cotizacion(id_cotizacion);
               

                 $.blockUI({ message: 'Actualizando.' }); 
                 $.ajax({
                        url:"/api/v1/actualiza_lista",
                        type: "get",
                        data:{'lista':lista},
                        success: function(respuesta){ 

                          limpia_detalle(id_cotizacion);


                          setTimeout($.unblockUI, 50);

                        },  
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                           //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                        }   

                    });

                 
               },
               Cancelar: function(){

               }
           }
       });

}




function limpia_detalle(id_cotizacion){

  $.ajax({
          url:"/api/v1/limpia_detalle",
          type: "get",
          datatype:'json',
          success: function(respuesta)
          {    
             actualiza_tabla_cotizados(id_cotizacion);
             actualiza_cotizacion(id_cotizacion);

          }
      }) ; 
}


function habilita_tipo(){

    var id_tipo_cliente=$('#id_tipo_cliente').val();
    if (id_tipo_cliente==1){

  
   $("#viejo").css('display', 'inline');
   $("#nuevo").css('display', 'none');

   $("#cviejo").css('display', 'inline');
   $("#cnuevo").css('display', 'none');

   $("#listar").css('display', 'inline');
   $("#listan").css('display', 'none');

   $("select#id_cliente").val(0); 
   $("select#id_contacto").val(0); 

   $('#correo').attr('disabled', 'disabled');
   $('#telefono').attr('disabled', 'disabled');
   $('#descuento').attr('disabled', 'disabled');



    }else if(id_tipo_cliente==0){
   

   $("#nuevo").css('display', 'inline');
   $("#viejo").css('display', 'none');

   $("#cnuevo").css('display', 'inline');
   $("#cviejo").css('display', 'none');

   $("#listan").css('display', 'inline');
   $("#listar").css('display', 'none');

   $('#correo').removeAttr('disabled');
   $('#telefono').removeAttr('disabled');
   $('#descuento').removeAttr('disabled');


    }else{



    }

  $('#correo').val('');
  $('#telefono').val('');

}
function bs_contactos2(id_cotizacion){

  
  var id_cliente= $('#id_cliente').val();

  $.ajax({
          url:"/api/v1/contacto2",
          type: "get",
          datatype:'json',
          data:{'id_cliente':id_cliente,'id_cotizacion':id_cotizacion},
          success: function(respuesta)
          {    
               $("#id_contacto").html(respuesta);
               carga_descuento(id_cotizacion);
               info_con(id_cotizacion);
               
          }
      }) ; 

}

function bs_contactos(id_cotizacion){
  
  var id_cliente= $('#id_cliente').val();

  $.ajax({
          url:"/api/v1/contacto",
          type: "get",
          datatype:'json',
          data:{'id_cliente':id_cliente},
          success: function(respuesta)
          {    
               $("#id_contacto").html(respuesta);
               carga_descuento(id_cotizacion);
               
          }
      }) ; 

}

function carga_descuento(id_cotizacion){


  $('#descuento').val('');
  
  var id_cliente= $('#id_cliente').val();

  $.ajax({
          url:"/api/v1/cliente_descuento",
          type: "get",
          datatype:'json',
          data:{'id_cliente':id_cliente},
          success: function(respuesta)
          {    
              
               $("#descuento").val(respuesta.descuento);
               $("#x").val(respuesta.lista);
               actualiza_tabla_cotizados(id_cotizacion);
               actualiza_cotizacion(id_cotizacion);


               
          }
      }) ; 
}

function info_con(id_cot){


$('#correo').val('');
$('#telefono').val('');

      var id_contacto=$('#id_contacto').val();
      var parametros ={ 
        "id_contacto":id_contacto,
                       
   };
$.blockUI({ message: 'Actualizando.' }); 


$.ajax({
              url:"/api/v1/info_con",
              type: "get",
              data:parametros,
              success: function(respuesta){ 

               $("#correo").val(respuesta.correo);
               $("#telefono").val(respuesta.telefono);

               

               setTimeout($.unblockUI, 2000);

                     setTimeout(function(){
                              guarda_cotizacion(id_cot)

                          },2000);

              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
              // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });  

}

function vendedores(tipo,id){


   if (tipo==0){
      var web="crea_vendedor";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_vendedor";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get", 
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);
            $(".percentage-mask").inputmask({mask: "99.99%",});
            $(".email-inputmask").inputmask("email", { onUnMask: function(maskedValue, unmaskedValue) {
              return unmaskedValue;
            }});
            $('.international-inputmask').inputmask("+99(999)999-9999");
            $('.decimal-inputmask').inputmask({ "alias": "decimal" , "radixPoint": "." });

       

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function captura_vendedor(dato){
    
   if (dato==0){
      var web="crea_captuta_vendedor";
   }else{
      var web="editar_captura_vendedor";
   }

   var nombre=  $("#nombre").val();
   var correo=  $("#correo").val();
   var telefono=  $("#telefono").val();
   var descuentos=  $("#descuentos").val();
   var id_tipo_vendedor=  $("#id_tipo_vendedor").val();
   var idv=  $("#idv").val();
   var comentarios=  $("#comentarios").val();
   var puesto=  $("#puesto").val();
   var rfc=  $("#rfc").val();
   var calle=  $("#calle").val();
   var colonia=  $("#colonia").val();
   var id_estado=  $("#id_estado").val();
   var id_municipio=  $("#id_municipio").val();
   var cp=  $("#cp").val();





   var parametros ={ 
        "id_tipo_vendedor":id_tipo_vendedor,
        "descuentos":descuentos,
        "telefono":telefono,
        "correo":correo,
        "nombre":nombre,
        "idv":idv,
        "puesto":puesto,
        "rfc":rfc,
        "calle":calle,
        "colonia":colonia,
        "id_estado":id_estado,
        "id_municipio":id_municipio,
        "cp":cp,
        "comentarios":comentarios,                       
   };

   if(nombre=="" || correo=="" || id_tipo_vendedor==0 || id_estado==0 || id_municipio==0){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 

              if(respuesta==1){
                $.alert("Este correo ya se registro con otro vendedor");
              }else{

                  $('#myModal').modal('hide');

                  actualiza_tbl_vendedores();
                  
              }

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
}



function actualiza_tbl_vendedores(){
   
   $.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_vendedores",
          type: "get",
          success: function(respuesta){ 

            $('#div_vendedores').html(respuesta); 

            var table = $("#tblVendedores-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function borra_vendedor(id){

    var parametros ={ 
        "id":id,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar este vendedor?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_vendedor",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_tbl_vendedores();
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}

function bs_municipio(){

   var id_estado=  $("#id_estado").val();
   var parametros ={ 
        "id_estado":id_estado,                      
   };
    $.ajax({
              url:"/api/v1/bs_municipio",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                  
                $('#id_municipio').html(respuesta); 


              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                 //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });
}

function bs_municipio2(){

   var id_estado=  $("#id_estado_entrega").val();
   var parametros ={ 
        "id_estado":id_estado,                      
   };
    $.ajax({
              url:"/api/v1/bs_municipio",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                  
                $('#id_municipio_entrega').html(respuesta); 


              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                 //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });
}

function activa_vendedor(id){

   var parametros ={ 
        "id":id,
        "activo":3,                      
   };
    $.ajax({
              url:"/api/v1/activa_vendedor",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                  
              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                 //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });

}



function clientes(tipo,id){


   if (tipo==0){
      var web="crea_cliente";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_cliente";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);
            $(".percentage-mask").inputmask({mask: "99.99%",});
            $(".email-inputmask").inputmask("email", { onUnMask: function(maskedValue, unmaskedValue) {
              return unmaskedValue;
            }});
            $('.international-inputmask').inputmask("+99(999)999-9999");
            $('.decimal-inputmask').inputmask({ "alias": "decimal" , "radixPoint": "." });


       

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}




function captura_cliente(dato){
    
   if (dato==0){
      var webs="crea_captuta_cliente";
   }else{
      var webs="editar_captura_cliente";
   }

   var tipo_persona=  $("#tipo_persona").val();

   var nombre=  $("#nombre").val();
   var telefono=  $("#telefono").val();
   var telefono2=  $("#telefono2").val();
   var id_tipo_cliente=  $("#id_tipo_cliente").val();
   var id_vendedor=  $("#id_vendedor").val();
   var id_tipo_precio=  $("#id_tipo_precio").val();
   var idc=  $("#idc").val();
   var comentarios=  $("#comentarios").val();
   var rfc=  $("#rfc").val();
   var calle=  $("#calle").val();
   var colonia=  $("#colonia").val();
   var id_estado=  $("#id_estado").val();
   var id_municipio=  $("#id_municipio").val();
   var cp=  $("#cp").val();
   var descuento=  $("#descuento").val();


   if(tipo_persona==0){
    
    var correo=  $("#correo").val();
    var puesto=  $("#puesto").val();


    var parametros ={ 
        "id_tipo_precio":id_tipo_precio,
        "telefono":telefono,
        "telefono2":telefono2,
        "correo":correo,
        "nombre":nombre,
        "idc":idc,
        "puesto":puesto,
        "rfc":rfc,
        "calle":calle,
        "colonia":colonia,
        "id_estado":id_estado,
        "id_municipio":id_municipio,
        "cp":cp,
        "id_tipo_cliente":id_tipo_cliente,
        "id_vendedor":id_vendedor,
        "comentarios":comentarios,
        "tipo_persona":tipo_persona,
        "descuento":descuento, 

                       
                       
   };

   
   }else{

     var razon=  $("#razon").val();
     var web=  $("#web").val();


     var parametros ={ 
        "id_tipo_precio":id_tipo_precio,
        "telefono":telefono,
        "telefono2":telefono2,
        "razon":razon,
        "nombre":nombre,
        "idc":idc,
        "web":web,
        "rfc":rfc,
        "calle":calle,
        "colonia":colonia,
        "id_estado":id_estado,
        "id_municipio":id_municipio,
        "cp":cp,
        "id_tipo_cliente":id_tipo_cliente,
        "id_vendedor":id_vendedor,
        "comentarios":comentarios,
        "tipo_persona":tipo_persona,
        "descuento":descuento,                       
   };

   }

   
   

   if(nombre==""  || id_estado==0 || id_municipio==0 || id_tipo_cliente==0 || descuento==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+webs,
          type: "get",
          data:parametros,
          success: function(respuesta){ 

              if(respuesta==1){
                $.alert("Este correo ya se registro con otro cliente");
              }else{

                   if(dato==0){

                      $('#myModal').modal('hide');
                      actualiza_tbl_clientes();
                     
                   }
                  
              }

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
}


function actualiza_tbl_clientes(){
   
   $.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_clientes",
          type: "get",
          success: function(respuesta){ 

            $('#div_clientes').html(respuesta); 

            var table = $("#tblClientes-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function tipo_cliente(tipo,id){

   if (tipo==0){
      var web="crea_tipo_cliente";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_tipo_cliente";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);
          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function captura_tipo_cliente(dato){

   if (dato==0){
      var web="crea_captuta_tipo_cliente";
   }else{
      var web="editar_captura_tipo_cliente";
   }

   var tipo=  $("#tipo").val();
   var idtc=  $("#idtc").val();

   
   var parametros ={ 
        "tipo":tipo,
        "idtc":idtc,                       
   };

   if(tipo==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 

            if(respuesta==1){
                $.alert("Este tipo ya se encuentra registro");
            }else{

                $('#myModal').modal('hide');
                actualiza_tbl_tipo_clientes();

            }  

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
}

function actualiza_tbl_tipo_clientes(){

   $.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_tipo_cliente",
          type: "get",
          success: function(respuesta){ 

            $('#div_tipo_cliente').html(respuesta); 

            var table = $("#tblTipoClientes-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function borra_tipo_cliente(id){

    var parametros ={ 
        "id":id,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar este tipo de cliente?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_tipo_cliente",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_tbl_tipo_clientes();
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}


function borra_cliente(id){

 var parametros ={ 
        "id":id,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar este cliente?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_cliente",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_tbl_clientes();
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}

function activa_cliente(id){


   var parametros ={ 
        "id":id,
        "activo":3,                      
   };
    $.ajax({
              url:"/api/v1/activa_cliente",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                  
              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                 //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });
}

function contactos_clientes(tipo,id) {
  
  if (tipo==0){
      var web="crea_contacto_cliente";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_contacto_cliente";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);

             $(".email-inputmask").inputmask("email", { onUnMask: function(maskedValue, unmaskedValue) {
              return unmaskedValue;
            }});
            $('.international-inputmask').inputmask("+99(999)999-9999");

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function captura_contacto_cliente(dato){

 if (dato==0){
      var web="crea_captuta_contacto_cliente";
   }else{
      var web="editar_captura_contacto_cliente";
   }

   var nombre=  $("#nombre_contacto").val();
   var correo=  $("#correo_contacto").val();
   var telefono=  $("#telefono_contacto").val();
   var puesto=  $("#puesto_contacto").val();
   var idcon=  $("#idcon").val();
   var id_cliente=  $("#idcc").val();
   var comentarios=  $("#comentarios_contacto").val();
   
   var parametros ={ 
        "nombre":nombre,
        "correo":correo,
        "telefono":telefono,
        "puesto":puesto,
        "id_cliente":id_cliente,
        "comentarios":comentarios,
        "idcon":idcon,                       
   };

   if(nombre=="" || correo==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            if(respuesta==1){
                $.alert("Este correo ya se encuentra registro");
            }else{

                $('#myModal').modal('hide');
                actualiza_contactos_clientes(id_cliente);

            }  

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
}


function actualiza_contactos_clientes(id_cliente){
var parametros ={ 
        "id_cliente":id_cliente,                       
   };

$.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_contactos_clientes",
          type: "get",
           data:parametros,

          success: function(respuesta){ 

            $('#div_contactos').html(respuesta); 

            var table = $("#tblContactosClientes-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}

function borra_contacto_cliente(id,id_cliente){

  var parametros ={ 
        "id":id,
        "id_cliente":id_cliente,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar este contacto del cliente?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_contacto_cliente",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_contactos_clientes(id_cliente);
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}

function direccion_cliente(tipo,id){


  if (tipo==0){
      var web="crea_direccion_cliente";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_direccion_cliente";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);
            $('.decimal-inputmask').inputmask({ "alias": "decimal" , "radixPoint": "." });

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function captura_direccion_cliente(dato){

if (dato==0){
      var web="crea_entrega_cliente";
   }else{
      var web="editar_entrega_cliente";
   }

   var direccion=  $("#direccion_entrega").val();
   var colonia=  $("#colonia_entrega").val();
   var id_estado=  $("#id_estado_entrega").val();
   var id_municipio=  $("#id_municipio_entrega").val();
   var cp=  $("#cp_entrega").val();
   var comentarios=  $("#comentarios_entrega").val();
   var id_cliente=  $("#idcc").val();
   var ide=  $("#ide").val();

   var parametros ={ 
        "direccion":direccion,
        "colonia":colonia,
        "id_estado":id_estado,
        "cp":cp,
        "id_municipio":id_municipio,
        "id_cliente":id_cliente,
        "ide":ide,
        "comentarios":comentarios,
   };

   if(direccion=="" || id_estado==0 || id_municipio==0){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
           
                $('#myModal').modal('hide');
                actualiza_entregas_clientes(id_cliente);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
}


function actualiza_entregas_clientes(id_cliente){
var parametros ={ 
        "id_cliente":id_cliente,                       
   };

$.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_entregas_clientes",
          type: "get",
           data:parametros,

          success: function(respuesta){ 

            $('#div_direcciones').html(respuesta); 

            var table = $("#tblEntregas-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

}

function borra_entrega(id,id_cliente){

  var parametros ={ 
        "id":id,
        "id_cliente":id_cliente,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar esta dirección de entrega?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_entrega_cliente",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_entregas_clientes(id_cliente);
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });

}


function usuarios(tipo,id){


  if (tipo==0){
      var web="crea_usuario";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_usuario";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);
            $(".email-inputmask").inputmask("email", { onUnMask: function(maskedValue, unmaskedValue) {
               return unmaskedValue;
            }});


          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function captura_usuario(dato){

  if (dato==0){
      var web="crea_usuarios";
   }else{
      var web="editar_usuarios";
   }

   var idu=  $("#idu").val();
   var name=  $("#name").val();
   var email=  $("#email").val();
   var id_tipo_usuario=  $("#id_tipo_usuario").val();
   var password=  $("#password").val();
   
   var parametros ={ 
        "password":password,
        "id_tipo_usuario":id_tipo_usuario,
        "email":email,
        "idu":idu,
        "name":name,
   };

   

   if(id_tipo_usuario==0 || email=="" || name==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{


     if(dato==0){

       if(password==""){

            $.confirm({
             animation: 'zoom',
             icon: 'fa fa-warning', type:'dark',
             title: 'Mensaje',
             content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
             buttons: {
                 Aceptar: function () {

                   
                 }
             }
         });

       }else{

             $.ajax({
              url:"/api/v1/"+web,
              type: "get",
              data:parametros,
              success: function(respuesta){ 

                if(respuesta==1){
                    $.alert("Este correo ya se encuentra registro");
                }else{

                    $('#myModal').modal('hide');
                    actualiza_usuarios();
                }
               

              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                 //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });

       }

     }else{

       $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 

            if(respuesta==1){
                $.alert("Este correo ya se encuentra registro");
            }else{

                $('#myModal').modal('hide');
                actualiza_usuarios();
            }
           

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

     }

   }
}



function actualiza_usuarios(){


$.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_usuarios",
          type: "get",

          success: function(respuesta){ 

            $('#div_usuarios').html(respuesta); 

            var table = $("#users-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}

function activa_usuario(id){


   var parametros ={ 
        "id":id,
        "activo":3,                      
   };
    $.ajax({
              url:"/api/v1/activa_usuario",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                  
              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                 //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });
}

function borra_usuario(id){

    var parametros ={ 
        "id":id,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar este usuario?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_usuario",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_usuarios();
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}


function productos(tipo,id){

  if (tipo==0){
      var web="crea_producto";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_producto";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);
            $('.decimal-inputmask').inputmask({ "alias": "decimal" , "radixPoint": "." });

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function unidad(tipo,id){



   if (tipo==0){
      var web="crea_unidad";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_unidad";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);
          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

}


function captura_unidad(dato){


if (dato==0){
      var web="crea_uni";
   }else{
      var web="editar_uni";
   }

   var unidad=  $("#unidad").val();
   var idun=  $("#idun").val();

   var parametros ={ 
        "idun":idun,
        "unidad":unidad,
   };

   if(unidad==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
           

                if(respuesta==1){
                    $.alert("Esta unidad ya se encuentra registrada");
                }else{

                    $('#myModal').modal('hide');
                    actualiza_unidades();
                }

                

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }

}



function actualiza_unidades(){



$.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_unidades",
          type: "get",

          success: function(respuesta){ 

            $('#div_unidades').html(respuesta); 

            var table = $("#tblUnidades-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function borra_unidad(id) {

    var parametros ={ 
        "id":id,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar esta unidad?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_unidad",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_unidades();
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}


function tipo_vendedor(tipo,id){

   if (tipo==0){
      var web="crea_tipo_vendedor";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_tipo_vendedor";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);
          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function captura_tipo_vendedor(dato){



if (dato==0){
      var web="crea_tipo_ven";
   }else{
      var web="editar_tipo_vendedor";
   }

   var tipo_vendedor=  $("#tipo_vendedor").val();
   var idtv=  $("#idtv").val();

   var parametros ={ 
        "idtv":idtv,
        "tipo_vendedor":tipo_vendedor,
   };

   if(tipo_vendedor==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
           

                if(respuesta==1){
                    $.alert("Este tipo ya se encuentra registrada");
                }else{

                    $('#myModal').modal('hide');
                    actualiza_tipo_vendedores();
                }

                

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
}


function actualiza_tipo_vendedores(){


$.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_tipo_vendedores",
          type: "get",

          success: function(respuesta){ 

            $('#div_tipo_vendedores').html(respuesta); 

            var table = $("#tblTipovendedores-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}

function borra_tipo_vendedor(id){


    var parametros ={ 
        "id":id,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar este tipo de vendedor?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_tipo_vendedor",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_tipo_vendedores();
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}


function moneda(tipo,id){


   if (tipo==0){
      var web="crea_moneda";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_moneda";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);
          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}

function captura_moneda(dato){

 

if (dato==0){
      var web="crea_monedas";
   }else{
      var web="editar_monedas";
   }

   var moneda=  $("#moneda").val();
   var idm=  $("#idm").val();

   var parametros ={ 
        "idm":idm,
        "moneda":moneda,
   };

   if(moneda==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
           

                if(respuesta==1){
                    $.alert("Esta moneda ya se encuentra registrada");
                }else{

                    $('#myModal').modal('hide');
                    actualiza_monedas();
                }

                

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
}


function actualiza_monedas(){


$.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_monedas",
          type: "get",

          success: function(respuesta){ 

            $('#div_monedas').html(respuesta); 

            var table = $("#tblMonedas-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

}


function borra_moneda(id){


    var parametros ={ 
        "id":id,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar esta moneda?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_moneda",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_monedas();
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });

}


function categoria(tipo,id){



   if (tipo==0){
      var web="crea_categoria";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_categoria";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);
          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function captura_categoria(dato){


 

if (dato==0){
      var web="crea_categorias";
   }else{
      var web="editar_categorias";
   }

   var categoria=  $("#categoria").val();
   var idcat=  $("#idcat").val();

   var parametros ={ 
        "idcat":idcat,
        "categoria":categoria,
   };

   if(categoria==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
           

                if(respuesta==1){
                    $.alert("Esta categoría ya se encuentra registrada");
                }else{

                    $('#myModal').modal('hide');
                    actualiza_categorias();
                }

                

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
}

function actualiza_categorias(){


$.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_categorias",
          type: "get",

          success: function(respuesta){ 

            $('#div_categorias').html(respuesta); 
            var table = $("#tblCategorias-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function borra_categoria(id){


    var parametros ={ 
        "id":id,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar esta categoría?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_categoria",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_categorias();
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}


function sub_categoría(tipo,id){


   if (tipo==0){
      var web="crea_subcategoria";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_subcategoria";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);
          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function captura_subcategoria(dato){



if (dato==0){
      var web="crea_subcategorias";
   }else{
      var web="editar_subcategorias";
   }

   var id_categoria=  $("#id_categoria").val();
   var sub_categoria=  $("#sub_categoria").val();

   var idsc=  $("#idsc").val();

   var parametros ={ 
        "idsc":idsc,
        "id_categoria":id_categoria,
        "sub_categoria":sub_categoria,

   };

   if(id_categoria==0 || sub_categoria==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
           

                if(respuesta==1){
                    $.alert("Esta subcategoría ya se encuentra registrada");
                }else{

                    $('#myModal').modal('hide');
                    actualiza_subcategorias();
                }

                

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }

}


function actualiza_subcategorias(){


$.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_subcategorias",
          type: "get",

          success: function(respuesta){ 

            $('#div_subcategorias').html(respuesta); 

            var table = $("#tblSubcategorias-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function borra_subcategoria(id){


    var parametros ={ 
        "id":id,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar esta sub categoría?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_subcategoria",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_subcategorias();
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}


function personas(){

     var tipo_persona=  $("#tipo_persona").val();

     if(tipo_persona==1){


           document.getElementById("sweb").style.display = "inline";
           document.getElementById("rz").style.display = "inline";


           document.getElementById("pues").style.display = "none";
           document.getElementById("corre").style.display = "none";


     }else{


           document.getElementById("sweb").style.display = "none";
           document.getElementById("rz").style.display = "none";


           document.getElementById("pues").style.display = "inline";
           document.getElementById("corre").style.display = "inline";


     }
                 $(".percentage-mask").inputmask({mask: "99.99%",});

}




function empresa(){


   var nombre=  $("#nombre").val();
   var rfc=  $("#rfc").val();
   var telefono=  $("#telefono").val();
   var celular=  $("#celular").val();
   var nombre_contacto=  $("#nombre_contacto").val();
   var correo=  $("#correo").val();
   var face=  $("#face").val();
   var insta=  $("#insta").val();
   var web=  $("#web").val();
   var direccion=  $("#direccion").val();
   var condiciones=  $("#condiciones").val();
   var tipo_cambio=  $("#tipo_cambio").val();

   var parametros ={ 
        "nombre":nombre,
        "rfc":rfc,
        "telefono":telefono,
        "celular":celular,
        "nombre_contacto":nombre_contacto,
        "correo":correo,
        "face":face,
        "insta":insta,
        "web":web,
        "direccion":direccion,
        "condiciones":condiciones,
        "tipo_cambio":tipo_cambio,

      
   };

   if(nombre==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/empresa",
          type: "get",
          data:parametros,
          success: function(respuesta){ 
                         

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
}


function sube_logo(){

  var formData = new FormData($("#formUpload")[0]);
    $.ajax({
            url:"/api/v1/sube_logo",
            type: 'post',
            method: "post",        
            data:  formData,'id':1,
            //async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta){ 


            },  
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
               // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
            }   

        });

}

function sube_fotos_productos(id){

  var formData = new FormData($("#formUpload"+id)[0]);
    $.ajax({
            url:"/api/v1/sube_fotos_productos",
            type: 'post',
            method: "post",        
            data:  formData,
            //async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta){ 


            },  
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
               // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
            }   

        });

}

function validarFile(all)
    {
        //EXTENSIONES Y TAMANO PERMITIDO.
        var extensiones_permitidas = [".png", ".bmp", ".jpg", ".jpeg",".gif"];
        var rutayarchivo = all.value;
        var ultimo_punto = all.value.lastIndexOf(".");
        var extension = rutayarchivo.slice(ultimo_punto, rutayarchivo.length);
        if(extensiones_permitidas.indexOf(extension) == -1)
        {   

              $.confirm({
                   animation: 'zoom',
                   title: '<p style="text-aling:center" class="text-bold">Mensaje</p>',
                   content: '<h4 style="text-aling:center" class="text-bold">archivo no valido</h4>',
                   buttons: {
                       Ok: function () {
                        
                       }
                   }
               });

            document.getElementById(all.id).value = "";
            return; 
        }else{
          sube_logo();
        }
        
    }


function validarFile2(all,id)
    {
        //EXTENSIONES Y TAMANO PERMITIDO.
        var extensiones_permitidas = [".png", ".bmp", ".jpg", ".jpeg",".gif"];
        var rutayarchivo = all.value;
        var ultimo_punto = all.value.lastIndexOf(".");
        var extension = rutayarchivo.slice(ultimo_punto, rutayarchivo.length);
        if(extensiones_permitidas.indexOf(extension) == -1)
        {   

              $.confirm({
                   animation: 'zoom',
                   title: '<p style="text-aling:center" class="text-bold">Mensaje</p>',
                   content: '<h4 style="text-aling:center" class="text-bold">archivo no valido</h4>',
                   buttons: {
                       Ok: function () {
                        
                       }
                   }
               });

            document.getElementById(all.id).value = "";
            return; 
        }else{
          sube_fotos_productos(id);
        }
        
    }

 function fabricante(tipo,id){


   if (tipo==0){
      var web="crea_fabricante";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_fabricante";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);
            $('.international-inputmask').inputmask("+99(999)999-9999");
            $('.decimal-inputmask').inputmask({ "alias": "decimal" , "radixPoint": "." });

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
    }

function captura_fabricante(dato) {
  
  if (dato==0){
      var webs="crea_captuta_fabricante";
   }else{
      var webs="editar_captura_fabricante";
   }

   var nombre=  $("#nombre").val();
   var tel1=  $("#tel1").val();
   var tel2=  $("#tel2").val();
   var razon=  $("#razon").val();
   var rfc=  $("#rfc").val();
   var web=  $("#web").val();
   var direccion=  $("#direccion").val();
   var colonia=  $("#colonia").val();
   var estado=  $("#estado").val();
   var municipio=  $("#municipio").val();
   var cp=  $("#cp").val();
   var pais=  $("#pais").val();
   var comentarios=  $("#comentarios").val();
   var condiciones=  $("#condiciones").val();
   var idf=  $("#idf").val();

    var parametros ={ 
        "nombre":nombre,
        "tel1":tel1,
        "tel2":tel2,
        "razon":razon,
        "rfc":rfc,
        "web":web,
        "direccion":direccion,
        "colonia":colonia,
        "estado":estado,
        "municipio":municipio,
        "cp":cp,
        "pais":pais,
        "comentarios":comentarios,
        "condiciones":condiciones,
        "idf":idf, 
                
   };


   if(nombre==""  || tel1=="" || estado=="" || municipio==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+webs,
          type: "get",
          data:parametros,
          success: function(respuesta){ 


                   if(dato==0){

                      $('#myModal').modal('hide');
                      actualiza_tbl_fabricantes();
                     
                   }
                  
          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
 }

function actualiza_tbl_fabricantes() {
  

   $.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_fabricantes",
          type: "get",
          success: function(respuesta){ 

            $('#div_fabricantes').html(respuesta); 

            var table = $("#tblFabricantes-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function borra_fabricante(id){

    var parametros ={ 
        "id":id,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar este fabricante?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_fabricante",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_tbl_fabricantes();
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}

function activa_fabricante(id){


   var parametros ={ 
        "id":id,
        "activo":3,                      
   };
    $.ajax({
              url:"/api/v1/activa_fabricante",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                  
              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                 //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });
}



function contactos_fabricantes(tipo,id){


  if (tipo==0){
      var web="crea_contacto_fabricante";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_contacto_fabricante";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);

             $(".email-inputmask").inputmask("email", { onUnMask: function(maskedValue, unmaskedValue) {
              return unmaskedValue;
            }});
            $('.international-inputmask').inputmask("+99(999)999-9999");

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function captura_contacto_fabricante(dato){


 if (dato==0){
      var web="crea_captuta_contacto_fabricante";
   }else{
      var web="editar_captura_contacto_fabricante";
   }

   var nombre=  $("#nombre_contacto").val();
   var correo=  $("#correo_contacto").val();
   var telefono=  $("#telefono_contacto").val();
   var puesto=  $("#puesto_contacto").val();
   var idconf=  $("#idconf").val();
   var id_fabricante=  $("#idf").val();
   var comentarios=  $("#comentarios_contacto").val();
   
   var parametros ={ 
        "nombre":nombre,
        "correo":correo,
        "telefono":telefono,
        "puesto":puesto,
        "id_fabricante":id_fabricante,
        "comentarios":comentarios,
        "idconf":idconf,                       
   };

   if(nombre=="" || correo==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            if(respuesta==1){
                $.alert("Este correo ya se encuentra registro");
            }else{

                $('#myModal').modal('hide');
                actualiza_contactos_fabricantes(id_fabricante);

            }  

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
}


function actualiza_contactos_fabricantes(id_fabricante){

var parametros ={ 
        "id_fabricante":id_fabricante,                       
   };

$.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_contactos_fabricantes",
          type: "get",
           data:parametros,

          success: function(respuesta){ 

            $('#div_contactos_fabricantes').html(respuesta); 

            var table = $("#tblContactosFabricantes-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

}


function borra_contacto_fabricante(id,id_fabricante){

  var parametros ={ 
        "id":id,
        "id_fabricante":id_fabricante,                      
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar este contacto del fabricante?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_contacto_fabricante",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_contactos_fabricantes(id_fabricante);
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}


function captura_producto(dato){


 if (dato==0){
      var web="crea_captuta_producto";
   }else{
      var web="editar_captura_producto";
   }
   var id_fabricante=  $("#id_fabricante").val();
   var id_producto=  $("#id_producto").val();
   var nombre=  $("#nombre").val();
   var idp=  $("#idp").val();
   var idconf=  $("#idconf").val();
   var codigo_producto=  $("#codigo_producto").val();
   var marca=  $("#marca").val();
   var modelo=  $("#modelo").val();
   var sku=  $("#sku").val();
   var codigo_barras=  $("#codigo_barras").val();
   var descripcion=  $("#descripcion").val();
   var descripcion2=  $("#descripcion2").val();
   var id_categoria=  $("#id_categoria").val();
   var id_subcategoria=  $("#id_subcategoria").val();
   var precio=  $("#precio").val();
   var id_moneda=  $("#id_moneda").val();
   var volumen=  $("#volumen").val();
   var id_unidad=  $("#id_unidad").val();
   var id_origen=  $("#id_origen").val();
   var unidades_paquete=  $("#unidades_paquete").val();
   var unidades_paquete=  $("#unidades_paquete").val();
   var tiempo_entrega=  $("#tiempo_entrega").val();
   var presentacion=  $("#presentacion").val();
   var pedido_minimo=  $("#pedido_minimo").val();
   var id_vende=  $("#id_vende").val();
   var id_color=  $("#id_color").val();
   var estatus=  $("#estatus").val();

   
   var parametros ={ 
        "id_fabricante":id_fabricante,
        "id_producto":id_producto,
        "nombre":nombre,
        "idp":idp,
        "codigo_producto":codigo_producto,
        "marca":marca,
        "modelo":modelo,
        "sku":sku,
        "codigo_barras":codigo_barras,
        "descripcion":descripcion,
        "descripcion2":descripcion2,
        "id_categoria":id_categoria,
        "id_subcategoria":id_subcategoria,
        "precio":precio,
        "id_moneda":id_moneda,
        "volumen":volumen,
        "id_unidad":id_unidad,
        "id_origen":id_origen,
        "unidades_paquete":unidades_paquete,
        "unidades_paquete":unidades_paquete,
        "tiempo_entrega":tiempo_entrega,  
        "presentacion":presentacion,
        "pedido_minimo":pedido_minimo,
        "id_vende":id_vende,
        "id_color":id_color,
        "estatus":estatus,                       
                     
   };

   if(id_fabricante==0 || id_producto=="" || nombre=="" || codigo_producto=="" || pedido_minimo==""   ){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 

                if(respuesta==1){
                    $.alert("Esta ID de producto ya se encuentra registrado");
                }else{

                    if(dato==0){
                      $('#myModal').modal('hide');
                      actualiza_productos();
                    }
                    
                }
             

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
}


function actualiza_productos(){


$.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_productos",
          type: "get",

          success: function(respuesta){ 

            $('#div_productos').html(respuesta); 

            var table = $("#tblProductos-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      }); 
}

function borra_producto(id){

var parametros ={ 
        "id":id,
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar este producto?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_producto",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_productos();
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });
    
}

function bs_subcategoria(){

     var id_categoria=  $("#id_categoria").val();
     var parametros ={ 
        "id_categoria":id_categoria,                      
   };
    $.ajax({
              url:"/api/v1/bs_subcategoria",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                  
                $('#id_subcategoria').html(respuesta); 


              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                 //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });

}

function activa_producto(id){

   var parametros ={ 
        "id":id,
        "activo":3,                      
   };
    $.ajax({
              url:"/api/v1/activa_producto",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                  
              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                 //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });

}

function guarda_titulo(){


     var titulo1=  $("#titulo1").val();
     var titulo2=  $("#titulo2").val();
     var titulo3=  $("#titulo3").val();
     var titulo4=  $("#titulo4").val();
     var titulo5=  $("#titulo5").val();

     var parametros ={ 
        "titulo1":titulo1,
        "titulo2":titulo2,                      
        "titulo3":titulo3,                      
        "titulo4":titulo4,                      
        "titulo5":titulo5,                      
   }
    $.ajax({
              url:"/api/v1/guarda_titulo",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                  

              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                 //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });
}




function guarda_costo(id_producto){


     var lista1=  $("#lista1"+id_producto).val();
     var lista2=  $("#lista2"+id_producto).val();
     var lista3=  $("#lista3"+id_producto).val();
     var lista4=  $("#lista4"+id_producto).val();
     var lista5=  $("#lista5"+id_producto).val();

     var parametros ={ 
        "lista1":lista1,
        "lista2":lista2,                      
        "lista3":lista3,                      
        "lista4":lista4,                      
        "lista5":lista5,
        "id_producto":id_producto,                      
                      
   }
    $.ajax({
              url:"/api/v1/guarda_costo",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                  

              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert(" Algo a ocurrido checar la lista de precios en descargas posible duplicado de IDB producto Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });
}


function baja_lista_precios(){

          var url = '/api/v1/baja_lista_precios';
          window.open(url,'_blank');
}


function baja_formatos(){

      var formatos=  $("#formatos").val();
      var parametros ={ 
              "formatos":formatos, 
     
         };

         if(formatos==0){
             $.alert("Selecciona una opción para continuar");
         }else{


          $.ajax({
                    url:"/api/v1/baja_productos",
                    type: "get",
                    data:parametros,

                    success: function(respuesta){ 

                      $('#descargas').html(respuesta); 

                      
                    },  
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                     //   alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                   //  $.alert("Tipo de equipo no definido");
                    }   

                });

         }

}




function validarFile_csv(all)
    {
        //EXTENSIONES Y TAMANO PERMITIDO.
        var extensiones_permitidas = [".csv"];
        var rutayarchivo = all.value;
        var ultimo_punto = all.value.lastIndexOf(".");
        var extension = rutayarchivo.slice(ultimo_punto, rutayarchivo.length);
        if(extensiones_permitidas.indexOf(extension) == -1)
        {   

              $.confirm({
                   animation: 'zoom',
                   title: '<p style="text-aling:center" class="text-bold">Mensaje</p>',
                   content: '<h4 style="text-aling:center" class="text-bold">Extención no permitida </h4>',
                   buttons: {
                       Ok: function () {
                        
                       window.location.href = '/masivos';


                        
                       }
                   }
               });

        }
        
    }

function colores(tipo,id) {
  

  if (tipo==0){
      var web="crea_color";
      var parametros ={ "id":id,"tipo":tipo,};
   }else{
      var web="edita_color";
      var parametros ={ "id":id,"tipo":tipo, };
   }

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 
            $('#contenido').html(respuesta);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}

function captura_color(dato){


 if (dato==0){
      var web="crea_captuta_color";
   }else{
      var web="editar_captura_color";
   }
   var color=  $("#color").val();
   var idcol=  $("#idcol").val();
   
   var parametros ={ 
        "idcol":idcol,
        "color":color,
                     
   };

   if(color==""){


      $.confirm({
           animation: 'zoom',
           icon: 'fa fa-warning', type:'dark',
           title: 'Mensaje',
           content: '<h3 style="text-aling:center" ><strong>Verificar campos requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
          url:"/api/v1/"+web,
          type: "get",
          data:parametros,
          success: function(respuesta){ 

                if(respuesta==1){
                    $.alert("Esta Color ya se encuentra registrado");
                }else{

                      $('#myModal').modal('hide');
                      actualiza_colores();
                    
                    
                }
             

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   }
}

function actualiza_colores(){


$.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_colores",
          type: "get",

          success: function(respuesta){ 

            $('#div_colores').html(respuesta); 

            var table = $("#tblColors-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      }); 
}

function borra_color(id){


var parametros ={ 
        "id":id,
   };

    $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar este color?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                     $.ajax({
                            url:"/api/v1/borra_color",
                            type: "get",
                            data:parametros,
                            success: function(respuesta){ 

                              actualiza_colores();
                                

                            },  
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                               //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            }   

                        });
                     
                   },
                   Cancelar: function(){

                   }
               }
           });

}


function genera_cot(){

    $.confirm({ 
       animation: 'zoom',
        icon: 'fa fa-warning', type:'dark',

        title: 'Mensaje',
        content: '<h4 style="text-aling:center" ><strong>Se generara una nueva cotización ¿Deseas continuar? Si te encuentras en una cotización la información se perdera</strong></h4>',
        buttons: {
           Aceptar: function () {

                $.ajax({ 
                      url:"/api/v1/nueva_cotss",
                      type: "get",
                      success: function(respuesta){ 
                        
                        window.location.href = '/nueva_cot';

                      },  
                      error: function(XMLHttpRequest, textStatus, errorThrown) { 
                       //   alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                     //  $.alert("Tipo de equipo no definido");
                      }   

                  });
                    
           },
           Cancelar: function(){

           }
       }
   })

}


function guarda_cotizacion(id_cot){

   var nombre=  $("#nombre").val();
   var id_tipo_cliente=  $("#id_tipo_cliente").val();
   var cliente=  $("#cliente").val();
   var id_cliente=  $("#id_cliente").val();
   var correo=  $("#correo").val();
   var comentarios=  $("#comentarios").val();
   var descuento=  $("#descuento").val();
   var telefono=  $("#telefono").val();
   var contacto=  $("#contacto").val();
   var id_contacto=  $("#id_contacto").val();
   var condiciones=  $("#condiciones").val();
   var lista=  $("#lista").val();
   var tipo_cambio=  $("#tipo_cambio").val();

   var iva=  $("#iva").val();
   if(id_tipo_cliente==0){


   var parametros ={ 

        "nombre":nombre,
        "id_tipo_cliente":id_tipo_cliente,
        "cliente":cliente,
        "correo":correo,
        "comentarios":comentarios,
        "descuento":descuento,
        "telefono":telefono,
        "contacto":contacto,
        "id_cot":id_cot, 
        "condiciones":condiciones,
        "lista":lista, 
        "iva":iva, 
        "tipo_cambio":tipo_cambio, 

   
                   
   };

   }else{

        var parametros ={ 

        "nombre":nombre,
        "id_tipo_cliente":id_tipo_cliente,
        "id_cliente":id_cliente,
        "correo":correo,
        "comentarios":comentarios,
        "descuento":descuento,
        "telefono":telefono,
        "id_contacto":id_contacto,
        "id_cot":id_cot,
        "condiciones":condiciones,
        "iva":iva, 
        "tipo_cambio":tipo_cambio, 



                   
   };

   }
   



    $.ajax({
          url:"/api/v1/guarda_cotizacion",
          type: "get",
          data:parametros,
          success: function(respuesta){             
           actualiza_cotizacion(id_cot);
          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });

   
}

function convertir_oc(id_cotizacion){

  var parametros ={ 
        "id_cotizacion":id_cotizacion,
        "estatus":0,
                   
   };

   $.confirm({
       animation: 'zoom',
       icon: 'fa fa-warning', type:'dark',
       title: 'Mensaje',
       content: '<h4 style="text-aling:center" ><strong>¿Deseas convertir esta cotización en OC?</strong></h4>',
       buttons: {
           Aceptar: function () {
                                         
             $.ajax({
                    url:"/api/v1/convertir_oc",
                    type: "get",
                     data:parametros,

                    success: function(respuesta){ 
                       window.location.href = '/oc.rev';

                    },  
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }   

                }); 
           },
           cancelar: function () {
           }
       }
   })
}

function convertir_cot(id_cotizacion) {
  
    var parametros ={ 
        "id_cotizacion":id_cotizacion,
        "estatus":1,
                   
   };

   $.confirm({
       animation: 'zoom',
       icon: 'fa fa-warning', type:'dark',
       title: 'Mensaje',
       content: '<h4 style="text-aling:center" ><strong>¿Deseas convertir esta OC en cotización?</strong></h4>',
       buttons: {
           Aceptar: function () {
                                         
             $.ajax({
                    url:"/api/v1/convertir_cot",
                    type: "get",
                     data:parametros,

                    success: function(respuesta){ 
                       window.location.href = '/cots';

                    },  
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }   

                }); 
           },
           cancelar: function () {
           }
       }
   })
}


function calcula_iva(tot){

     var iva=$('#iva').val();

      var parametros ={ 
              "iva":iva,
               "tot":tot,  
         };

       $.ajax({
            url:"/api/v1/calcula_iva",
            type: "get",
            data:parametros,

            success: function(respuesta){ 
              
              // $('#tot').html(respuesta.dato1);
              // $('#iva').val(respuesta.dato2);

            },  
            error: function(XMLHttpRequest, textStatus, errorThrown) { 

            }   

        });

}



function actualiza2(id_cot){


   var flete=  $("#flete").val();
   var iva=  $("#iva").val();
   var anticipo=  $("#anticipo").val();
   var descuento_aplicado=  $("#descuento_aplicado").val();
   var comentarios=  $("#comentarios_encot").val();
   var condiciones=  $("#condiciones_encot").val();


var parametros ={ 
              "id_cot":id_cot,
              "flete":flete,
              "iva":iva,
              "comentarios":comentarios,
              "condiciones":condiciones,
              "anticipo":anticipo,
              "descuento_aplicado":descuento_aplicado,
         };
$.ajax({
            url:"/api/v1/actualiza2",
            type: "get",
            data:parametros,

            success: function(respuesta){ 

               actualiza_totales(0,id_cot);

            },  
            error: function(XMLHttpRequest, textStatus, errorThrown) { 

            }   

        });
}

function revive(id){

var parametros ={ 
        "id":id,
                       
   };
   $.confirm({
       animation: 'zoom',
       icon: 'fa fa-warning', type:'dark',
       title: 'Mensaje',
       content: '<h4 style="text-aling:center" ><strong>¿Al abrir esta cotización se perdera cualquiera cotización activa?</strong></h4>',
       buttons: {
           Aceptar: function () {
                                         
             $.ajax({
                    url:"/api/v1/revive",
                    type: "get",
                     data:parametros,

                    success: function(respuesta){ 
                       window.location.href = '/revives.rev';

                    },  
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }   

                }); 
           },
           cancelar: function () {
           }
       }
   })
}

function agrega_producto(id_producto,id_cotizacion){

        var parametros ={ 
        "id_producto":id_producto,
        "id_cotizacion":id_cotizacion,
              
   };


    $.ajax({
          url:"/api/v1/agrega_producto",
          type: "get",
          data:parametros,
          success: function(respuesta){             

             actualiza_cotizacion(id_cotizacion);
             actualiza_totales(0,id_cotizacion);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function actualiza_cotizacion(id_cotizacion){

   var parametros ={ 
        "id_cotizacion":id_cotizacion,              
   };
    $.ajax({
          url:"/api/v1/actualiza_cotizacion",
          type: "get",
          data:parametros,
          success: function(respuesta){             

              $('#div_cotizacion').html(respuesta);
              $('.decimal-inputmask').inputmask({ "alias": "decimal" , "radixPoint": "." });
              $(".currency").inputmask({ alias : "currency", prefix: '$ ' });
              $(".percentage-mask").inputmask({mask: "99.99%",});



          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function borra_registro_detalle(id_producto,id_cotizacion){
  $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar este producto?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                   agrega_producto(id_producto,id_cotizacion);
                   actualiza_tabla_cotizados(id_cotizacion);
                   actualiza_totales(0,id_cotizacion);


                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}


function actualiza_tabla_cotizados(id_cotizacion){


   var parametros ={ 
        "id_cotizacion":id_cotizacion,              
   };
  $.ajax({
          url:"/api/v1/actualiza_tabla_cotizados",
          type: "get",
          data:parametros,
          success: function(respuesta){             

              $('#div_productos_cotizados').html(respuesta);

                var table = $("#tblProductos-table").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function guarda_detalles(id_dt,id_cotizacion){
   
   var descuento=  $("#descuentos"+id_dt).val();
   var cantidad=  $("#cantidad"+id_dt).val();
   var costo=  $("#costomx"+id_dt).val();
   var id_lista=  $("#idl").val();


   var parametros ={ 
        "descuento":descuento,
        "cantidad":cantidad,              
        "costo":costo,
        "id_lista":id_lista,
        "id_dt":id_dt,        
        "id_cotizacion":id_cotizacion,              
              
   };
    $.ajax({
          url:"/api/v1/guarda_detalles",
          type: "get",
          data:parametros,
          success: function(respuesta){             

              muestra_filas_detalles(id_dt,id_cotizacion);
          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function muestra_filas_detalles(id_dt,id_cotizacion){

  var parametros ={ 
        "id_dt":id_dt,        
        "id_cotizacion":id_cotizacion,
        "tot_fila":0,         
   };
    $.ajax({
          url:"/api/v1/muestra_filas_detalles",
          type: "get",
          data:parametros,
          success: function(respuesta){             

               $("#tot"+id_dt).val(respuesta);
               
               actualiza_totales(id_dt,id_cotizacion);
               actualiza2(id_cotizacion);
               
          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}

function actualiza_totales(id_dt,id_cotizacion){

    var parametros ={ 
        "id_dt":id_dt,        
        "id_cotizacion":id_cotizacion,
              
   };
    $.ajax({
          url:"/api/v1/actualiza_totales",
          type: "get",
          data:parametros,
          success: function(respuesta){   

             $("#sub_tot").val(respuesta.tot_filas);
             $("#con_descuento").val(respuesta.desas);
             $("#ivas").val(respuesta.iva);
             $("#ant").val(respuesta.ant);
             $("#totales").val(respuesta.total);
               
               
          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      });
}


function baja_cotiza_xls(id_cotizacion){

          var url = '/api/v1/baja_cotiza_xls?id_cotizacion='+id_cotizacion;
          window.open(url,'_blank');
}

function borra_cotizacion(id){

var parametros ={ 
        "id":id,
              
   };

  $.confirm({
               animation: 'zoom',
               icon: 'fa fa-warning', type:'dark',
               title: 'Mensaje',
               content: '<h3 style="text-aling:center" ><strong>Deseas borrar esta cotización?</strong></h3>',
               buttons: {
                   Aceptar: function () {

                       $.ajax({
                        url:"/api/v1/borra_cotizacion",
                        type: "get",
                        data:parametros,
                        success: function(respuesta){   

                             actualiza_cotizaciones();
                        },  
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                           //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                        }   

                    });

                     
                   },
                   Cancelar: function(){

                   }
               }
           });
}

function actualiza_cotizaciones(){

$.blockUI({ message: 'Actualizando.' }); 
   $.ajax({
          url:"/api/v1/actualiza_cotizaciones",
          type: "get",

          success: function(respuesta){ 

            $('#div_cotizaciones').html(respuesta); 

            var table = $("#tblCotizaciones-table2").DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });
            setTimeout($.unblockUI, 50);

          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      }); 

}



function guarda(){

$.ajax({
              url:"/api/v1/guarda",
              type: "get",
              success: function(respuesta){ 
                  window.location.href = '/tblCotizaciones';
              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
              // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });  


}

function baja_cotiza_pdf(id_cotizacion){

      var parametros ={ 
        "id_cotizacion":id_cotizacion,
              
   };
    $.ajax({
          url:"/api/v1/baja_cotiza_pdf",
          type: "get",
          data:parametros,
          success: function(respuesta){   

               
               
          },  
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
             //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
          }   

      
   });  

}

function baja_reporte_xls(){
  
          var url = '/api/v1/baja_reporte_xls';
          window.open(url,'_blank');
}


function ver_catalogo(catalogo,id,tipo,campo1){
 var parameters = {'catalogo':catalogo,
                    'id':id,
                    'tipo':tipo, 
                    'campo':campo1
                    }
  $.ajax({
            data: parameters,
            url:   '/api/v1/opciones_catalogo',
            dataType: 'json',
            type:  'get',
            success:  function (response) { 
               $("#contenido").html(response);
               $("#modal_myModal").removeClass("modal-lg");
               $("#modal_myModal").addClass("modal");
               $('.modal-dialog').draggable({handle: ".modal-header"});
            }
        }); 
}

function guarda_catalogo(catalogo,id,tipo,nom_table){
  if($("#fabricante").val()==''){
    $.alert("Llene todos los campos");
  }else{
   var formData = new FormData($("#catalogos_forma")[0]);
   $.ajax({
            url:"/api/v1/guarda_catalogo",
            type: 'POST',
            method: "POST",        
            data:  formData,
            //async: false,
            cache: false,
            contentType: false,
            processData: false, 
            success: function(respuesta){
                $('#'+nom_table).html(respuesta);
                $('.zero-configuration').DataTable({
                      "language": {
                      "lengthMenu": "",
                      "pageLength": "500",
                      "info": "",
                      "infoEmpty": "Resultados no encontrados",
                      "search" : "Buscar: ",
                      "paginate" : {
                      "next" : "Siguiente",
                      "previous" : "Anterior"
                      },

                      "infoFiltered": "(filtrado de _MAX_ totales)"
                      },
                  });

                $("#myModal").modal('hide');
                $("#catalogos_forma")[0].reset();
            }
        });
    }
}

function elimina_catalogo(catalogo,id,nom_table,campo1){
  var parameters = {'catalogo':catalogo,
                    'id':id
                    }

  $.confirm({
            title: 'Cotiza.tech',
            content: 'Estas seguro deseas elimniar este registro?',
            type:'orange',
            buttons: {
                confirmar: function () {
                  $.ajax({
                          data: parameters,
                          url: '/api/v1/elimina_catalogo',
                          dataType: 'json',
                          type:  'get',
                          success:  function (response) {  
                            $('#'+nom_table).html(response);
                            $("#"+nom_table+'-'+'table').DataTable({
                                  "language": {
                                  "lengthMenu": "",
                                  "pageLength": "500",
                                  "info": "",
                                  "infoEmpty": "Resultados no encontrados",
                                  "search" : "Buscar: ",
                                  "paginate" : {
                                  "next" : "Siguiente",
                                  "previous" : "Anterior"
                                  },

                                  "infoFiltered": "(filtrado de _MAX_ totales)"
                                  },
                              });
                          }
                      }); 

                },
                cancelar: function () {}
              } 
          });
}
