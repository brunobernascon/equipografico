
  <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/desconocido.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alberto Bernasconi</p>
          <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>

        <li>
          <a href="cliadm.php">
            <i class="fa fa-users"></i> <span>Clientes</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Presupuestos</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">Nuevos</small>
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widget1s.html">
            <i class="fa fa-play-circle"></i> <span>Pedidos en curso</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-suitcase"></i>
            <span>Proveedores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Facturación</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Calendario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-wechat"></i> <span>Mensajero</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
               <li class="header">Tareas</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Primer Orden</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Segundo Orden</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>No urgentes</span></a></li>
      </ul>
    </section>





//<?php

                                               // 0,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5
//if ($_SESSION['perfil'] == 1) $VecAccesos = array(0,1,0,1,0,1,1,1,1,1,1,1,1,1,1,0,0,0);
//if ($_SESSION['perfil'] == 2) $VecAccesos = array(1,0,1,0,1,0,1,1,1,0,0,0,1,0,0,0,0,0);
//if ($_SESSION['perfil'] == 3) $VecAccesos = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1);    
//?>

    <!--        <div class="navbar-default sidebar" role="navigation;  style=filter:alpha(opacity=100); opacity:1">
                        <ul class="nav" id="side-menu">
                             <?php if (($VecAccesos[0]==1)) { ?>
                                <li>
                                    <a href="clitllr.php"><i class="fa fa-user fa-fw"></i> Clientes</a>                                             
                                </li>
                                                        <?php } ?>
                                <?php if (($VecAccesos[15]==1)) { ?>
                                <li>
                                    <a href="estadocli.php"><i class="fa fa-road fa-fw"></i> Estado</a>                                                         
                                                         
                                </li>
                                                        <?php } ?>
                                <?php if (($VecAccesos[15]==1)) { ?>
                                <li>
                                    <a href="precli.php"><i class="fa fa-file-text fa-fw"></i> Presupuestos</a>                                                         
                                                         
                                </li>
                                                        <?php } ?>

                                <?php if (($VecAccesos[15]==1)) { ?>
                                <li>
                                    <a href="chatcli.php"><i class="fa fa-wechat fa-fw"></i> Mensajero</a>                                                         
                                                         
                                </li>
                                                        <?php } ?>
                             <?php if (($VecAccesos[1]==1)) { ?>
                                <li>
                                    <a href="cliadm.php"><i class="fa fa-user fa-fw"></i> Clientes</a>                                             
                                </li>
                                                        <?php } ?>


                            <?php if (($VecAccesos[2]==1)) { ?>
                                <li>
                                    <a href="vehitllr.php"><i class="fa fa-automobile  fa-fw"></i> Vehículos</a>                                             
                                </li>
                                                        <?php } ?>

                             <?php if (($VecAccesos[3]==1)) { ?>
                                <li>
                                    <a href="busveh.php"><i class="fa fa-automobile  fa-fw"></i> Vehículos</a>                                             
                                </li>
                                                        <?php } ?>  
                                        
                            <?php if (($VecAccesos[14]==1)) { ?>
                                <li>
                                    <a href="historial.php"><i class="fa fa-history fa-fw"></i> Historial</a>                                             
                                </li>
                                                        <?php } ?>      
                            <?php if (($VecAccesos[4]==1)) { ?>
                                <li>
                                    <a href="provtllr.php"><i class="fa fa-briefcase  fa-fw"></i> Proveedores</a>                                             
                                </li>
                                                        <?php } ?>

                             <?php if (($VecAccesos[5]==1)) { ?>
                                <li>
                                    <a href="provadm.php"><i class="fa fa-briefcase  fa-fw"></i> Proveedores</a>                                             
                                </li>
                                                        <?php } ?>  
                            <?php if (($VecAccesos[6]==1)) { ?>
                                <li>
                                    <a href="stkadmtllr.php"><i class="fa fa-list fa-fw"></i> Stock</a>                                             
                                </li>
                                                        <?php } ?> 
                                <?php if (($VecAccesos[7]==1)) { ?>
                                <li>
                                    <a><i class="fa fa-edit fa-fw"></i> Preseupuestos <span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <?php if ($VecAccesos[8]) { ?>
                                                <li>
                                                    <a<?php if ($pagina == 5) echo ' class="active"'; ?> href="nupre.php"><i class="fa fa-file-o fa-fw"></i> Nuevo</a>
                                                </li>
                                                <?php } 
                                                if ($VecAccesos[9]) { ?>
                                                    <li>
                                                        <a<?php if ($pagina == 6) echo ' class="active"'; ?> href="buspre.php"><i class="fa fa-search-plus fa-fw"></i> Buscar</a>
                                                    </li>
                                                    <?php
                                                }else{?>
                                            <?php } ?>
                                            <?php } ?>                                    
                                        </ul>                  
                                </li>                              
                            <?php if (($VecAccesos[13]==1)) 
                                { ?>
                                <li>                
                                            <?php if ($VecAccesos[13]) { ?>
                                                <li>
                                                    <a<?php if ($pagina == 10) echo ' class="active"'; ?> href="prf.php?pagina="><i class="fa fa-group fa-fw"></i> Usuarios</a>
                                                </li>
                                                <?php } 
                                                } ?>                                    
                                                         
                                </li>
                                                      <?php if (($VecAccesos[14]==1)) 
                                { ?>
                                <li>                
                                            <?php if ($VecAccesos[13]) { ?>
                                                <li>
                                                    <a<?php if ($pagina == 11) echo ' class="active"'; ?> href="doc.php?pagina="><i class="fa fa-book fa-fw"></i> A cerca de...</a>
                                                </li>
                                                <?php } 
                                                } ?>                                    
                                                         
                                </li>





        

                                        </ul>                  
                                </li>
                                
                                        </ul>                  
                                </li>
        

                                        </ul>                  
                                </li>
                                
                                        </ul>                  
                                </li>


                        </ul>
            </div>
            

            </div>

        </nav> -->