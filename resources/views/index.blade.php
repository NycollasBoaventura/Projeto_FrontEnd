@extends('Painel.Layout.index')


@section('content')

    <section class="content">

        <div class="row">
                <div class="col-xs-12">

                    <div class="box ">
                        <div class="box-header"> 
                            <h3 class="box-title"> Tabela de Clientes </h3>

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
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Rg</th>
                                    <th>cpf</th>
                                   
                                 

                                    
                        
                                 <th>Cadastro</th>
                                  
                                </tr>
                                </thead>
                                <tr>
                                </tbody>
                                @foreach($Client as $cliente)
                                </tr>
                                    <tr>
                                        <td>{{ $cliente->id }}</td>
                                        <td>{{ $cliente->name }}</td>
                                        <td>{{ $cliente->Rg }}</td>
                                        <td>{{ $cliente->Cpf }}</td>
                                
                    
                                        <td>{{ $cliente->created_at->diffForHumans() }}</td>
                                    </tr>
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

