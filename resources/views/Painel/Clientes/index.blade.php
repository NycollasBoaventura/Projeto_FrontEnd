@extends('Painel.Layout.index')


@section('content')

    <section class="content">

        <div class="row">
                <div class="col-xs-12">

                    <div class="box ">
                        <div class="box-header"> 
                            <h3 class="box-title"> Tabela de clientes </h3>

                            <div class ="box-tools">
                                <div class="input-group input-group-sm" style="width: 160   px;">
                                    <input type="text" name="table_search" class="form-controll pull-right" placeholder="Procurar por Id">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-procurar por Id"></i></button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>idCliente</th>
                                    <th>Nome</th>
                                    <th>cpf</th>
                                    <th>rg</th>
                                    
                                    
                        
                                  
                                </tr>
                                </thead>
                                <tr>
                                </tbody>
                                @foreach($response_array as $cliente)
                                </tr>
                                    <tr>
                                        <td>{{ $cliente->idcliente }}</td>
                                        <td>{{ $cliente->nome }}</td>
                                        <td>{{ $cliente->cpf }}</td>
                                        <td>{{ $cliente->rg }}</td>
                                        <td><a href='http://192.168.0.54:8080/clientes/excluir/{{ $cliente->idcliente }}'><i class="fa fa-trash"></i></a>
                                        <td><a href='formulario'><i class="fa fa-edit"></i></a>
                                    

    
                                        
                                        



                                        

                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                               

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