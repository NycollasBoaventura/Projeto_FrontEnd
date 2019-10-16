<aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
              <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="">
              </div>
              <div class="pull-left info">
              <p>{{ $user->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                    </span>
              </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
              <li class="header">Menu Lateral</li>
              <li class="active treeview">
                <a href="#">
                  <i class="fa fa-dashboard"></i> <span>Painel</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                <li class="active"><a href="{{ route('painel.index') }}"><i class="fa fa-home"></i>Página Principal</a></li>
                <li class="active"><a href="{{ route('painel.Clientes.index') }}"><i class="fa fa-users"></i>Página Cliente</a></li>
                <li class="active"><a href="{{ route('painel.Produtos.index') }}"><i class="fa fa-bars"></i>Página Produtos</a></li>
                </ul>
              </li>

            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>