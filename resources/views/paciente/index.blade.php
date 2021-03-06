@extends('layouts.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
      {{ $title }}
      </h1>
   </div>
</div>

@include('layouts.msg')

<div class="row">
   <div class="col-md-4"><a href="{{ url('/patient/register') }}" class="btn btn-success">Cadastrar</a></div>
   <div class="col-md-3 col-md-offset-5">
      <form class="form-inline" action="{{ url('/patient/search')}}" method="post">
         {{ csrf_field() }}
         <div class="form-group">
            <label class="sr-only" for="search">Buscar</label>
            <input type="text" class="form-control" id="search" name="search" placeholder="Nome, CPF, Cartão SUS" required />
         </div>
         <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>
   </div>
</div>

<br />

<div class="row">
   <div class="col-md-12">
      <table class="table table-striped table-hover">
         <thead>
            <tr>
               <th>
                  Código
               </th>
               <th>
                  Nome
               </th>
               <th>
                  CPF
               </th>
               <th>
                  Cartão SUS
               </th>
               <th></th>
               <th></th>
               <th></th>
            </tr>
         </thead>

         <tbody>
            @foreach($paciente as $key => $value)
               <tr>
                  <td>{{ $value->id }}</td>
                  <td>{{ $value->nome }}</td>
                  <td>{{ $value->cpf }}</td>
                  <td>{{ $value->cartaosus }}</td>
                  <td>
                     <a href="{{ url('/patient/ver/'.$value->id) }}"><span class="text-primary glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                  </td>
                  <td>
                     <a href="{{ url('/patient/edit/'.$value->id) }}"><span class="text-warning glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                  </td>
                  <td>
                     <a href="{{ url('/patient/delete/'.$value->id) }}" onclick="return confirm('Você tem certeza disso?!')"><span class="text-danger glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
      {{ $paciente->links() }}
   </div>
</div>
@endsection
