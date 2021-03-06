@extends('Painel.Layout.index')


@section('content')

    <section class="content">

        <div class="row">
                <div class="col-xs-12">

                    <div class="box ">
                        <div class="box-header"> 
                            <h3 class="box-title"> Tabela de Produtos </h3>

                            <div class ="box-tools">
                                <div class="input-group input-group-sm" style="width: 160px;">
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
                                    <th>idProduto</th>
                                    <th>Nome</th>
                                    <th>descricao</th>
                                                                                                                                                                    
                                </tr>
                                </thead>
                                <tr>
                                </tbody>
                                @foreach($response_array as $produtos)
                                </tr>
                                    <tr>
                                        <td>{{ $produtos->idProduto }}</td>
                                        <td>{{ $produtos->nome }}</td>
                                        <td>{{ $produtos->descricao }}</td>
                                        <td><a href='http://192.168.0.52:8080/produtos/excluir/{{ $produtos->idProduto }}'><i class="fa fa-trash"></i></a>
                                        <td><a href='http://192.168.0.52-:8080/produtos/atualizar/{{ $produtos->idProduto }}'><i class="fa fa-edit"></i></a>                                                                  
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


