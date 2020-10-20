<?php

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::group(['middleware' => 'auth'], function () {

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::get('home', 'HomeController@index')->name('home'); 


Route::resource('tblVendedores', 'tbl_vendedoresController');

Route::resource('tblClientes', 'tbl_clientesController');

Route::resource('tblContactosClientes', 'tbl_contactos_clientesController');

Route::resource('tblTipoClientes', 'tbl_tipo_clienteController');

Route::resource('tblProductos', 'tbl_productosController');

Route::resource('tblUnidades', 'tbl_unidadesController');

Route::resource('users', 'usersController');

Route::resource('tblEntregas', 'tbl_entregasController');

Route::resource('tblTipoPrecios', 'tbl_tipo_precioController');

Route::resource('tblTipoPrecioVendedors', 'tbl_tipo_precio_vendedorController');

Route::resource('tblTipoClientes', 'tbl_tipo_clienteController');

Route::resource('tblMonedas', 'tbl_monedasController');

Route::resource('tblTipoVendedors', 'tbl_tipo_vendedorController');

Route::resource('tblCategorias', 'tbl_categoriasController');

Route::resource('tblSubcategorias', 'tbl_subcategoriasController');

Route::resource('tblEmpresas', 'tbl_empresaController');

Route::resource('tblFabricantes', 'tbl_fabricantesController');

Route::resource('tblContactosFabricantes', 'tbl_contactos_fabricantesController');

Route::resource('tblListaPrecios', 'tbl_lista_preciosController');

Route::resource('tblTitulosListas', 'tbl_titulos_listaController');

Route::resource('tblInventarios', 'tbl_inventarioController');

Route::get('masivos', 'tbl_lista_preciosController@masivos')->name('masivos');

Route::post('/subidas', 'tbl_lista_preciosController@subidas')->name('subidas');

Route::resource('tblCotizaciones', 'tbl_cotizacionesController');

Route::resource('tblDetalleCotizacions', 'tbl_detalle_cotizacionController');

Route::resource('tblColors', 'tbl_colorController');

Route::get('nueva_cot', 'tbl_cotizacionesController@nueva_cot')->name('cotizacions.nv'); 

Route::get('revives.rev', 'tbl_cotizacionesController@revives')->name('revives.rev'); 

Route::get('baja_cotiza_pdf', 'tbl_detalle_cotizacionController@baja_cotiza_pdf')->name('download.cotiza');

Route::get('envia_cotiza_pdf', 'tbl_detalle_cotizacionController@envia_cotiza_pdf')->name('envia.cotiza');

Route::get('oc.rev', 'tbl_cotizacionesController@oc')->name('oc.rev'); 

Route::get('convertir_cot', 'tbl_cotizacionesController@convertir_cot')->name('convertir_cot'); 

Route::get('cots', 'tbl_cotizacionesController@index')->name('cots'); 

Route::get('ver_oc', 'tbl_cotizacionesController@ver_oc');
Route::get('categorias', 'CatalogosController@categorias')->name('categorias.index');

});


