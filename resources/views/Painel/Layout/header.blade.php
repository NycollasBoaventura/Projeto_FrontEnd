<header class="main-header">
          <!-- Logo -->
<a href="{{ route('painel.index')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>5</b>F</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Projeto</b>Hitss</span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
      
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="" class="user-image" alt="">
                    <span class="hidden-xs">{{ $user->name }}</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="" class="img-circle" alt="">
      
                      <p>
                        {{ $user->name }} - Usuário
                      <small>Membro desde {{ $user->created_at->diffForHumans() }}</small>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="#" class="btn btn-primary btn-flat">Perfil</a>
                      </div>
                      <div class="pull-right">
                        <a href="#" class="btn btn-danger btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                      </div>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                        @csrf
                    </form>
                      
                    </li>
                  </ul>
                </li>
                
              </ul>
            </div>
          </nav>
        </header>