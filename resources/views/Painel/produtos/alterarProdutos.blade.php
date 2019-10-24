@extends('produtos.formulario')
@section ('form')
        <div class="form-group">
             <label>nome</label>
             <input class="form-control" type="number" name="valor" value="{{ $produtos->nome }}"/>
        </div>
        <div class="form-group">
             <label>Descrição</label>
             <textarea class="form-control" name="descricao">{{$produto->descricao}}</textarea>
        </div>
@stop