  <!DOCTYPE html>

  <html>

    @includeif('Painel.Layout.head')
    
    <body class="hold-transition skin-blue sidebar-mini">
    
      <div class="wrapper">

        @includeIf('Painel.Layout.header')
    
        @includeif('Painel.layout.sidebar_lateral')

          <div class="content-wrapper">

        <section class="content-header">
          <h1>
            Painel de Controle

            @if(@isset($urlAtual))
            
          <small>{{ $urlAtual }}</small>
            
          @else
          
          <small>Página Principal</small>
          
          @endisset
          
        </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          
            @if(@isset($urlAtual))
              <li class="active"> {{$urlAtual}} </li>
            @else
              <li class="active"> Painel de Controle  </li>          
            @endisset

          </ol>
        </section>

        @yield('content')

      </div>
      
      @includeif('Painel.Layout.footer')

      
      </div> 

      @includeif('Painel.Layout.javascript')

  </body>

  </html> 