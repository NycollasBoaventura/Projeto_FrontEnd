@extends('produtos.formulario')
@section ('form')
        <div class="form-group">
             <label>Nome</label>
             <input class="form-control" type="text" name="nome" value="{{old('nome')}}" />
         </div>
        <div class="form-group">
             <label>Descrição</label>
             <textarea class="form-control" name="descricao">{{old('descricao')}}</textarea>
        </div>
        </div>
@stop