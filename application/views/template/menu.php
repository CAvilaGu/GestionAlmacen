        <nav class="navbar-default navbar-side gray-light" role="navigation">
            <div class="sidebar-collapse" style="background-color: #DCDCDC; border-right: black 2px solid;">
                <ul class="nav" id="main-menu">
                    <li class="text-center"><h5><strong>COMPRAS</strong></h5></li>
                    <li>
                        <a href="ListStockController"><i class="fa fa-cubes fa-3x text-justify"></i> Entrada a Almacén</a>
                    </li>
                    <li>
                        <a  href="ListProveedoresController"><i class="fa fa-industry fa-3x text-justify"></i> Proveedores</a>
                    </li>
                    <li class="text-center"><h5><strong>VENTAS</strong></h5></li>
                    <li>
                        <a href="listOrdenDespachoController"><i class="fa fa-exchange fa-3x text-justify"></i>Despacho<span></span></a>
               
                    </li>  
                    <li>
                        <a  href="ListClientesController"><i class="fa fa-users fa-3x text-justify"></i> Clientes</a>
                    </li>
                    <li class="text-center"><h5><strong>ALMACÉN</strong></h5></li>
                    <li  >
                        <a  href="ListProductosController"><i class="fa fa-cube fa-3x text-justify"></i> Productos </a>
                    </li>       
                    <li  >
                        <a   href="InventarioController"><i class="fa fa-pencil-square-o fa-3x text-justify"></i> Inventario</a>
                    </li> 
                    <li  >
                        <a   href="#"><i class="fa fa-object-ungroup fa-3x text-justify"></i>Almacenes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a  href="ListGalponesController"><i class="fa fa-home text-justify"></i> Galpones</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-arrows text-justify"></i>Movimientos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                    <li>
                                        <a href="ListMovimientosInternosController"><i class="fa fa-circle"></i>Internos</a>
                                    </li>
                                    <li>
                                        <a href="ListMovimientosExternosController"><i class="fa fa-circle-thin"></i>Externos</a>
                                    </li>
                                </ul>
                            </li>  
                        </ul>
                    </li> 
                </ul>
            </div>
        </nav>  