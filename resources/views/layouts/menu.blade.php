<li class="nav-item">
    <a class="" href="{{ route('home') }}" >
      <i class="material-icons">home</i> Home
    </a>
</li>
<li class="nav-item">
    <a class="" href="{{ route('tblProductos.index') }}" >
      <i class="material-icons">construction</i> Productos
    </a>
</li>
<li class="nav-item">
    <a class="" href="{{ route('tblCotizaciones.index') }}" >
      <i class="material-icons">receipt_long</i> Cotizaciones
    </a>
</li>
<li class="nav-item">
    <a class="" href="{{ route('oc.rev') }}" >
      <i class="material-icons">attach_money</i> Ordenes de compra
    </a>
</li>

<li class=" nav-item"><a href="#"><i class="material-icons">settings</i> Administración</a>
    <ul class="menu-content">      
      <li class="nav-item">
            <a class="" href="{{ route('tblVendedores.index') }}" >
              <i class="material-icons">card_travel</i> Vendedores
            </a>
        </li>
      <li class="nav-item">
          <a class="" href="{{ route('tblClientes.index') }}" >
            <i class="material-icons">face</i> Clientes
          </a>
      </li>
      <li class="nav-item">
          <a class="" href="{{ route('users.index') }}" >
            <i class="material-icons">person</i> Usuarios
          </a>
      </li>
      <li class="nav-item">
          <a class="" href="{{ route('tblFabricantes.index') }}" >
            <i class="material-icons">engineering</i>Fabricantes 
          </a>
      </li>

      <li class="nav-item">
          <a class="" href="{{ route('tblTipoClientes.index') }}" >
            <i class="material-icons">settings</i> Catálogos
          </a>
      </li>
      <li class="nav-item">
          <a class="" href="{{ route('categorias.index') }}" >
            <i class="material-icons">airplay</i> Categorias
          </a>
      </li>
      <li class="nav-item">
          <a class="" href="{{ route('tblEmpresas.index') }}" >
            <i class="material-icons">location_city</i>Empresa 
          </a>
      </li>
      <li class="nav-item">
            <a class="" href="{{ route('tblListaPrecios.index') }}" >
              <i class="material-icons">table_view</i>Precios 
            </a>
        </li>
        <li class="nav-item">
            <a class="" href="{{ route('masivos') }}" >
              <i class="material-icons">cloud_upload</i>Masivos 
            </a>
        </li>

   </ul>
</li>






{{-- cloud_upload
<li class="{{ Request::is('tblContactosClientes*') ? 'active' : '' }}">
    <a href="{{ route('tblContactosClientes.index') }}"><i class="fa fa-edit"></i><span>Tbl Contactos Clientes</span></a>
</li>

<li class="{{ Request::is('tblTipoClientes*') ? 'active' : '' }}">
    <a href="{{ route('tblTipoClientes.index') }}"><i class="fa fa-edit"></i><span>Tbl Tipo Clientes</span></a>
</li> --}}

{{-- 
<li class="{{ Request::is('tblUnidades*') ? 'active' : '' }}">
    <a href="{{ route('tblUnidades.index') }}"><i class="fa fa-edit"></i><span>Tbl Unidades</span></a>
</li> --}}


{{-- <li class="{{ Request::is('tblEntregas*') ? 'active' : '' }}">
    <a href="{{ route('tblEntregas.index') }}"><i class="fa fa-edit"></i><span>Tbl Entregas</span></a>
</li>

<li class="{{ Request::is('tblTipoPrecios*') ? 'active' : '' }}">
    <a href="{{ route('tblTipoPrecios.index') }}"><i class="fa fa-edit"></i><span>Tbl Tipo Precios</span></a>
</li>

<li class="{{ Request::is('tblTipoPrecioVendedors*') ? 'active' : '' }}">
    <a href="{{ route('tblTipoPrecioVendedors.index') }}"><i class="fa fa-edit"></i><span>Tbl Tipo Precio Vendedors</span></a>
</li>

<li class="{{ Request::is('tblMonedas*') ? 'active' : '' }}">
    <a href="{{ route('tblMonedas.index') }}"><i class="fa fa-edit"></i><span>Tbl Monedas</span></a>
</li>

<li class="{{ Request::is('tblTipoVendedors*') ? 'active' : '' }}">
    <a href="{{ route('tblTipoVendedors.index') }}"><i class="fa fa-edit"></i><span>Tbl Tipo Vendedors</span></a>
</li>
 
<li class="{{ Request::is('tblCategorias*') ? 'active' : '' }}">
    <a href="{{ route('tblCategorias.index') }}"><i class="fa fa-edit"></i><span>Tbl Categorias</span></a>
</li>

<li class="{{ Request::is('tblSubcategorias*') ? 'active' : '' }}">
    <a href="{{ route('tblSubcategorias.index') }}"><i class="fa fa-edit"></i><span>Tbl Subcategorias</span></a>
</li>

<li class="{{ Request::is('tblEmpresas*') ? 'active' : '' }}">
    <a href="{{ route('tblEmpresas.index') }}"><i class="fa fa-edit"></i><span>Tbl Empresas</span></a>
</li>

<li class="{{ Request::is('tblFabricantes*') ? 'active' : '' }}">
    <a href="{{ route('tblFabricantes.index') }}"><i class="fa fa-edit"></i><span>Tbl Fabricantes</span></a>
</li>

<li class="{{ Request::is('tblContactosFabricantes*') ? 'active' : '' }}">
    <a href="{{ route('tblContactosFabricantes.index') }}"><i class="fa fa-edit"></i><span>Tbl Contactos Fabricantes</span></a>
</li>

<li class="{{ Request::is('tblListaPrecios*') ? 'active' : '' }}">
    <a href="{{ route('tblListaPrecios.index') }}"><i class="fa fa-edit"></i><span>Tbl Lista Precios</span></a>
</li>

<li class="{{ Request::is('tblTitulosListas*') ? 'active' : '' }}">
    <a href="{{ route('tblTitulosListas.index') }}"><i class="fa fa-edit"></i><span>Tbl Titulos Listas</span></a>
</li>

<li class="{{ Request::is('tblInventarios*') ? 'active' : '' }}">
    <a href="{{ route('tblInventarios.index') }}"><i class="fa fa-edit"></i><span>Tbl Inventarios</span></a>
</li>

<li class="{{ Request::is('tblCotizaciones*') ? 'active' : '' }}">
    <a href="{{ route('tblCotizaciones.index') }}"><i class="fa fa-edit"></i><span>Tbl Cotizaciones</span></a>
</li>

<li class="{{ Request::is('tblDetalleCotizacions*') ? 'active' : '' }}">
    <a href="{{ route('tblDetalleCotizacions.index') }}"><i class="fa fa-edit"></i><span>Tbl Detalle Cotizacions</span></a>
</li>

<li class="{{ Request::is('tblColors*') ? 'active' : '' }}">
    <a href="{{ route('tblColors.index') }}"><i class="fa fa-edit"></i><span>Tbl Colors</span></a>
</li>
--}}
