@extends('Painel.Layout.index')

@section('content')

    <section class="content">

        <div class="row">
        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-aqua">
            <div class="inner">
              @inject('clientes', 'App\User')
              
            <h3>{{ $clientes->count() }}</h3>

              <p>Clientes</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          <a href="{{ route('painel.Clientes.index') }}" class="small-box-footer"> Infos <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </section>

@endsection