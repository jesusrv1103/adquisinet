<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="active-menu" href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Inicio</a>
            </li>

            <li>
                <a href="#"><i class="fas icon-cart"></i>Productos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.productos.index') }}">Productos</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.giros.index') }}">Giros</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.impuestos.index') }}">Impuestos</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.marcas.index') }}">Marcas</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.unidades.index') }}">Unidades</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.partidas.index') }}">Partidas</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fas icon-cart"></i>Proveedores<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.proveedores.index') }}">Proveedores</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fas icon-cart"></i>Zona geográfica<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.estados.index') }}">Estados</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.municipios.index') }}">Municipios</a>
                    </li>
                </ul>
            </li>


        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->
