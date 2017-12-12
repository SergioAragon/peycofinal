<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <!-- <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/logo1.jpg" class="img-circle" alt="User Image"/>
            </div> -->
            <div class="pull-left info">
                <!-- <p>Administrador</p> -->

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <!-- <div class="input-group"> -->
                <div class="pull-right">
                <p><a class="btn btn-default" href="/peyco01/backend/web/archivos/ayudausuarios">Ayuda &raquo;</a></p>
                <!-- <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span> -->
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    //['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    //['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    //['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Inicio', 'url' => ['../../frontend/']],
                    // ['label' => 'Registro Admin', 'url' => ['clientes/create']],
                    //['label' => 'Productos', 'url' => ['producto/index']],
                    // ['label' => 'Color', 'url' => ['color/index']],
                    ['label' => 'Agenda', 'url' => ['agenda/']],
                    // ['label' => 'Clientes', 'url' => ['clientes/index']],
                    // ['label' => 'Pedidos', 'url' => ['pedido/index']],
                    // ['label' => 'Cotización', 'url' => ['cotizacion/index']],
                    
                    [
                        'label' => 'Listas Principales',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Productos', 'url' => ['producto/index']],                            
                            ['label' => 'Clientes', 'url' => ['clientes/index']],
                            ['label' => 'Pedidos', 'url' => ['pedido/index']],
                            ['label' => 'Cotización', 'url' => ['cotizacion/index']],
                        ],
                    ],

                    [
                        'label' => 'Configuración',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            //['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            ['label' => 'Color', 'url' => ['color/index']],
                            ['label' => 'Materiales', 'url' => ['materiales/index']],
                            // ['label' => 'Fase', 'url' => ['fase/index']],
                            // ['label' => 'Estado', 'url' => ['estado/index']],
                            // ['label' => 'Departamento', 'url' => ['departamento/index']],
                            // ['label' => 'Municipio', 'url' => ['municipio/index']],
                            ['label' => 'Clasificacion', 'url' => ['clasificacion/index']],
                            
                        ],
                    ],

                    [
                        'label' => 'Listas Detalle',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            //['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            // ['label' => 'Cotización-Productos', 'url' => ['detalle-cotizacion-productos/index']],
                            ['label' => 'Material-Pedido', 'url' => ['detalle-material-pedido/index']],
                            // ['label' => 'Detalle Fase', 'url' => ['detalle-fase/index']],
                            //['label' => 'Detalle Stand', 'url' => ['detalle-stand/index']],
                            ['label' => 'Producto Color', 'url' => ['detalle-producto-color/index']],
                            ['label' => 'Producto Material', 'url' => ['detalle-producto-material/index']],
                        ],
                    ],

                    [
                        'label' => 'Reportes',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            // ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            //['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            // ['label' => 'Cotización-Productos', 'url' => ['detalle-cotizacion-productos/index']],
                            // ['label' => 'Material-Pedido', 'url' => ['detalle-material-pedido/index']],
                            // ['label' => 'Detalle Fase', 'url' => ['detalle-fase/index']],
                            //['label' => 'Detalle Stand', 'url' => ['detalle-stand/index']],
                            ['label' => 'Reporte Color', 'url' => ['site/reporte-color']],
                            ['label' => 'Reporte Pedidos', 'url' => ['pedido/reporte-pedido']],
                            // ['label' => 'Producto Material Sin Existencias', 'url' => ['detalle-producto-material/index']],
                        ],
                    ],

                    // [
                    //     'label' => 'Same tools',
                    //     'icon' => 'share',
                    //     'url' => '#',
                    //     'items' => [
                    //         ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                    //         ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                    //         [
                    //             'label' => 'Level One',
                    //             'icon' => 'circle-o',
                    //             'url' => '#',
                    //             'items' => [
                    //                 ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                    //                 [
                    //                     'label' => 'Level Two',
                    //                     'icon' => 'circle-o',
                    //                     'url' => '#',
                    //                     'items' => [
                    //                         ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                    //                         ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                    //                     ],
                    //                 ],
                    //             ],
                    //         ],
                    //     ],
                    // ],
                ],
            ]
        ) ?>

    </section>

</aside>
