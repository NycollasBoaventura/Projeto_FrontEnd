@extends('Painel.Layout.index')


@section('content')

    <section class="content">

        <div class="row">
                <div class="col-xs-12">

                    <div class="box ">
                        <div class="box-header"> 
                            <h3 class="box-title"> Tabela de Clientes </h3>

                            <div class ="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-controll pull-right" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Cadastro</th>
                                </tr>
                                </thead>
                                <tr>
                                </tbody>
                                @foreach($clientes as $clientes)
                                </tr>
                                    <tr>
                                        <td>{{ $clientes->id }}</td>
                                        <td>{{ $clientes->name }}</td>
                                        <td>{{ $clientes->email }}</td>
                                        <td>{{ $clientes->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Cadastrro</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
    </section>

@endsection