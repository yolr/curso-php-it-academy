@extends('layouts.plantillabase');

@section('contenido')

<form action="{{route('partido.update',$partido->id) }}" method="post">
@csrf
@method('PUT')
  <div class="mb-3">
    <label for="local_gol" class="form-label">LOCAL GOL</label>
    <input type="text" class="form-control" id="local_gol" aria-describedby="local_gol" name="local_gol" value="{{$partido->local_go}}">
  </div>
  <div class="mb-3">
    <label class="form-label" for="exampleCheck1">VISITOR GOL</label>
    <input type="text" class="form-control" id="visitor_gol" name="visitor_gol" value="{{$partido->visitor_gol}}">
    
  </div>
  <div class="mb-3">
    <label class="form-label" for="exampleCheck1">ENCUENTRO</label>
    <input type="date" class="form-control" id="encuentro" name="encuentro" velue="{{$partido->encuentro}}">
    
  </div>

  <a href ="{{ route('partido') }}" class ="btn btn-secondary" tabninex="5">Cancelar</a>

  <button type="submit" class="btn btn-primary" tabinex ="4">Actualizar</button>
</form>

@endsection