Route::group(['middleware' => 'auth','prefix'=>'api/v1/'], function () {

//vendedores

Route::get('crea_vendedor', 'tbl_vendedoresController@create');

Route::get('edita_vendedor', 'tbl_vendedoresController@edit');

Route::get('crea_captuta_vendedor', 'tbl_vendedoresController@store');

Route::get('editar_captura_vendedor', 'tbl_vendedoresController@update');

Route::get('actualiza_vendedores', 'tbl_vendedoresController@actualiza_vendedores');

Route::get('borra_vendedor', 'tbl_vendedoresController@destroy');

//estados y municipios

Route::get('bs_municipio', 'tbl_vendedoresController@bs_municipio');

Route::get('activa_vendedor', 'tbl_vendedoresController@activa_vendedor');

///clientes

Route::get('crea_cliente', 'tbl_clientesController@create');

Route::get('crea_captuta_cliente', 'tbl_clientesController@store');

Route::get('actualiza_clientes', 'tbl_clientesController@actualiza_clientes');

Route::get('borra_cliente', 'tbl_clientesController@destroy');

Route::get('activa_cliente', 'tbl_clientesController@activa_cliente');

Route::get('editar_captura_cliente', 'tbl_clientesController@update');

// tipo cliente

Route::get('crea_tipo_cliente', 'tbl_tipo_clienteController@create');

Route::get('crea_captuta_tipo_cliente', 'tbl_tipo_clienteController@store');

Route::get('edita_tipo_cliente', 'tbl_tipo_clienteController@edit');

Route::get('editar_captura_tipo_cliente', 'tbl_tipo_clienteController@update');

Route::get('actualiza_tipo_cliente', 'tbl_tipo_clienteController@actualiza_tipo_cliente');

Route::get('borra_tipo_cliente', 'tbl_tipo_clienteController@destroy');

// contacto cliente

Route::get('crea_contacto_cliente', 'tbl_contactos_clientesController@create');

Route::get('edita_contacto_cliente', 'tbl_contactos_clientesController@edit');

Route::get('crea_captuta_contacto_cliente', 'tbl_contactos_clientesController@store');

Route::get('editar_captura_contacto_cliente', 'tbl_contactos_clientesController@update');

Route::get('actualiza_contactos_clientes', 'tbl_contactos_clientesController@actualiza_contactos_clientes');

Route::get('borra_contacto_cliente', 'tbl_contactos_clientesController@destroy');

// direccion cliente

Route::get('crea_direccion_cliente', 'tbl_entregasController@create');

Route::get('edita_direccion_cliente', 'tbl_entregasController@edit');

Route::get('crea_entrega_cliente', 'tbl_entregasController@store');

Route::get('editar_entrega_cliente', 'tbl_entregasController@update');

Route::get('actualiza_entregas_clientes', 'tbl_entregasController@actualiza_entregas_clientes');

Route::get('borra_entrega_cliente', 'tbl_entregasController@destroy');

//usuarios

Route::get('crea_usuario', 'usersController@create');

Route::get('edita_usuario', 'usersController@edit');

Route::get('actualiza_usuarios', 'usersController@actualiza_usuarios');

Route::get('crea_usuarios', 'usersController@store');

Route::get('editar_usuarios', 'usersController@update');

Route::get('activa_usuario', 'usersController@activa_usuario');

Route::get('borra_usuario', 'usersController@destroy');

// productos

Route::get('crea_producto', 'tbl_productosController@create');

Route::get('edita_producto', 'tbl_productosController@edit');

Route::get('crea_captuta_producto', 'tbl_productosController@store');

Route::get('editar_captura_producto', 'tbl_productosController@update');

Route::get('actualiza_productos', 'tbl_productosController@actualiza_productos');

Route::get('borra_producto', 'tbl_productosController@destroy');

Route::get('activa_producto', 'tbl_productosController@activa_producto');

Route::post('sube_fotos_productos', 'tbl_productosController@sube_fotos_productos');

Route::get('bs_subcategoria', 'tbl_productosController@bs_subcategoria');

//  unidades

Route::get('crea_unidad', 'tbl_unidadesController@create');

Route::get('edita_unidad', 'tbl_unidadesController@edit');

Route::get('actualiza_unidades', 'tbl_unidadesController@actualiza_unidades');

Route::get('crea_uni', 'tbl_unidadesController@store');

Route::get('editar_uni', 'tbl_unidadesController@update');

Route::get('borra_unidad', 'tbl_unidadesController@destroy');

// monedas

Route::get('crea_moneda', 'tbl_monedasController@create');

Route::get('edita_moneda', 'tbl_monedasController@edit');

Route::get('crea_monedas', 'tbl_monedasController@store');

Route::get('editar_monedas', 'tbl_monedasController@update');

Route::get('actualiza_monedas', 'tbl_monedasController@actualiza_monedas');

Route::get('borra_moneda', 'tbl_monedasController@destroy');


// tipo vendedor

Route::get('crea_tipo_vendedor', 'tbl_tipo_vendedorController@create');

Route::get('edita_tipo_vendedor', 'tbl_tipo_vendedorController@edit');

Route::get('crea_tipo_ven', 'tbl_tipo_vendedorController@store');

Route::get('editar_tipo_vendedor', 'tbl_tipo_vendedorController@update');

Route::get('actualiza_tipo_vendedores', 'tbl_tipo_vendedorController@actualiza_tipo_vendedores');

Route::get('borra_tipo_vendedor', 'tbl_tipo_vendedorController@destroy');

//categorias

Route::get('crea_categoria', 'tbl_categoriasController@create');

Route::get('edita_categoria', 'tbl_categoriasController@edit');

Route::get('crea_categorias', 'tbl_categoriasController@store');

Route::get('editar_categorias', 'tbl_categoriasController@update');

Route::get('actualiza_categorias', 'tbl_categoriasController@actualiza_categorias');

Route::get('borra_categoria', 'tbl_categoriasController@destroy');

//sub categorias

Route::get('crea_subcategoria', 'tbl_subcategoriasController@create');

Route::get('edita_subcategoria', 'tbl_subcategoriasController@edit');

Route::get('crea_subcategorias', 'tbl_subcategoriasController@store');

Route::get('editar_subcategorias', 'tbl_subcategoriasController@update');

Route::get('actualiza_subcategorias', 'tbl_subcategoriasController@actualiza_subcategorias');

Route::get('borra_subcategoria', 'tbl_subcategoriasController@destroy');

// empresa

Route::get('empresa', 'tbl_empresaController@update');

Route::post('sube_logo', 'tbl_empresaController@sube_logo');

// fabricantes

Route::get('crea_fabricante', 'tbl_fabricantesController@create');

Route::get('edita_fabricante', 'tbl_fabricantesController@edit');

Route::get('crea_captuta_fabricante', 'tbl_fabricantesController@store');

Route::get('editar_captura_fabricante', 'tbl_fabricantesController@update');

Route::get('actualiza_fabricantes', 'tbl_fabricantesController@actualiza_fabricantes');

Route::get('borra_fabricante', 'tbl_fabricantesController@destroy');

Route::get('activa_fabricante', 'tbl_fabricantesController@activa_fabricante');

//contactos fabricantes

Route::get('crea_contacto_fabricante', 'tbl_contactos_fabricantesController@create');

Route::get('edita_contacto_fabricante', 'tbl_contactos_fabricantesController@edit');

Route::get('actualiza_contactos_fabricantes', 'tbl_contactos_fabricantesController@actualiza_contactos_fabricantes');

Route::get('crea_captuta_contacto_fabricante', 'tbl_contactos_fabricantesController@store');

Route::get('editar_captura_contacto_fabricante', 'tbl_contactos_fabricantesController@update');

Route::get('borra_contacto_fabricante', 'tbl_contactos_fabricantesController@destroy');

// titulos 

Route::get('guarda_titulo', 'tbl_titulos_listaController@update');

// precios

Route::get('guarda_costo', 'tbl_lista_preciosController@store');

Route::get('baja_lista_precios', 'tbl_lista_preciosController@baja_lista_precios');

// masivos

Route::get('baja_productos', 'tbl_lista_preciosController@baja_productos');

// colores

Route::get('crea_color', 'tbl_colorController@create');

Route::get('edita_color', 'tbl_colorController@edit');

Route::get('actualiza_colores', 'tbl_colorController@actualiza_colores');

Route::get('crea_captuta_color', 'tbl_colorController@store');

Route::get('editar_captura_color', 'tbl_colorController@update');

Route::get('borra_color', 'tbl_colorController@destroy');

// cotizacion

Route::get('/nueva_cotss', 'tbl_cotizacionesController@nueva_cotss');

Route::get('/guarda_cotizacion', 'tbl_cotizacionesController@update');

Route::get('/contacto', 'tbl_cotizacionesController@contacto');

Route::get('/contacto2', 'tbl_cotizacionesController@contacto2');

Route::get('info_con', 'tbl_cotizacionesController@info_con');

Route::get('cliente_descuento', 'tbl_cotizacionesController@cliente_descuento');

Route::get('revive', 'tbl_cotizacionesController@revive');

Route::get('calcula_iva', 'tbl_cotizacionesController@calcula_iva');

Route::get('actualiza2', 'tbl_cotizacionesController@actualiza2');

Route::get('borra_cotizacion', 'tbl_cotizacionesController@destroy');

Route::get('actualiza_cotizaciones', 'tbl_cotizacionesController@actualiza_cotizaciones');

Route::get('guarda', 'tbl_cotizacionesController@guarda');

Route::get('guarda_comentarios_cotizacion', 'tbl_cotizacionesController@guarda_comentarios_cotizacion');

Route::get('convertir_oc', 'tbl_cotizacionesController@convertir_oc');

Route::get('convertir_cot', 'tbl_cotizacionesController@convertir_cot');

Route::get('ver_cot', 'tbl_cotizacionesController@ver_cot');

Route::get('guarda_cotizacion_tc', 'tbl_cotizacionesController@guarda_cotizacion_tc');


//detalle cotizacion

Route::get('agrega_producto', 'tbl_detalle_cotizacionController@store');

Route::get('actualiza_cotizacion', 'tbl_detalle_cotizacionController@actualiza_cotizacion');

Route::get('actualiza_tabla_cotizados', 'tbl_detalle_cotizacionController@actualiza_tabla_cotizados');

Route::get('guarda_detalles', 'tbl_detalle_cotizacionController@guarda_detalles');

Route::get('muestra_filas_detalles', 'tbl_detalle_cotizacionController@muestra_filas_detalles');

Route::get('actualiza_totales', 'tbl_detalle_cotizacionController@actualiza_totales');

Route::get('baja_cotiza_xls', 'tbl_detalle_cotizacionController@baja_cotiza_xls');

Route::get('actualiza_lista', 'tbl_detalle_cotizacionController@actualiza_cotizacion');

Route::get('limpia_detalle', 'tbl_detalle_cotizacionController@limpia_detalle');


// oc

Route::get('baja_reporte_xls', 'tbl_cotizacionesController@baja_reporte_xls');

Route::get('opciones_catalogo', 'CatalogosController@opciones_catalogo');
Route::post('guarda_catalogo', 'CatalogosController@guarda_catalogo');
Route::get('elimina_catalogo', 'CatalogosController@elimina_catalogo');



});


















